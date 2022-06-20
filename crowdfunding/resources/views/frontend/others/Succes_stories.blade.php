<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{url('frontend/css/others/footer.css')}}">
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
                    <a class="text-uppercase" href="#">for charities</a>
                </div>
                <div class="nav-link-wrapper">
                    <a class="text-uppercase" href="#">for individuals</a>
                </div>
                <div class="nav-link-wrapper">
                    <a class="text-uppercase" href="{{ route('login') }}">login</a>
                </div>
                <div class="nav-link-wrapper">
                    <a class="text-uppercase" href="{{ route('register') }}">register</a>
                </div>
            </div>
        </div>
        <hr class="line">
        <!-- intro 1 section -->
        <div class="sec1">
            <!--  -->
        </div>
</div>

	<div style="justify-content: space-around; padding-right: 100px; padding-left: 100px; align-items: center;  ">
<div style="justify-content: space-around; padding-right: 100px; padding-left: 100px; align-items: center;  ">
<div style="text-align: center; justify-content: space-around;">
	<h1 style="padding-top: 50px; color: rgb(37, 180, 37);">Success Stories</h1>
	<p style="color: #999999; padding-bottom: 50px;">GoFundMe is a platform built on the generosity of individuals around the world. Together, the GoFundMe community has changed the lives of millions of people. With over $9 billion raised from more than 120 million donations, we’re just getting started. Below are a few GoFundMe success stories to help inspire you to start a fundraiser of your own.</p>
	


</div>
<div style=" display: inline-grid;
  grid-gap: 75px;
  grid-template-columns: auto auto auto auto;
  justify-content: space-around;
  padding-bottom: 80px;  ">

	<!-- <a href="https://npengage.com/nonprofit-fundraising/10-simple-fundraising-tips-guaranteed-improve-effectiveness/">
	<img style="" src="success1.jpg">
	</a>
	<h4>Want a Successful Fundraiser? <br> Avoid these Common Mistakes</h4> -->

				<span>
					<a href="https://npengage.com/nonprofit-fundraising/10-simple-fundraising-tips-guaranteed-improve-effectiveness/">
				<img style="width: 250px  ; border-radius: 10px; height: 250px;" src="{{url('frontend/pictures/success1.jpg')}}">
				</a>
				<a style="text-decoration: none; color:black; font-weight: bold;" href="https://npengage.com/nonprofit-fundraising/10-simple-fundraising-tips-guaranteed-improve-effectiveness/">Want a Successful Fundraiser?<br>Avoid These Common Mistakes</a>
				</span>
				<span>
					<a href="#">
					<img style="width: 250px ; border-radius: 10px; height: 250px;" src="{{url('frontend/pictures/success2.jpg')}}">
					</a>
					<a style="text-decoration: none;  color:black; font-weight: bold;" href="https://www.gofundme.com/c/fundraising-tips">Top Fundraising Tips</a>
				</span>
				<span>
					<a href="#">
					<img style="width: 250px ; border-radius: 10px; height: 250px;" src="{{url('frontend/pictures/success3.jpg')}}">
					</a>
					<a style="text-decoration: none;  color:black; font-weight: bold;" href="https://www.gofundme.com/c/fundraising-ideas">Easy Fundraising Ideas</a>
				</span>

	<!-- <a href="https://www.gofundme.com/c/fundraising-tips">
		<img style="width: auto;" src="success2.jpg">
	</a> -->
</div>
<div>
	
</div>




</div>
</div>

<hr class="line line1">
<div class="fund-options">
        <div class="section6">
            <div>
                <a href="index.html"><img class="rounded" src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}" width="45%"
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