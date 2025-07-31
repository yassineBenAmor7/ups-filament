<?php 
namespace App\Observers;
use App\Models\Formulaire\Response;
use App\Models\Formulaire\ResponseApproval;
class ResponseObserver
{
    public function created(Response $response)
    {
        if ($response->form->has_decision) {
            $firstStep = $response->form->workflowSteps()
                ->orderBy('ordre')
                ->first();

            if ($firstStep) {
                $response->approvals()->create([
                    'workflow_step_id' => $firstStep->id,
                    'status' => ResponseApproval::STATUS_PENDING
                ]);
            }
        }
    }
}