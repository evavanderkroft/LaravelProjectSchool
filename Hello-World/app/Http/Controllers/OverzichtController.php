<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverzichtController extends Controller
{
    public function show() {
    return view('overzicht');
}
}
