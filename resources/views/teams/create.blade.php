@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Create a new Team</h1>
        <br>
        <form action="/teams/create" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Team Name" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <select name="leader" class="form-control">
                                <option value="">Please select a team leader</option>
                                @foreach (App\TeamMember::all() as $member)
                                    <option value="{{$member->id}}">{{$member->name.' - '.$member->department}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="description" class="form-control" cols="30" rows="5">Team description</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>
@endsection