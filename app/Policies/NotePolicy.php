<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NotePolicy
{
    public function view(User $user, Note $note): bool
    {
       return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Note $note): bool
    {
        return $user->is_admin || $user->id === $note->user_id;
    }


    public function delete(User $user, Note $note): bool
    {
        return $user->is_admin || $user->id === $note->user_id;
    }


}
