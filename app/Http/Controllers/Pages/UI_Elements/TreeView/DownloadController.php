<?php

namespace App\Http\Controllers\Pages\UI_Elements\TreeView;

use App\Http\Controllers\Controller;
use App\Model\print_download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
    public function getDownload(Request $request)
    {
        $waktu = app()->make('WaktuService')->waktu();

        $input = new print_download();
        $input->user_id = Auth::user()->id;
        $input->id_tree = $request->get('idTree');
        $input->type = $request->get('type');
        $input->file_tree = $request->get('fileTree');
        $tanggal = $input->tanggal = date('d-m-Y');
        $time = $input->waktu = $waktu;

        $input->save();

        $getDownload = array(
            'time' => $time,
            'tanggal' => $tanggal,
            'user' => DB::table('users')->select('name')->where('id', Auth::user()->id)->get(),
            'file' => DB::table('menu_tree')->select('title')->where('id_tree', $request->get('idTree'))->get()
        );


//        echo json_encode($request->get('idTree').' '.$request->get('type').' '.$request->get('fileTree'));
        echo json_encode($getDownload);
    }

    public function test()
    {
        $test = print_download::all();

        echo json_encode($test);
    }
}
