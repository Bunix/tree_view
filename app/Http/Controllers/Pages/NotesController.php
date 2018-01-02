<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Model\Notes;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function createNotes(Request $request)
    {
        $waktu = app()->make('WaktuService')->waktu();

        $create = new Notes();

        $create->user_id = Auth::user()->id;
        $create->notes = $request->notes;
        $create->tanggal = date('d M Y');
        $create->waktu = $waktu;
        $create->status = 1;
        $create->save();

//        echo json_encode($create);
    }

    public function getNotes()
    {
        $get_notes = app()->make('NotesService')->notes();
//        $get_notes = 'test';

        echo json_encode($get_notes);
    }

    public function deleteNotes(Request $request)
    {
        $change = Notes::where('id_notes', $request->data)->update(['status' => 0]);

        echo json_encode($change);
    }

    public function editNotes(Request $request)
    {
        $id = $request->get('id');
        $notes = $request->get('notes');
        $change = Notes::where('id_notes', $request->get('id'))
            ->update([
                'id_notes' => $id,
                'notes' => $notes
            ]);

        $get_notes = app()->make('NotesService')->notes();

        echo json_encode($get_notes);
    }

}
