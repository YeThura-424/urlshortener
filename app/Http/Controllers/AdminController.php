<?php

namespace App\Http\Controllers;

use AshAllenDesign\ShortURL\Models\ShortURL;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;

class AdminController extends Controller
{
    public function index()
    {
        $shortURL = ShortURL::latest()->get();
        $shortURLVisit = ShortURLVisit::latest()->get();
        return view('dashboard', compact('shortURL', 'shortURLVisit'));
    }
}
