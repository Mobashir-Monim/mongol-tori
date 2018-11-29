@extends('layouts.app')

@section('content')
    <div class="container-fluid">
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
@endsection