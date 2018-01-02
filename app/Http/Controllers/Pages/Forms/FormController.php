<?php

namespace App\Http\Controllers\Pages\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formElements()
    {
        return view('pages.forms.form_elements');
    }

    public function formLayouts()
    {
        return view('pages.forms.form_layouts');
    }

    public function formWizard()
    {
        return view('pages.forms.form_wizard');
    }

}
