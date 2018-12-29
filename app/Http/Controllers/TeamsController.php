<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function adminView ()
    {
        $teams = Team::all();

        return view ('teams.admin-view', compact('teams'));
    }

    public function create ()
    {
        return view ('teams.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'leader' => 'required',
            'description' => 'required',
        ]);

        $team = new Team;
        $team->name = $request->name;
        $team->description = $request->description;
        $team->leader_id = $request->leader;
        $team->save();

        return redirect ('/teams')->with('success', 'Team successfully created');
    }

    public function edit (Request $request, $id)
    {
        $team = Team::find($id);

        return view ('teams.edit', compact('team'));
    }

    public function update (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'leader' => 'required',
            'description' => 'required',
        ]);

        $team = Team::find($request->id);
        $team->name = $request->name;
        $team->description = $request->description;
        $team->leader_id = $request->leader;
        $team->save();

        return redirect ('/teams')->with('success', 'Team successfully edited');
    }

    public function delete (Request $request, $id)
    {
        $team = Team::find($id);
        $members = $team->members;

        foreach ($members as $member) {
            $member->team_id = 0;
            $member->save();
        }

        $name = $team->name;
        $team->delete();
        $message = $name.' has been deleted';

        return redirect('/teams')->with('success', $message);
    }
}
