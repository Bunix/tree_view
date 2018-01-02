<?php

namespace App\Http\Controllers\Pages\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function social()
    {
        return view('pages.social.social');
    }

}
