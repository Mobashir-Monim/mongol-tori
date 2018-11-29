<div class="col-md-6">
    <div class="row">
        <div class="col-md-5">
            <img src="{{$member->photo}}" class="img-fluid" alt="image">
        </div>
        <div class="col-md-7">
            <h3>{{$member->name}}</h3>
            <strong>{{$member->department}}</strong> <br>
            {{$member->email}} <br>
            {{$member->phone}} <br>
            <a href="/team-members/edit/{{$member->id}}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>