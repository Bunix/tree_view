<?php

namespace App\Observer;

use App\Events\NotesEvent;
use App\Model\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesObserver
{
    public function created(Notes $notes)
    {
        $create = [
            'id_notes' => $notes->id_notes,
            'user_id' => $notes->user_id,
            'notes' => $notes->notes,
            'tanggal' => $notes->tanggal,
            'waktu' => $notes->waktu,
            'status' => $notes->status
        ];

        broadcast(new NotesEvent($create));

    }
}