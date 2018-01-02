<?php

namespace App\Http\Controllers\Pages\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        return view('pages.view.view');
    }

    public function tables()
    {
        return view('pages.tables.tables');
    }

    public function datatables()
    {
        return view('pages.tables.datatables');
    }

    public function googleMap()
    {
        return view('pages.maps.google_map');
    }

    public function vectorMap()
    {
        return view('pages.maps.vector_map');
    }

    public function charts()
    {
        return view('pages.chart.charts');
    }

    public function invoice()
    {
        return view('pages.extra.invoice');
    }

    public function fourError()
    {
        return view('pages.extra.404');
    }

    public function fiveError()
    {
        return view('pages.extra.500');
    }

    public function blankTemplate()
    {
        return view('pages.extra.blank_template');
    }

    public function login()
    {
        return view('pages.extra.login');
    }

    public function register()
    {
        return view('pages.extra.register');
    }

    public function lockScreen()
    {
        return view('pages.extra.lock_screen');
    }

    public function gallery()
    {
        return view('pages.extra.gallery');
    }

    public function timeLine()
    {
        return view('pages.extra.time_line');
    }

}
