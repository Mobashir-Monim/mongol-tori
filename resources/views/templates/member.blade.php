<div class="col-md-6">
    <div class="row">
        <div class="col-md-5">
            <img src="{{$member->photo}}" class="img-fluid" alt="image">
        </div>
        <div class="col-md-7">
            <h3>{{$member->name}}</h3>
            <strong>{{$member->department}}</strong> <br>
            {{$member->email}} <br>
            {{$member->phone}} <br><br><br>
            <a href="/team-members/edit/{{$member->id}}" class="btn btn-primary w-100">Edit</a> <br><br>
            <a href="/team-members/delete/{{$member->id}}" onclick="event.preventDefault(); document.getElementById('delete-member').submit();" class="btn btn-danger w-100">Remove</a>
            <form action="/team-members/delete/{{$member->id}}" id="delete-member" method="POST">
                @csrf
            </form>
        </div>
    </div>
</div>