@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Editing {{$content->name}}</h1>
                    </div>
                </div>
                <form action="/content/edit" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$content->id}}">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="content" class="form-control" cols="30" rows="10">{{$content->content}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <button class="btn btn-success w-100" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection