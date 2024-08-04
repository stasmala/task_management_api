<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $team = Team::create($validated);
        Auth::user()->teams()->attach($team);

        return response()->json($team, 201);
    }

    public function index()
    {
        $teams = Auth::user()->teams;
        return response()->json($teams);
    }

    public function addUser(Request $request, Team $team)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $team->users()->attach($validated['user_id']);
        return response()->json($team);
    }

    public function removeUser(Team $team, $userId)
    {
        $team->users()->detach($userId);
        return response()->json(null, 204);
    }
}
