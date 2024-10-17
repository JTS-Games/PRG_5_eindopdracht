<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enchanter;
use Illuminate\Http\Request;

class EnchanterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enchanters = Enchanter::all();
        return view('enchanter.index', compact('enchanters'));
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
    public function store(Request $request)
    {
        $enchanter = new Enchanter();
        $enchanter->name = 'Sona';
        $enchanter->subclass_id = '10';
        $enchanter->description = 'Very cool';
        $enchanter->user_id = '42';
        $enchanter->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enchanter = Enchanter::find($id);
        return view('enchanter.show', compact('enchanter'));
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
