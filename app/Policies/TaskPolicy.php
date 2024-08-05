<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    /**
     * Determine if the given task can be updated by the user.
     */
    public function update(User $user, Task $task)
    {
        return $user->id === $task->user_id || $user->isAdmin(); // Adjust according to your needs
    }

    /**
     * Determine if the given task can be deleted by the user.
     */
    public function delete(User $user, Task $task)
    {
        return $user->id === $task->user_id || $user->isAdmin(); // Adjust according to your needs
    }
}
