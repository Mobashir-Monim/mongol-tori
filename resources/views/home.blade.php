@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul>
                        <li><a href="/team-members">Show Team Members</a></li>
                        <li><a href="/teams">Show Teams</a></li>
                        <li><a href="/advisors">Show Advisors</a></li>
                        <li><a href="/sponsors">Show Sponsors</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
