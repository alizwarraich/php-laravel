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
    <link rel="stylesheet" href="{{url('frontend/css/whatwedo.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>What We Do</title>
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
        <div class="sec1">
            <!--  -->
        </div>
</div>

<!-- section -->
<div style="justify-content: space-around; padding-right: 200px; padding-left: 200px; align-items: center;  ">
		<div style="display: flex; justify-content: space-around;">
			<h1 style="padding-top: 50px; align-items: flex-start;">The New Charity Fundraising Experience Has Arrived on FundOurCause</h1>
			<img  src="{{url('frontend/pictures/charity1.jpg')}}">
		</div>

		<div style="display: flex; justify-content: space-around;">
			<img style="padding-top: 50px; align-items: flex-start;" src="{{url('frontend/pictures/charity2.gif')}}">
				<h3 style="padding:50px; padding-top:280px">The simplest way for supporters to fundraise on your behalf<br>
				The world’s largest social fundraising platform, optimized for your charity. Our charity pages make it even easier for supporters to fundraise for you.</h3>

		</div>
		<div style="display: flex; justify-content: space-around;">
			
				<h3 style=" display: flex; align-items: flex-start; padding-top:280px ;padding-right: 50px;">The simplest way for supporters to fundraise on your behalf<br>
				The world’s largest social fundraising platform, optimized for your charity. Our charity pages make it even easier for supporters to fundraise for you.</h3>
				<img style="padding-top: 50px; " src="{{url('frontend/pictures/charity3.gif')}}">

		</div>
		<div style="display: flex; justify-content: space-around;">
			<img style="padding-top: 50px; align-items: flex-start;" src="{{url('frontend/pictures/charity4.gif')}}">
				<h3 style="padding:50px; padding-top:280px">Build a community of supporters<br>
				The world’s largest social fundraising platform, optimized for your charity. Our charity pages make it even easier for supporters to fundraise for you.</h3>

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