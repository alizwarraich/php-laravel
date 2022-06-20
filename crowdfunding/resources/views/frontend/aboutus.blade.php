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
    <link rel="stylesheet" href="{{url('frontend/css/s_about us.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>About Us</title>
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
                <p class="c1 text-center">Connecting Projects that matter</p>
                <p class="text-center" style="color: black;">with people who care.</p>
                <h5 class="text-center">Crowdfunding is a different way to raise money for good ideas.</h5>
                <br>
            </div>
        </div>

        <!-- <div class="section2 bg"> -->
        <div class="d-flex justify-content-evenly">
            <div class="c21 col-sm-6">
                <h2>Crowdfunding in 2.5 minutes</h2>
                <p style="opacity: 0.8;">Got some time to spare? Watch our 'how it works' animation. You'll get a brief
                    overview of how crowdfunding works and what extra support, services and money that only Crowdfunder
                    can give you.</p>
            </div>
            <div class="c22 col-sm-6">
                <iframe width="500" height="250" src="https://www.youtube.com/embed/voF1plqqZJA"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <!-- <div class="section3 bg"> -->
        <div class="section3">
            <div class="d-flex justify-content-evenly">
                <div class="c31 col-sm-6">
                    <p style="font-size: 45px; font-weight: bold; color: rgb(23, 166, 222)">What is Crowdfunding?</p>
                    <p style="opacity: 0.8;">Find out more about crowdfunding and how it works. Whether you are looking
                        to raise money for your idea, for charity or you want to support a project.</p>
                    <a href="how it works.html" style="color: rgb(61, 179, 225);">Find out about how FundOurCause
                        works:</a>
                </div>
                <div class="c31 col-sm-6">
                    <p style="font-size: 45px; font-weight: bold; color: rgb(23, 166, 222)">Why choose Crowdfunder?</p>
                    <p style="opacity: 0.8;">Find out more about our team and our story. We've helped over 175,000
                        projects raise more than £100 million for great causes.</p>
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section4">
            <div class="border d-flex aligns-items-center justify-content-center">
                <p id="p44"><strong>Ready to raise fund for your idea?</strong></p>
            </div>
            <div>
                <div class="border d-flex aligns-items-center justify-content-center">
                    <p id="p41">Over <strong>£250 million</strong> has been raised from our crowd to support the
                        projects they love! Plus tens of millions more unlocked by our partners.</p>
                </div>
                <div class="d-flex aligns-items-center justify-content-center">
                    <a href="{{route('login')}}"><button type="button" class="btn btn-outline-success btn1">Start
                            CrowdFunding</button></a>
                    <a href="{{url('frontend.projects')}}"><button type="button" class="btn btn-outline-success btn1">Explore
                            Projects</button></a>
                </div>
            </div>
        </div>
    </div>

<!-- footer -->
<hr class="line line1">
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