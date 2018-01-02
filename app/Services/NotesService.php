<?php

namespace App\Services;

use App\Model\Notes;
use Illuminate\Support\Facades\Auth;

class NotesService
{
    public function notes()
    {
        $waktu = app()->make('WaktuService')->waktu();

        $get_notes = [
            'notes' => Notes::where('user_id', Auth::user()->id)->get(),
            'time' => date('d M Y') . ' ' . $waktu
        ];

        return $get_notes;
    }
}