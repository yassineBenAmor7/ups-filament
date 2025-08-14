<?php

namespace App\Filament\Actions;
use Closure;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\Action;
use App\Models\Formulaire\Response;
use App\Models\Formulaire\ResponseApproval;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
class ApproveResponse extends Action
{
     public static function getDefaultName(): ?string
    {
        return 'Approve';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(function (Response $record){
            $nextStep = $record->getNextApprovalStep();

    if (!$nextStep) {
        return 'Submit'; 
    }
            $pivot = $record->form->workflowSteps()
                ->where('workflow_step_id', $nextStep->id)
                ->first()?->pivot;

    $lastOrdre = $record->form->workflowSteps()->max('ordre');
    $isLast = ((int)$pivot->ordre) === ((int)$lastOrdre);

    return $isLast ? 'Approve' : 'Submit';
        });
        $this->icon('heroicon-o-check-circle');

        // Visible only when:
        // - form has_decision = true
        // - current user has the role of the next step
        // - and if it's the final step, they are the last approver
      $this->visible(function (Response $record): bool {
   

    if (!$record->form->has_decision) {
       
        return false;
    }

    $user = Auth::user();
   

   

    $nextStep = $record->getNextApprovalStep();
    

    if (!$nextStep) {
       
        $lastStep = $record->form->workflowSteps()
            ->orderBy('nachd_form_workflow.ordre', 'desc')
            ->first();


        if (!$lastStep) {
            return false;
        }
        $pivot = $lastStep->pivot;
    } else {
        $pivot = $record->form
            ->workflowSteps()
            ->where('workflow_step_id', $nextStep->id)
            ->first()?->pivot;
    }

   

    if (!$pivot) {
        return false;
    }

    $roleName = \Spatie\Permission\Models\Role::find($pivot->role_id)?->name;
   

    if (!$roleName || !$user->hasRole($roleName)) {
        return false;
    }

    $alreadyApproved = $record->approvals()
        ->where('workflow_step_id', $pivot->workflow_step_id)
        ->where('approved_by', $user->id)
        ->exists();

   
    return !$alreadyApproved;
});



        $this->form([
            Textarea::make('notes')->label(__('Notes')),
        ]);

        $this->action(function (array $data): void {
            /** @var Response $record */
            $record = $this->record;
            $user = Auth::user();

            $nextStep = method_exists($record, 'getNextApprovalStep') ? $record->getNextApprovalStep() : null;
            if (!$nextStep) {
               Notification::make()
    ->title(__('No workflow step found to approve.'))
    ->danger()
    ->send();

                return;
            }

            $pivot = $record->form
                ->workflowSteps()
                ->where('workflow_step_id', $nextStep->id)
                ->first()?->pivot;

            if (!$pivot) {
                
              Notification::make()
    ->title(__('Invalid workflow configuration.'))
    ->danger()
    ->send();

                return;
            }

            $lastOrdre = $record->form->workflowSteps()->max('ordre');
            $isLast = ((int) $pivot->ordre) === ((int) $lastOrdre);

            $status = $isLast ? ResponseApproval::STATUS_APPROVED : ResponseApproval::STATUS_SUBMITTED;

            $record->approvals()->create([
                'workflow_step_id' => $nextStep->id,
                'status' => $status,
                'approved_by' => $user->id,
                 'approved_at'=>now(),
                'notes' => $data['notes'] ?? null,
            ]);

            if ($isLast) {
                $record->status = 'close';
                $record->processed_at = now();
            } else {
                $record->status = 'open';
            }

            $record->save();

            Notification::make()
    ->title($isLast ? __('Response approved.') : __('Response submitted to next approver.'))
    ->success()
    ->send();
        });
    }
     public function mutateRecordDataUsing(?Closure $callback): static
    {
        $this->mutateRecordDataUsing = $callback;

        return $this;
    }
}


