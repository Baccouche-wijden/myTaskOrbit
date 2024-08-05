<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;

class ProjectPolicy
{
    public function assign(User $user)
    {
        // Only allow users with the role 'admin'
        return $user->role === 'admin';
    }
}



