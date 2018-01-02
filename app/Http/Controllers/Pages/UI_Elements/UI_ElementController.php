<?php

namespace App\Http\Controllers\Pages\UI_Elements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UI_ElementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function color()
    {
        return view('pages.ui_elements.color');
    }

    public function typography()
    {
        return view('pages.ui_elements.typography');
    }

    public function icons()
    {
        return view('pages.ui_elements.icons');
    }

    public function buttons()
    {
        return view('pages.ui_elements.buttons');
    }

    public function notifications()
    {
        return view('pages.ui_elements.notifications');
    }

    public function modals()
    {
        return view('pages.ui_elements.modals');
    }

    public function progress()
    {
        return view('pages.ui_elements.progress');
    }

    public function tabsAccordian()
    {
        return view('pages.ui_elements.tabs_accordian');
    }

    public function sliders()
    {
        return view('pages.ui_elements.sliders');
    }

    public function nestables()
    {
        return view('pages.ui_elements.nestables');
    }

}
