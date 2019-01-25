<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/frontend/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">

    <link rel="stylesheet" href="/frontend/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="/frontend/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="/frontend/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="/frontend/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="/frontend/css/bootstrap.css.map">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css.map">

    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="/frontend/Assets/04 Logo/MONGOL TORI LOGO FINAL.png"/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
    <title>Mongol Tori</title>
</head>
<body>
    <section class="intro">
        <div class="container-fluid" id="logo-container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="/frontend/Assets/04 Logo/MONGOL TORI LOGO FINAL.png" class="img-fluid" id="">
                </div>
            </div>
        </div>
        <nav class="navbar-nav navbar-expand-lg navbar-light bg-transparent text-center pos-absolute">
            <div class="collapse navbar-collapse text-center w-100" id="navbarNav">
                <ul class="nav-bar">
                    <li class="item-nav active">
                        <a href="#about-us" class="navbar-brand">About</a>
                    </li>
                    <li class="item-nav">
                        <a href="#work" class="navbar-brand">Work</a>
                    </li>
                    <li class="item-nav">
                        <a href="#team" class="navbar-brand">Team</a>
                    </li>
                    <li class="item-nav">
                        <a href="#sponsors" class="navbar-brand">Sponsors</a>
                    </li>
                    <li class="item-nav">
                        <a href="#contact" class="navbar-brand">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <br><br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10"><p id="spp" style="font-size: 3.5vw;"><strong>SUCCESS. PASSION. PERFORMANCE.</strong></p></div>
                <div class="col-md-1"></div>
            </div>
        </div>       
    </section> <!-- intro -->
    <br><br><br>
    <section class="about-us section" id="about-us">
        <div class="container">
            <h1 style="left: 12%; position: relative;"><strong>About Us</strong></h1>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p id="mongoltori">{{App\WebContent::find(1)->content}}</p>
                    
                </div>
                <div class="col-md-5 text-left">
                    <img src="/frontend/img/mars logo.png" class="img-fluid" align="right">
                </div>
            </div>
            @if (auth()->user() != null)
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="/content/edit/1" class="btn btn-primary">Edit About us</a>
                    </div>
                </div>
            @endif
            <br><br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center">
                    <iframe id="video" class="embed-responsive embed-responsive-item" src="{{App\WebContent::find(2)->content}}" width="200" height="400"></iframe>
                    @if (auth()->user() != null)
                        <a href="/content/edit/2" class="btn btn-primary">Edit Landing Page Video</a>
                    @endif
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section> <!-- about-us -->
                
    <section class="our-works" id="work">
        <div class="container-fluid">
            <br><br>
            <div class="row">
                <h1 style="font-size: 3vw; color: #fff; left: 20%; position: relative;"><strong>Our Works</strong></h1>
            </div> <!-- row -->

            <div class="row">
                <div class="col-sm-8">
                <p style="color: #fff; position: relative; left: 30%;">{{App\WebContent::find(3)->content}}</p>
                </div>
            </div>
            @if (auth()->user() != null)
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="/content/edit/3" class="btn btn-primary">Edit Landing Page Our Works</a>
                    </div>
                </div>
            @endif
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-50" src="/frontend/img/interceptor.jpg" class="img-fluid" alt="Interceptor" width="450px" height="400px">
                            <div class="carousel-caption">
                                <h5 align="center">Interceptor<br>(Battlebot) 2016</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50" src="/frontend/img/PathFinder.jpg" class="img-fluid" alt="Pathfinder" width="450px" height="400px">
                            <div class="carousel-caption">
                                <h5 align="center">Pathfinder<br>(Follower) 2015</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50" src="/frontend/img/MT.jpg" alt="Mongol Tori" class="img-fluid" width="450px" height="400px">
                            <div class="carousel-caption">
                                <h5 align="center">Mongol Tori<br>(Boat of Mars) 2017</h5>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>                
        </div>
    </section> <!-- Our Works -->
                    
    <section class="team" style="padding: 50px;" id="team">
        <div class="text-center pt-4">
            <h4 style="padding-bottom: 30px; font-size: 40px;"><strong>Meet Our Team</strong></h4>
        </div>
            
        <div class="container">
            <div class="row text-center">
                <div class="col"></div>
                @foreach (App\Advisor::all() as $advisor)
                    <div class="col-md-3">
                        <img src="{{$advisor->photo}}" class="img-fluid w-100" alt="avatar">
                        <h5 class="text-center">{{$advisor->name}}</h5>
                        <h6 class="text-center">{{$advisor->role}}</h6>
                    </div>
                    <div class="col"></div>

                    @if ($loop->iteration % 3 == 0)
                        </div>
                    </div>  
                        </div>
                        <div class="row text-center">
                            <div class="col"></div>
                    @endif
                @endforeach     
            </div>
            <br><br>
            <div class="row">
                @include('templates.team-script')
                <div class="col-md"></div>
                <div class="col-md-3 text-center" id="show-team">
                    <a href="#team-full" onclick="showTeam()" class="btn btn-warning pt-2 w-100" id="teamButton"><strong>View All Team</strong></a>
                </div>
                <div class="col-md"></div>
            </div>
        </div>

        <div class="container" id="team-full">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Team</h3>
                    <hr>
                </div>
            </div>
            @foreach (App\Team::all() as $team)
                <div class="row mb-5">
                    <div class="col-md-8 team-info-bg p-5">
                        <h3 class="mb-3">{{ $team->name }}</h3>
                        <p class="mb-3">{{ 'Team Members: '.count($team->members) }}</p>
                        <p class="mb-3">{{$team->short_description}}</p>
                        <a href="/teams/{{$team->id}}" onclick="hideTeam()" class="btn btn-warning pt-2 col-md-4 mt-3" id="teamButton"><strong>View Team</strong></a>
                    </div>
                    <div class="col-md-4 lead-info-container pl-0">
                        <img src="{{$team->leader->photo}}" class="img-fluid w-100 leader-image">
                        <div class="leader-info pt-4">
                            <strong class="leader-name ">{{$team->leader->name}}</strong>
                            <p>{{$team->name.' lead'}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <div class="container" id="hide-button">
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md-3" >
                    <a href="#team" onclick="hideTeam()" class="btn btn-warning pt-2 w-100" id="teamButton"><strong>Hide All Team</strong></a>
                </div>
                <div class="col-md"></div>
            </div>
        </div>
    </section> <!-- team -->
    <br><br>
    <section class="sponsor" id="sponsors">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Sponsored By</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <img src="/frontend/img/bracu.png" class="img-fluid" style="height: 130px; width: 150px; position: relative; left: 43%; top: 10px;" align="center">
            </div>

            <div class="row ">  
                <div class="col-md-12 text-center mt-3">
                    @foreach (App\Sponsor::all() as $sponsor)
                        <img src="{{ $sponsor->logo }}" class="sponsors img-fluid" alt="{{ $sponsor->name }}">
                    @endforeach
                </div>
            </div>
        </div>
    </section> <!-- sponsor -->
            
    <section class="contact-us" id="contact">
        <div class="container">
            <h1 style="color: #fff; padding-top: 35px;" align="center">Contact Us</h1>
                    
            <form>
                <div class="form-row">
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-5">
                        <input type="email" class="form-control transparent-input" name="email" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control transparent-input" name="full_name" id="inputEmail4" placeholder="Full Name">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="form-row">
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-10">
                        <textarea class="form-control transparent-input" id="exampleFormControlTextarea1" rows="7" placeholder="Write your message here..."></textarea>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <button type="submit" class="btn btn-primary" id="submitButton" align="center"><strong>Submit</strong></button>
            </form>
            {{-- <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="white-font"><strong>Connect Us With</strong></h4>
                    <i class="circle fa fab fa-facebook-f"></i>
                    <i class="circle fa fab fa-twitter">
                    <i class="circle fa fab fa-linkedin">
                    <i class="circle fa fab fa-google-plus">
                </div>
            </div> --}}
            <br>
        </div>
    </section> <!--contact us-->
            
    <section class="footer">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p>&copy;Copyright BRACU Mongol-Tori 2017-18</p>
                </div>
                <div class="col-md-5 text-right">
                    <p>Made with  &nbsp;<i class="fa fas fa-heart"></i>  &nbsp;by Eveneer</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>