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
                        <a href="/" class="navbar-brand">Home</a>
                    </li>
                    <li class="item-nav active">
                        <a href="/#about-us" class="navbar-brand">About</a>
                    </li>
                    <li class="item-nav">
                        <a href="/#work" class="navbar-brand">Work</a>
                    </li>
                    <li class="item-nav">
                        <a href="/#team" class="navbar-brand">Team</a>
                    </li>
                    <li class="item-nav">
                        <a href="/#sponsors" class="navbar-brand">Sponsors</a>
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

    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h1 class="text-center"><strong>{{$team->name}}</strong></h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    {{$team->description}}
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row mb-5">
                <div class="col-md"></div>
                <div class="col-md-3">
                    <img src="{{$team->leader->photo}}" class="img-fluid w-100" alt="avatar">
                    <h5 class="text-center mt-2">{{$team->leader->name}}</h5>
                    <h6 class="text-center">{{$team->name.' Lead'}}</h6>
                </div>
                <div class="col-md"></div>
            </div>

            <div class="row mb-3">
                <div class="col"></div>
                @foreach ($team->members as $member)
                    <div class="col-md-3">
                        <img src="{{$member->photo}}" class="img-fluid w-100" alt="avatar">
                        <h5 class="text-center mt-2">{{$member->name}}</h5>
                        <h6 class="text-center">Member</h6>
                    </div>
                    <div class="col-md"></div>

                    @if ($loop->iteration % 3 == 0)
                        </div>
                        <div class="row mb-3">
                            <div class="col-md"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
            
    <section class="contact-us mt-5" id="contact">
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