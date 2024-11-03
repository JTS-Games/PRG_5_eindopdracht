<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enchanter;
use App\Models\Subclass;
use Illuminate\Http\Request;

class EnchanterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subclasses = Subclass::all();
        $subclassId = $request->input('subclass_id');
        $enchanters = Enchanter::where('status', 1)

            ->when($subclassId, function($query) use ($subclassId) {
                return $query->where('subclass_id', $subclassId);
            })->get();

        return view('enchanter.index', compact('enchanters', 'subclasses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subclasses = Subclass::all();
        return view('enchanter.create', compact('subclasses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'subclass_id' => 'required|integer|exists:subclasses,id',
            'description' => 'nullable|string',
        ]);

        $enchanter = new Enchanter();
        $enchanter->name = $request->input('name');
        $enchanter->subclass_id = $request->input('subclass_id');
        $enchanter->description = $request->input('description');
        $enchanter->user_id = auth()->user()->id;
        $enchanter->save();

        $user = auth()->user();

        $enchanterCount = Enchanter::where('user_id', $user->id)->count();
        if ($user->role !== 1 && $enchanterCount == 5) {
            $user->role = 2;
            $user->save();
        }

        return redirect()->route('enchanters.index');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enchanter = Enchanter::find($id);
        $enchanter->delete();
        return redirect()->route('enchanters.index');
    }

    public function toggleStatus(Enchanter $enchanter)
    {
        $enchanter->status = !$enchanter->status;
        $enchanter->save();

        return redirect()->route('enchanters.index');
    }
}
