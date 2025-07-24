<?php

namespace App\Livewire;
use Filament\Notifications\Notification;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Joaopaulolndev\FilamentEditProfile\Concerns\HasSort;
use Filament\Forms\Components\Select;
use App\Rules\IsArabicOnly;
use App\Rules\IsFrenchOnly;
use App\Rules\IsEnglishOnly;
class CustomProfileComponent extends Component implements HasForms
{
    use InteractsWithForms;
    use HasSort;

    public ?array $data = [];

    protected static int $sort = 0;

    public function mount(): void
    {
        $this->form->fill(Auth::user()->only([
            'name_ar', 'phone', 'cin', 'nationalite', 'genre', 'address', 'cnss',
            'date_naissance', 'lieu_naissance', 'cv',
            'description_ar', 'description_en', 'description_fr',
        ]));
    }

    public function form(Form $form): Form
{
    return $form
        ->schema([
            Section::make('Custom Information')
                ->aside()
                ->description('Custom Profile Fields.')
                ->schema([
                    TextInput::make('name_ar')
                        ->label('Name in Arabic')
                        ->required()
                        ->rules([new IsArabicOnly()])
                        ->helperText('Only in Arabic.'),
                    TextInput::make('phone')->label('Phone')->required(),
                    TextInput::make('cin')->label('CIN')->required(),
                    TextInput::make('nationalite')->label('Nationality')->required(),
                    Select::make('genre')  // champ select
                        ->label('Gender')
                        ->options([
                            'Man' => 'Man',
                            'Woman' => 'Woman',
                        ])
                        ->required(),
                    TextInput::make('address')->label('Address')->required(),
                    TextInput::make('cnss')->label('CNSS'),
                    DatePicker::make('date_naissance')->label('Date of birth')->required(),
                    TextInput::make('lieu_naissance')->label('Place of birth')->required(),

                    FileUpload::make('cv')
                        ->label('CV (PDF only)')
                        ->disk('public')
                        ->directory('users/cvs')
                        ->preserveFilenames()
                        ->acceptedFileTypes(['application/pdf'])
                        ->maxSize(2048)
                        ->rules(['file', 'mimetypes:application/pdf']) 
                        ->downloadable()
                        ->openable(true)
                        ->previewable(false)
                        ->required(),
                    Textarea::make('description_ar')
                        ->label('Description in Arabic')
                        ->rules([new IsArabicOnly()])
                        ->helperText('Only in Arabic.'),

                    Textarea::make('description_fr')
                        ->label('Description in French')
                        ->rules(['nullable',new IsFrenchOnly()])
                        ->helperText('Only in French.'),
                    Textarea::make('description_en')
                        ->label('Description en Anglais')
                        ->rules(['nullable',new IsEnglishOnly()])
                        ->helperText('Only in English.'),
                    ]),
        ])
        ->statePath('data');
}

    public function save(): void
    {
        Auth::user()->update($this->form->getState());
        Notification::make()
        ->title('Your profile information has been saved successfully.')
        ->success()
        ->send();
    }
    public function render(): View
    {
        return view('livewire.custom-profile-component');
    }
}
