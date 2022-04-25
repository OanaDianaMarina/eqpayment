<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenTableController extends Controller
{
    public function index() {
        return view('gentable');
    }
}
