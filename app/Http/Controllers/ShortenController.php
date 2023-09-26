<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AshAllenDesign\ShortURL\Facades\ShortURL;
use AshAllenDesign\ShortURL\Models\ShortURL;

class ShortenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shortURL = ShortURL::latest()->take(3)->get();
        return view('home', compact('shortURL'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->url);
        $url = $request->url;
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $shortURLObject = $builder->destinationUrl($url)->make();
        $shortURL = $shortURLObject->default_short_url;
        // dd($shortURL);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
