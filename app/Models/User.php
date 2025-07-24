<?php

namespace App\Models;

use Filament\Models\Contracts\HasAvatar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\StudentsPredefinedList;

class User extends Authenticatable implements HasAvatar
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'name_ar',
        'email',
        'password',
        'avatar_url',
        'role_id',
        'cin',
        'phone',
        'nationalite',
        'genre',
        'address',
        'cnss',
        'date_naissance',
        'lieu_naissance',
        'cv',
        'description_ar',
        'description_en',
        'description_fr',
        'is_validated',
        'publier',
        'custom_fields',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_validated' => 'boolean',
            'publier' => 'boolean',
            'custom_fields' => 'array',
            'date_naissance' => 'date',
        ];
    }

    public function getFilamentAvatarUrl(): ?string
    {
        $avatarColumn = config('filament-edit-profile.avatar_column', 'avatar_url');
        return $this->$avatarColumn ? Storage::url($this->$avatarColumn) : null;
    }

    public function department()
    {
        if ($this->isRole('Enseignant')) {
            return $this->teacher?->department;
        } elseif ($this->isRole('Etudiant')) {
            $stp = StudentsPredefinedList::where('cin', $this->cin)->first();
            if ($stp) {
                return $stp->group?->sector?->department;
            }
        }
        return null;
    }

    protected static function booted()
    {
        static::saving(function ($user) {
            if ($user->avatar_url && is_string($user->avatar_url)) {
                $user->avatar_url = preg_replace('/[\x00-\x1F\x7F]/u', '', $user->avatar_url);
                $user->avatar_url = rtrim($user->avatar_url, '/');
            }
        });
    }
}
