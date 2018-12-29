@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="page-title">Team</h1>
                    </div>
                    <div class="col-md-2">
                        <a href="/teams/create" class="btn btn-success w-100">Create a new team</a>
                    </div>
                </div>
                @foreach ($teams as $team)
                    <div class="row">
                        <div class="col-md-2">
                            {{$team->name}}
                        </div>
                        <div class="col-md-6">
                            {{$team->description}}
                        </div>
                        <div class="col-md-2">
                            {{$team->leader->name}}
                        </div>
                        <div class="col-md-2">
                            <a href="/teams/update/{{$team->id}}" class="btn btn-warning w-100 mb-3">Edit</a>
                            <a href="/teams/delete/{{$team->id}}" class="btn btn-danger w-100">Delete</a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection