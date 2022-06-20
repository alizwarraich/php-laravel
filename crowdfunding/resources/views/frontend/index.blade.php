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
    <link rel="stylesheet" href="{{url('frontend/css/styles.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>FundOurCause</title>
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
        <!-- intro 1 section -->
        <div class="section2">
            <div class="txt">
                <div>
                    <h2 class="head2">A platform for <br> you</h2>
                </div>
                <div>
                    @guest
                        <a href="{{ route('login') }}"><button type="button" class="b1 btn btn-outline-success">Start a
                            FundOurCause</button></a>
                    @else
                        <a href="{{ route('fundraiser') }}"><button type="button" class="b1 btn btn-outline-success">Start a
                            FundOurCause</button></a>
                    @endguest
                </div>
            </div>

            <div class="img">
                <img src="{{url('frontend/pictures/larm-rmah-AEaTUnvneik-unsplash.jpg')}}" width="90%" height="100%">
            </div>
        </div>
        <!-- <div class="section1 bg"> -->
        <div class="section1">
            <div class="heading1">
                <h1 class="c1 fw-light text-center">Little help, for big cause!</h1>
                <h5 class="c2 fw-light text-center font-monospace">Crowdfunding Platform</h5>
                <br>
                <h5 class="c3 fw-light text-center text-uppercase">Till date</h5>
            </div>
        </div>
        <div class="text-center">
            <ul class="gr1">
                <li class="border">
                    <h3 class="green">29</h3>
                    <h4 class="type-14 fw-light dark-grey-500 text-lowercase">projects funded</h4>
                </li>
                <li class="p-2 flex-fill border">
                    <h3 class="green">$1,165,297</h3>
                    <h4 class="type-14 fw-light dark-grey-500 text-lowercase">towards creative work</h4>
                </li>
                <li class="p-2 flex-fill border">
                    <h3 class="green">10,846</h3>
                    <h4 class="type-14 fw-light dark-grey-500 text-lowercase">backings</h4>
                </li>
            </ul>
        </div>

        <div class="compaigns mt-5">
            <div class="col-md-12 btn-block subsection mb-5 head-home">
                <h1 class="btn-block fw-light class-montserrat text-center margin-bottom-zero none-overflow">
                    Campaigns
                </h1>
                <h5 class="btn-block fw-light class-montserrat text-center subtitle-color">Recent Campaigns</h5>
            </div>
        </div>

        <div class="compaign ml1">
        
            <!-- </a> -->
            <div class="subcompaign">
                <a class="compaignlinks" href="{{url('/projects')}}">
                    <img src="{{url('frontend/pictures/covid.jpg')}}" width="273px" height="250px">
                    <div class="sec1">
                        <p class="funding text-uppercase">Funding</p>
                        <p class="compaignname">Donate to COVID-19 patients to help remove the virus</p>
                        <p class="description">COVID-19 pandemic has affected many business and the
                            disease has still not died and is affecting a million people worldwide. </p>
                        
                        <p class="category text-uppercase">Medical</p>
                        <p class="raised">$67820
                            <span class="usd">USD raised &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            <span class="perc">85%</span>
                        </p>
                        <progress class="progres" value="85" max="100"> 85% </progress>
                        <i class="bi bi-clock icon"></i>
                        <span class="usd">30 days left</span>
                    </div>
                </a>
            </div>
            <div class="subcompaign">
                <a class="compaignlinks" href="{{url('/projects')}}">
                    <img src="{{url('frontend/pictures/african_kids.jpg')}}" width="273px" height="250px">
                    <div class="sec1">
                        <p class="funding text-uppercase">Funding</p>
                        <p class="compaignname">Donate to COVID-19 patients to help remove the virus</p>
                        <p class="description">COVID-19 pandemic has affected many business and the
                            disease has still not died and is affecting a million people worldwide. </p>
                        
                        <p class="category text-uppercase">Medical</p>
                        <p class="raised">$67820
                            <span class="usd">USD raised &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            <span class="perc">85%</span>
                        </p>
                        <progress class="progres" value="85" max="100"> 85% </progress>
                        <i class="bi bi-clock icon"></i>
                        <span class="usd">30 days left</span>
                    </div>
                </a>
            </div>
            <div class="subcompaign">
                <a class="compaignlinks" href="{{url('/projects')}}">
                    <img src="{{url('frontend/pictures/african_kids2.jpg')}}" width="273px" height="250px">
                    <div class="sec1">
                        <p class="funding text-uppercase">Funding</p>
                        <p class="compaignname">Donate to COVID-19 patients to help remove the virus</p>
                        <p class="description">COVID-19 pandemic has affected many business and the
                            disease has still not died and is affecting a million people worldwide. </p>
                        
                        <p class="category text-uppercase">Medical</p>
                        <p class="raised">$67820
                            <span class="usd">USD raised &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            <span class="perc">85%</span>
                        </p>
                        <progress class="progres" value="85" max="100"> 85% </progress>

                        <i class="bi bi-clock icon"></i>
                        <span class="usd">30 days left</span>
                    </div>
                </a>
            </div>
            <div class="subcompaign">
                <a class="compaignlinks" href="{{url('/projects')}}">
                    <img src="{{url('frontend/pictures/latrach-med-jamil-nQHNERvtPLM-unsplash.jpg')}}" width="273px" height="250px">
                    <div class="sec1">
                        <p class="funding text-uppercase">Funding</p>
                        <p class="compaignname">Donate to COVID-19 patients to help remove the virus</p>
                        <p class="description">COVID-19 pandemic has affected many business and the
                            disease has still not died and is affecting a million people worldwide. </p>
                        
                        <p class="category text-uppercase">Medical</p>
                        <p class="raised">$67820
                            <span class="usd">USD raised &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            <span class="perc">85%</span>
                        </p>
                        <progress class="progres" value="85" max="100"> 85% </progress>
                        
                        <i class="bi bi-clock icon"></i>
                        <span class="usd">30 days left</span>
                    </div>
                </a>
            </div> 
        </div>
        <div class="readytojoin">
            <div class="text">
                <h1>Ready to get started? Join thousands of others today to help us accomplish the cause.</h1>
                @guest
                        <a href="{{ route('login') }}"><button type="button" class="button btn btn-outline-success">Start a
                            FundOurCause</button></a>
                    @else
                        <a href="{{ route('fundraiser') }}"><button type="button" class="button btn btn-outline-success">Start a
                            FundOurCause</button></a>
                    @endguest
                <a href="{{url('/howitworks')}}"><button type="button" class="button button1 btn btn-outline-success">How
                        it works</button></a>
            </div>
            <div class="image">
                <img src="{{url('frontend/pictures/footer-flower-cta.png')}}">
            </div>
        </div>
        <!-- <hr class="line line1"> -->
    </div>
<!-- footer -->
<hr class="line line1">
<div class="fund-options">
        <div class="section6">
            <div>
                <a href="{{url('/')}}">
                    <img class="rounded" src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}" width="40%"
                        height="45%">
                </a>
            </div>

            <div>
                <h5 class="categories">Fundraise for</h5>
                <ul class="list-style">
                    <a href="{{url('/medical')}}">
                        <li>Medical</li>
                    </a>
                    <a href="{{url('/emergency')}}">
                        <li>Emergency</li>
                    </a>
                    <a href="{{url('/memorial')}}">
                        <li>Memorial</li>
                    </a>
                    <a href="{{url('/education')}}">
                        <li>Education</li>
                    </a>
                    <a href="{{url('/whatwedo')}}">
                        <li>Nonprofit</li>
                    </a>
                    <!-- <a href="#">
                        <li>Coronavirus fundraising</li>
                    </a> -->
                </ul>
            </div>

            <div>
                <h5 class="categories">Learn more</h5>
                <ul class="list-style">
                    <a href="{{url('/howitworks')}}">
                        <li>How FundOurCause works</li>
                    </a>
                    <a href="{{url('/whyfoc')}}">
                        <li>Why FundOurCause</li>
                    </a>
                    <a href="{{url('/commonquestions')}}">
                        <li>Common questions</li>
                    </a>
                    <a href="{{url('/successstories')}}">
                        <li>Success stories</li>
                    </a>
                    <a href="{{url('/countriessupported')}}">
                        <li>Supported countries</li>
                    </a>
                    <a href="{{url('/whatwedo')}}">
                        <li>Charity fundraising</li>
                    </a>
                    <!-- <a href="#">
                        <li>Pricing</li>
                    </a> -->
                </ul>
            </div>

            <div>
                <h5 class="categories">Resources</h5>
                <ul class="list-style">
                    <a href="{{url('/helpcenter')}}">
                        <li>Help center</li>
                    </a>
                    <a href="#">
                        <li>Blog</li>
                    </a>
                    <a href="#">
                        <li>Press center</li>
                    </a>
                    <a href="{{url('/careers')}}">
                        <li>Careers</li>
                    </a>
                    <a href="{{url('/aboutus')}}">
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
