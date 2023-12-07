<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
{
    return view('acceuilcontroller.index');
}

public function index()
{
    return view('courscontroller.index');
}

public function index()
{
    return view('tarifscontroller.index');
}

public function index()
{
    return view('contactcontroller.index');
}

public function index()
{
    return view('mentionslegalescontroller.index');
}
}
