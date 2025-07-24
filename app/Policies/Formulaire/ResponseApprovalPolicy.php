<?php

namespace App\Policies\Formulaire;

use App\Models\User;
use App\Models\Formulaire\ResponseApproval;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResponseApprovalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_formulaire::response::approval');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ResponseApproval $responseApproval): bool
    {
        return $user->can('view_formulaire::response::approval');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_formulaire::response::approval');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ResponseApproval $responseApproval): bool
    {
        return $user->can('update_formulaire::response::approval');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ResponseApproval $responseApproval): bool
    {
        return $user->can('delete_formulaire::response::approval');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_formulaire::response::approval');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, ResponseApproval $responseApproval): bool
    {
        return $user->can('force_delete_formulaire::response::approval');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_formulaire::response::approval');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, ResponseApproval $responseApproval): bool
    {
        return $user->can('restore_formulaire::response::approval');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_formulaire::response::approval');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, ResponseApproval $responseApproval): bool
    {
        return $user->can('replicate_formulaire::response::approval');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_formulaire::response::approval');
    }
}
