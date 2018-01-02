<?php

namespace App\Http\Controllers\Pages\Builder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuilderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function builder()
    {
        return view('pages.builder.builder');
    }

    public function withSidebarBuilder()
    {
        return view('pages.builder.with_sidebar_builder');
    }

}
