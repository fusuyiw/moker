<?php

namespace App\Http\Controllers;

use App\Models\Masjidmusholla;
use App\Http\Requests\StoreMasjidmushollaRequest;
use App\Http\Requests\UpdateMasjidmushollaRequest;

class MasjidmushollaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function peta()
    {
        return view('peta');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMasjidmushollaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Masjidmusholla $masjidmusholla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masjidmusholla $masjidmusholla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMasjidmushollaRequest $request, Masjidmusholla $masjidmusholla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masjidmusholla $masjidmusholla)
    {
        //
    }
}
