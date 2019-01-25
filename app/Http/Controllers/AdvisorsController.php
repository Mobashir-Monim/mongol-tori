<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advisor;

class AdvisorsController extends Controller
{
    public function show ()
    {
        $advisors = Advisor::all();

        return view('advisors.show', compact('advisors'));
    }

    public function create ()
    {
        return view('advisors.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'photo' => 'required',
            'department' => 'required',
            'role' => 'required'
        ]);

        $advisor = new Advisor;
        $advisor->name = $request->name;
        $advisor->department = $request->department;
        $advisor->role = $request->role;
        $advisor->photo = $this->uploadImage($request->photo, 'advisors');
        $advisor->save();

        return redirect ('/advisors');
    }

    public function edit (Request $request, $id)
    {
        $advisor = Advisor::find($id);

        return view('advisors.edit', compact('advisor'));
    }

    public function update (Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'photo' => 'nullable',
            'department' => 'required',
            'role' => 'required'
        ]);

        $advisor = Advisor::find($request->id);
        $advisor->name = $request->name;
        $advisor->department = $request->department;
        $advisor->role = $request->role;

        if ($request->hasFile('photo')) {
            $advisor->photo = $this->uploadImage($request->photo, 'advisors');
        }

        $advisor->save();

        return redirect('/advisors');
    }

    public function delete (Request $request, $id)
    {
        $advisor = Advisor::find($id);
        $advisor->delete();

        return redirect('/advisors');
    }
}
