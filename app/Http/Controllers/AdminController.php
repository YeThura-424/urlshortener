<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $shortURL = \AshAllenDesign\ShortURL\Models\ShortURL::latest()->get();
        $shortURLVisit = \AshAllenDesign\ShortURL\Models\ShortURLVisit::latest()->get();
        // dd($shortURLVisit);
        return view('dashboard',compact('shortURL','shortURLVisit'));
        // return view('home');
    }
}
