<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Status;

class StatusPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user,Status $status)
    {
        return $user -> id === $status -> user_id;
    }
}
