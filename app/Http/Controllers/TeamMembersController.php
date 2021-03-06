<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamMember;

class TeamMembersController extends Controller
{
    public function create ()
    {
        return view('team-members.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|max:15',
            'department' => 'required|max:30',
            'team' => 'required|max:50',
            'photo' => 'required|image|max:3000',
        ]);

        $member = new TeamMember;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->department = $request->department;
        $member->team_id = $request->team;
        $member->photo = $this->uploadImage($request->photo, 'team-members');
        $member->save();
        

        return redirect('/home');
    }

    public function show ()
    {
        $members = TeamMember::all();

        return view('team-members.show', compact('members'));
    }

    public function delete (Request $request, $id)
    {
        $member = TeamMember::find($id);
        $member->delete();

        return redirect('team-members');
    }

    public function edit (Request $request, $id)
    {
        $member = TeamMember::find($id);

        return view('team-members.update', compact('member'));
    }

    public function update (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|max:15',
            'department' => 'required|max:30',
            'team' => 'required|max:50',
            'photo' => 'nullable|image|max:3000',
        ]);

        $member = TeamMember::find($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->department = $request->department;
        $member->team_id = $request->team;
        
        if ($request->photo != null) {
            $member->photo = $this->uploadImage($request->photo, 'team-members');
        }

        $member->save();

        return redirect('/team-members')->with('succes', 'Member information edited');
    }
}
