<?php

namespace App\Http\Controllers;

use App\Models\Standing;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    // Display a list of standings
    public function index()
    {
        $standings = Standing::all();  // Fetch all standings from the database
        return view('standings.index', compact('standings'));
    }

    // Show the form to create a new standing
    public function create()
    {
        return view('standings.create');
    }

    // Store a new standing
    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'points' => 'required|integer',
        ]);

        Standing::create([
            'team_name' => $request->team_name,
            'points' => $request->points,
        ]);

        return redirect()->route('standings.index')->with('success', 'Standing created successfully!');
    }

    // Show the form to edit an existing standing
    public function edit(Standing $standing)
    {
        return view('standings.edit', compact('standing'));
    }

    // Update an existing standing
    public function update(Request $request, Standing $standing)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'points' => 'required|integer',
        ]);

        $standing->update([
            'team_name' => $request->team_name,
            'points' => $request->points,
        ]);

        return redirect()->route('standings.index')->with('success', 'Standing updated successfully!');
    }
    // Delete a standing
    public function destroy(Standing $standing)
    {
        $standing->delete();
        return redirect()->route('standings.index')->with('success', 'Standing deleted successfully!');
    }
}
