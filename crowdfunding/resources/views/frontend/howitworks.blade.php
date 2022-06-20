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
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/pictures/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/pictures/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/pictures/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('frontend/pictures/site.webmanifest')}}">
    <link rel="stylesheet" href="{{url('frontend/css/s_how it works.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>How It Works</title>
</head>

<body>
    <div class="container">
        <div class="nav-wrapper">
            <!-- Left side navs -->
            <div class="left-side">
                <div class="nav-link-wrapper">
                    <a class="text-uppercase active" href="{{url('/')}}">home</a>
                </div>
                <div class="nav-link-wrapper">
                    <a class="text-uppercase active" href="{{url('/aboutus')}}">about us</a>
                </div>
                <div class="nav-link-wrapper">
                    <a class="text-uppercase" href="{{url('/whatwedo')}}">what we do</a>
                </div>
                <div class="nav-link-wrapper">
                    <a class="text-uppercase" href="{{url('/howitworks')}}">how it works</a>
                </div>
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
                    <a class="text-uppercase" href="{{url('/whatwedo')}}">for charities</a>
                </div>
                <div class="nav-link-wrapper">
                    <a class="text-uppercase" href="{{url('/projects')}}">for individuals</a>
                </div>
                @guest
                    <div class="nav-link-wrapper">
                        <a class="text-uppercase" href="{{ route('login') }}">login</a>
                    </div>
                    <div class="nav-link-wrapper">
                        <a class="text-uppercase" href="{{ route('register') }}">register</a>
                    </div>
                @else
                <div class="nav-link-wrapper">
                    <div class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
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
                @endguest
            </div>
        </div>
        <hr class="line">

        <!-- <div class="section1 bg"> -->
        <div class="section1">
            <div class="heading1">
                <h1 class="c1 text-center">How FundOurCause Works</h1>
                <h5 class="c2 fw-light text-center font-monospace">FundOurCause is the best place to fundraise, whether
                    you are an individual, group, or organization.</h5>
                <br>
            </div>
        </div>

        <!-- <div class="section2 bg"> -->
        <div class="text-center">
            <img class="rounded" src="{{url('frontend/pictures/airfocus-DvQIwyafV7A-unsplash.jpg')}}" width="80%" height="75%">
        </div>

        <!-- <div class="section3 bg"> -->
        <div class="start-fund">
            <div class="section3">
                <!-- Left side navs -->
                <!-- <div class="left-side"> -->
                <div>
                    <h4>1. Start your fundraiser</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Set your fundraiser goal</li>
                        <li class="list-group-item">Tell your story</li>
                        <li class="list-group-item">Add a picture or video</li>
                    </ul>
                </div>
                <!-- Center navs i.e. logo  -->
                <!-- <div class="center"> -->
                <div>
                    <h4>2. Share with friends</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Set emails</li>
                        <li class="list-group-item">Send text messages</li>
                        <li class="list-group-item">Share on social media</li>
                    </ul>
                </div>
                <!-- Right side navs -->
                <!-- <div class="right-side"> -->
                <div>
                    <h4>3. Manage donations</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Accept donations</li>
                        <li class="list-group-item">Thanks donors</li>
                        <li class="list-group-item">Withdraw funds</li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <!-- <a href="{{route('login')}}"><button class="btn btn-outline-success">Start a FundOurCause</button></a> -->
                @guest
                    <a href="{{ route('login') }}"><button class="btn btn-outline-success">Start a
                        FundOurCause</button></a>
                @else
                    <a href="{{ route('fundraiser') }}"><button class="btn btn-outline-success">Start a
                        FundOurCause</button></a>
                @endguest
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section4">
            <div class="d-flex aligns-items-center justify-content-center">
                <p id="p41">This website rocks! I raised close to $10,000 in less than 48 hours for my nephew’s medical
                    needs, and your customer service was so prompt and helpful.</p>
            </div>
            <div class="d-flex aligns-items-center justify-content-center">
                <img class="rounded" src="{{url('frontend/pictures/man_sample.jpg')}}" width="5%">
            </div>
            <div class="d-flex aligns-items-center justify-content-center">
                <p class="fw-bold" id="p42">Lee David</p>
            </div>
            <div class="d-flex aligns-items-center justify-content-center">
                <p id="p43">Raised $12,000 on FundOurCause</p>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="section5">
            <div class="d-flex aligns-items-center justify-content-center">
                <h1 class="fw-bold" id="p51">Fast and Safe</h1>
            </div>
            <div class="d-flex aligns-items-center justify-content-center">
                <p id="p52">Millions trust FundOurCause as the #1 online fundraising expert. That’s why more people
                    start fundraisers on <a href="{{url('/')}}">FundOurCause</a> than any other platform.</p>
            </div>
            <div class="d-flex aligns-items-center justify-content-center">
                <a href="{{url('aboutus')}}">
                    <button" class="btn btn-outline-success">Learn More</button>
                </a>
            </div>
        </div>

<!-- footer -->
<hr class="line1">
</div>
<div class="fund-options">
        <div class="section6">
            <div>
                <a href="{{url('/')}}"><img class="rounded" src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}" width="45%"
                        height="45%"></a>
            </div>

            <div>
                <h5 class="categories">Fundraise for</h5>
                <ul class="list-style">
                    <a href="#">
                        <li>Medical</li>
                    </a>
                    <a href="#">
                        <li>Emergency</li>
                    </a>
                    <a href="#">
                        <li>Memorial</li>
                    </a>
                    <a href="#">
                        <li>Education</li>
                    </a>
                    <a href="#">
                        <li>Nonprofit</li>
                    </a>
                    <a href="#">
                        <li>Coronavirus fundraising</li>
                    </a>
                </ul>
            </div>

            <div>
                <h5 class="categories">Learn more</h5>
                <ul class="list-style">
                    <a href="#">
                        <li>How FundOurCause works</li>
                    </a>
                    <a href="#">
                        <li>Why FundOurCause</li>
                    </a>
                    <a href="#">
                        <li>Common questions</li>
                    </a>
                    <a href="#">
                        <li>Success stories</li>
                    </a>
                    <a href="#">
                        <li>Supported countries</li>
                    </a>
                    <a href="#">
                        <li>Charity fundraising</li>
                    </a>
                    <a href="#">
                        <li>Pricing</li>
                    </a>
                </ul>
            </div>

            <div>
                <h5 class="categories">Resources</h5>
                <ul class="list-style">
                    <a href="#">
                        <li>Help center</li>
                    </a>
                    <a href="#">
                        <li>Blog</li>
                    </a>
                    <a href="#">
                        <li>Press center</li>
                    </a>
                    <a href="#">
                        <li>Careers</li>
                    </a>
                    <a href="#">
                        <li>About</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div style="background-color: #F8F8F8;">
        <hr class="line" style="background-color: black;">
    </div>
    <div class="footer">
        <!-- Left side footer elements -->
        <div class="left-footer">
            <div>
                © 2010-2022 FundOurCause
            </div>
            <div class="nav-link-wrapper">
                <a href="#">Terms</a>
            </div>
            <div class="nav-link-wrapper">
                <a href="#">Privacy</a>
            </div>
            <div class="nav-link-wrapper">
                <a href="#">Legal</a>
            </div>
        </div>

        <!-- Right side footer elements -->
        <div class="right-footer">
            <div>
                <a href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </div>
            <div>
                <a href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </div>
            <div>
                <a href="#">
                    <ion-icon name="mail-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
    <!-- </div> -->



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
        