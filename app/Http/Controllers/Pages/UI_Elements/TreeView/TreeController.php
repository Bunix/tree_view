<?php

namespace App\Http\Controllers\Pages\UI_Elements\TreeView;

use App\Model\menu_tree;
use App\Model\Penjualan;
use App\Model\print_download;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = menu_tree::where('parent_id', '=', 0)->get();
        $getDownload = print_download::all();
        return view('pages.ui_elements.tree_view', compact('categories','getDownload'));
    }

    public function postTree(Request $request)
    {
        if ($request->getMethod() == 'POST') {

            if ($request->hasFile('file')) {

                $file = $request->file('file');
                $file->move('images', $file->getClientOriginalName());

                //==========================================================//

                $get_num = 'number/kode_form.txt';
                $kode_form = file_get_contents($get_num);

                $sum = (int)$kode_form + 1;

                file_put_contents($get_num, $sum);

                //==========================================================//

                if ($request->get('id_tree') == null){
                    $id_tree = '0';
                } else {
                    $id_tree = $request->get('id_tree');
                }

                $file_upload = $file->getClientOriginalName();
                $type = 'FRM-' . date('dmY') . $kode_form;

                $create = new menu_tree();
                $create->parent_id = $id_tree;
                $create->user_id = Auth::user()->id;
                $create->kode_form = $type;
                $create->id_file = $request->get('id_file');
                $create->type = $request->get('type_tree');
                $create->title = $request->get('title_tree');
                $create->file = $file_upload;
                $create->tanggal = date('d-m-Y');
                $create->waktu = app()->make('WaktuService')->waktu();
                $create->save();

                return redirect()->back();
            }

        }
        if ($request->getMethod() == 'GET') {
            if ($request->get('type_tree') == 'children') {
                $get_num = 'number/kode_form.txt';
                $kode_form = file_get_contents($get_num);

                $sum = (int)$kode_form + 1;

                file_put_contents($get_num, $sum);

                $type = 'FRM-' . date('dmY') . $kode_form;
                $id_file = $request->get('id_file');
                $file_upload = $request->get('file_tree').'-'.date('Y');
            } else {
                $type = null;
                $file_upload = null;
                $id_file = null;
            }
            $create = new menu_tree();
            $create->parent_id = $request->get('id_tree');
            $create->user_id = Auth::user()->id;
            $create->kode_form = $type;
            $create->id_file = $id_file;
            $create->type = $request->get('type_tree');
            $create->title = $request->get('title_tree');
            $create->file = $file_upload;
            $create->tanggal = date('d-m-Y');
            $create->waktu = app()->make('WaktuService')->waktu();
            $create->save();

            echo json_encode($create);
        }
    }

    public function getPDF($type, $id, $tahun)
    {
        $total = Penjualan::where('bulan', '=', $id)->sum('banyak_penjualan');
        $tanggal = Penjualan::where('bulan', '=', $id)->first(['bulan', 'tahun']);

        if ($type == 1) {
            $sepatu = app()->make('HariService')->hari(1, $id, $tahun);
            $baju = app()->make('HariService')->hari(2, $id, $tahun);
            $celana = app()->make('HariService')->hari(3, $id, $tahun);
            $aksesoris = app()->make('HariService')->hari(4, $id, $tahun);

//        dd(json_encode($sepatu));
            $pdf = PDF::loadView('pages.ui_elements.penjualan', compact('total', 'tanggal', 'penjualan', 'sepatu', 'baju', 'celana', 'aksesoris'))
                ->setPaper('a4');

            return $pdf->stream('laporan.penjualan');
        }

    }
}
