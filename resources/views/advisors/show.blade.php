@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row mb-5">
                    <div class="col-md-10">
                        <h2>All Advisors</h2>
                    </div>
                    <div class="col-md-2">
                        <a href="/advisors/create" class="btn btn-primary w-100">Add Advisor</a>
                    </div>
                </div>
                @foreach ($advisors as $advisor)
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <img src="{{$advisor->photo}}" class="img-fluid">
                        </div>
                        <div class="col-md-3">{{$advisor->name}}</div>
                        <div class="col-md-2">{{$advisor->role}}</div>
                        <div class="col-md-2">{{$advisor->department}}</div>
                        <div class="col-md-2">
                            <a href="/advisors/edit/{{$advisor->id}}" class="btn btn-warning w-100 mb-3">Edit</a>
                            <a href="/advisors/delete/{{$advisor->id}}" class="btn btn-danger w-100">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection