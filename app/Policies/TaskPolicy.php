<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Task $task)
    {
        return $user->id == $task->user->id;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Task $task)
    {
        return $user->id == $task->user->id;
    }

    public function delete(User $user, Task $task)
    {
        //
    }

    public function restore(User $user, Task $task)
    {
        //
    }

    public function forceDelete(User $user, Task $task)
    {
        //
    }
}
