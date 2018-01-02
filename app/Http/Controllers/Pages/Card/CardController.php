<?php

namespace App\Http\Controllers\Pages\Card;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function card()
    {
        return view('pages.card.card');
    }

}
