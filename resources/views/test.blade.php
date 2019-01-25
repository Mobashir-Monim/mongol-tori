@extends('layouts.app')

@section('content')
<?php $team = App\Team::find(2) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" class="team-short">
                <div class="row">
                    <div class="col-md-8 team-info-bg p-5">
                        <h3 class="mb-3">{{ $team->name }}</h3>
                        <p class="mb-3">{{ 'Team Members: '.count($team->members) }}</p>
                        <p>{{$team->description}}</p>
                    </div>
                    <div class="col-md-4 lead-info-container pl-0">
                        <img src="{{$team->leader->photo}}" class="img-fluid w-100 leader-image">
                        <div class="leader-info pt-4">
                            <strong class="leader-name ">{{$team->leader->name}}</strong>
                            <p>{{$team->name.' lead'}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection