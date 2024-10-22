<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subclass;
use Illuminate\Http\Request;

class SubclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subclasses = Subclass::all();
        return view('subclass.index', compact('subclasses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subclass.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subclass = new Subclass();
        $subclass->name = $request->input('name');
        $subclass->description = $request->input('description');
        $subclass->tips = $request->input('tips');
        $subclass->save();
        return redirect()->route('subclasses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subclass = Subclass::find($id);
        return view('subclass.show', compact('subclass'));
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
