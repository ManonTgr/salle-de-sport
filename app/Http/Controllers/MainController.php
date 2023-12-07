<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function AcceuilController()
{
    return view('acceuil');
}

public function CoursController()
{
    return view('cours');
}

public function Tarifscontroller()
{
    return view('tarif');
}

public function ContactController()
{
    return view('contact');
}

public function MentionsLegalesController()
{
    return view('mentions-legales');
}
}
