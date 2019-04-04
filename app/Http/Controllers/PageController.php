<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
