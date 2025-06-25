<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BasePolicy
{
    use HandlesAuthorization;

   
    public function validate(User $user, $model = null)
    {
        $resource = class_basename(get_class($this));
        $resource = str_replace('Policy', '', $resource);
        $resource = Str::snake($resource);
        
        return $user->can("validate_{$resource}");
    }

    
    public function publish(User $user, $model = null)
    {
        $resource = class_basename(get_class($this));
        $resource = str_replace('Policy', '', $resource);
        $resource = Str::snake($resource);
        
        return $user->can("publish_{$resource}");
    }
}