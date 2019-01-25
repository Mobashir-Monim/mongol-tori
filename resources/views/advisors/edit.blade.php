@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form action="/advisors/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $advisor->id }}">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Advisor Name" value="{{ $advisor->name }}" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="role" placeholder="Advisor Role" value="{{ $advisor->role }}" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="department" placeholder="Advisor Department" value="{{ $advisor->department }}" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="photo" class="form-control">
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