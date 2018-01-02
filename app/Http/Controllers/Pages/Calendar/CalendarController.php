<?php

namespace App\Http\Controllers\Pages\Calendar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function calendar()
    {
        return view('pages.calendars.calendar');
    }

    public function calendarLang()
    {
        return view('pages.calendars.calendar_lang');
    }

    public function calendarMonth()
    {
        return view('pages.calendars.calendar_month');
    }

    public function calendarLazy()
    {
        return view('pages.calendars.calendar_lazy');
    }

}
