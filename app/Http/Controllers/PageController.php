<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function asset()
    {
        return view('pages.asset');
    }
}
