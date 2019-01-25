@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Create a new Team</h1>
        <br>
        <form action="/teams/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$team->id}}">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Team Name" value="{{ old('name') == null ? $team->name : old('name') }}" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <select name="leader" class="form-control">
                                @if (old('leader') == null)
                                    <option value="{{$team->leader_id}}">{{$team->leader->name.' - '.$team->leader->department}}</option>
                                @else
                                    <option value="{{old('leader')}}">{{App\TeamMember::find(old('leader'))->name.' - '.App\TeamMember::find(old('leader'))->department}}</option>
                                @endif
                                @foreach (App\TeamMember::all() as $member)
                                    <option value="{{$member->id}}">{{$member->name.' - '.$member->department}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="short_description" class="form-control" cols="30" rows="5">{{ old('short_description') == null ? $team->short_description : old('short_description') }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="description" class="form-control" cols="30" rows="5">{{ old('description') == null ? $team->description : old('description') }}</textarea>
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