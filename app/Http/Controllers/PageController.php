<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Home',
            'heading' => 'Welcome to my Laravel POS Application',
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'title' => 'About',
            'heading' => 'About This Application',
        ]);
    }
}