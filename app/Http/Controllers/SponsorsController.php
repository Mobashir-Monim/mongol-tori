<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;

class SponsorsController extends Controller
{
    public function show ()
    {
        $sponsors = Sponsor::all();

        return view('sponsors.show', compact('sponsors'));
    }

    public function create ()
    {
        return view('sponsors.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'logo' => 'required',
        ]);

        $sponsor = new Sponsor;
        $sponsor->name = $request->name;
        $sponsor->logo = $this->uploadImage($request->logo, 'sponsors');
        $sponsor->save();

        return redirect ('/sponsors');
    }

    public function edit (Request $request, $id)
    {
        $sponsor = Sponsor::find($id);

        return view('sponsors.edit', compact('sponsor'));
    }

    public function update (Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'logo' => 'nullable',
        ]);

        $sponsor = Sponsor::find($request->id);
        $sponsor->name = $request->name;

        if ($request->hasFile('logo')) {
            $sponsor->logo = $this->uploadImage($request->logo, 'sponsors');
        }

        $sponsor->save();

        return redirect('/sponsors');
    }

    public function delete (Request $request, $id)
    {
        $sponsor = Sponsor::find($id);
        $sponsor->delete();

        return redirect('/sponsors');
    }
}
