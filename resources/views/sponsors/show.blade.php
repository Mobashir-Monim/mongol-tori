@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h3>All Sponsors</h3>
            </div>
            <div class="col-md-2">
                <a href="/sponsors/create" class="btn btn-success w-100">Add Sponsor</a>
            </div>
        </div>

        @foreach ($sponsors as $sponsor)
            <div class="row mt-3">
                <div class="col-md-3">
                    <img src="{{ $sponsor->logo }}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    {{ $sponsor->name }}
                </div>
                <div class="col-md-3">
                    <a href="/sponsors/edit/{{ $sponsor->id }}" class="btn btn-warning w-100 mb-3">Edit</a>
                    <a href="/sponsors/delete/{{ $sponsor->id }}" class="btn btn-danger w-100 mb-3">Delete</a>
                </div>
            </div>    
        @endforeach
    </div>
@endsection