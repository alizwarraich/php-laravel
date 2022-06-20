<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/pictures/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/pictures/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/pictures/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('frontend/pictures/site.webmanifest')}}">
    <link rel="stylesheet" href="{{url('frontend/css/fundraiserRead.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Fundraisers</title>
</head>

<body>
<div class="container">
        <div class="nav-wrapper">
            <!-- Left side navs -->
            <div class="left-side">
                <a class="back" href="{{url('dashboard')}}">Dashboard
            </a>
            </div>
            <!-- Center navs i.e. logo  -->
            <div class="center">
                <div class="logo">
                    <a href="{{url('/')}}"><img style="margin-top:20px;" src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}"
                            width="100" height="90"></a>
                </div>
            </div>
            <!-- Right side navs -->
            <div class="right-side">
                <div class="nav-link-wrapper">
                    <div class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('user1') }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="line">
        <!-- intro 1 section -->
        <div class="sec1">
            <!--  -->
        </div>
    </div>
    <div class="container cc1">
        <h1 style="text-align:center; margin-bottom:50px; margin-top:-20px; text-decoration:underline; color:#008084">Fundraisers</h1>
        <div class="compaign ml1">
            @foreach ($fundraisers as $charity)
            <div class="subcompaign">
                    <!-- <a class="compaignlinks" href="{{url('/projects')}}"> -->
                    <a class="compaignlinks" href="#">
                        <img src="{{url('frontend/pictures/african_kids.jpg')}}" width="273px" height="250px">
                        <!-- <img src="{{$charity->image}}" width="273px" height="250px"> -->
                        <!-- <img src="{{$charity->image}}" width="273px" height="250px"> -->
                        <div class="sec1">
                            <p class="funding text-uppercase">Funding</p>
                            <p class="compaignname">{{$charity->name}}</p>
                            <p class="description">{{$charity->description}}</p>
                            
                            <p class="category text-uppercase">{{$charity->category}}</p>
                            <p class="raised">${{$charity->fundraised}}
                                <span class="usd">USD raised &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span>
                                <span class="perc">{{$charity->progress}}%</span>
                            </p>
                            <progress class="progres" value="{{$charity->progress}}" max="100"> {{$charity->progress}}% </progress>
                            
                            <i class="bi bi-clock icon"></i>
                            <span class="usd">{{$charity->timeleft}} days left</span>
                            <a class="btn" style="border: 1px solid;" href="{{URL::to('fundraiser/edit', $charity->id)}}" title="Edit -> {{$charity->id}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn" style="border: 1px solid;" href="{{URL::to('fundraiser/delete', $charity->id)}}"
                                onclick="return confirm ('Are you sure to delete the fundraiser {{$charity->name}} having ID {{$charity->id}}?')" title="Delete -> {{$charity->id}}">
                            <i class="fa fa-trash"></i></a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>  
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>
