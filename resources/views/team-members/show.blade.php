@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10"><h1>Team members</h1></div>
                    <div class="col-md-2"><a href="/team-members/add" class="btn btn-success w-100">Add Team Member</a></div>
                </div>
                <div class="row">
                    @foreach($members as $member)
                        @if ($loop->index != 0 && $loop->index % 2 == 0)
                            </div>
                            <br>
                            <div class="row">
                        @endif
                        @include('templates.member')
                    @endforeach
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection