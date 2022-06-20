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


<div style="padding-right: 200px; padding-left: 200px;  ">
<div style="text-align: center; justify-content: space-around;">
	<h1 >Why FundOurCause?</h1>
	<p>FundOurCause is the on #1 and most trusted leader in CrowdFunding. We built our <br> reputation by serving and supporting our community every step of the way.</p>
	<h3 style="margin-top: 100px;"> What set FundOurCause apart? </h3>


</div>
<div style="display: flex; text-align: left; justify-content: space-around; ">
	<h4 style="margin-top: -3px; margin-left: ;">Trust </h4><br>
	<p style="justify-content: space-evenly;">   Our Trust & Safety team work is famous around the global and it ensures that the proper security is given against fraud. We also provide the first and only donor protection guarantee: the FundOurCause Giving Guarantee. We have acheieved our eight years of experience and the most money raised, FundOurCause has earned the trust of respected institutions and government officials around the world.</p>
</div>
<div style="background-color: #F7F7F7; padding-bottom: 70px;" >
<div style="padding-top: 80px;" >
	<img style="width:200px; border-radius: 5px;" src="{{url('frontend/pictures/help.jpg')}}">
</div>
<div style="display: flex; justify-content:space-evenly; margin-left: 200px; margin-top: -150px;">	
	<h4 style="margin-top:10px ; margin-left: 20px;">Active</h4>
	<p style="margin-left: 10px; padding-top:30px; padding-right: 100px; color: #999999;">We’ve helped families and communities get back on their feet quickly. In just the first 30 days following Hurricane Harvey, FundOurCause delivered over $27 million directly to people affected by the storm.</p>
</div>

<div style="padding-top: 80px;" >
	<img style="width:200px; border-radius: 5px;" src="{{url('frontend/pictures/reach.jpg')}}">
</div>
<div style="display: flex; justify-content:space-evenly; margin-left: 200px; margin-top: -150px;">	
	<h4 style="margin-top:10px ; margin-left: 20px;">Reach</h4>
	<p style="margin-left: 10px; padding-top:30px; padding-right: 100px ;color: #999999;">FundOurCause helps you easily share your story even you are far away enough over email, text, and social media to rally support for your cause. In addition, we have a dedicated team looking for great stories to amplify and share with the media and our community.</p>
</div>

<div style="padding-top: 80px;" >
	<img style="width:200px; border-radius: 5px;" src="{{url('frontend/pictures/tools.jpg')}}">
</div>
<div style="display: flex; justify-content:space-evenly; margin-left: 200px; margin-top: -150px;">	
	<h4 style="margin-top:10px ; margin-left: 20px;">Tools</h4>
	<p style="margin-left: 10px; padding-top:30px;  padding-right: 100px ;color: #999999;">FundOurCause’s fundraising tools make it easy for you to create, share, and raise money for your fundraiser. From our mobile app to beneficiary management to team fundraising, we are constantly working on ways to improve our organizer and donor experiences—and change the way the world gives.</p>
</div>


<div style="padding-top: 80px;" >
	<img style="width:200px; border-radius: 5px;" src="{{url('frontend/pictures/service.jpg')}}">
</div>
<div style="display: flex; justify-content:space-evenly; margin-left: 200px; margin-top: -150px;">	
	<h4 style="margin-top:10px ; margin-left: 20px;">Service</h4>
	<p style="margin-left: 0px; padding-top:30px;  padding-right: 100px ; color: #999999;">Oh any problem has created??? now what to do ! don't worry FundOurCause's Customer Care team is here to answer your questions, offer expert advice, and support you every step of the way. We care about your questions, which is why we’re committed to providing a rapid and friendly response.</p>
</div>
</div>

<div style="background-color: #F7F7F7;">
<div style="margin-top: 2s0px;  display: flex; justify-content: space-evenly;  text-align: center; padding-bottom: 30px;">
			<p style="margin-top:70px;font-size: 14px; color: #999999;">“Safety and Trust team inside FundOurCause works with key stakeholders, including government officials, for an aim to ensure that funds raised on the platform are verified and that they go to the cause for which the money is being raised.” </p>

				
				
</div>

<div style="display: flex; padding-top: 50px; justify-content: space-evenly; align-items:center; text-align: center;">
			<img style="border-radius: 50%;     vertical-align: middle; width: 50px; height: 50px;" src="{{url('frontend/pictures/profilepic.jpg')}}">

</div>
		<h1 style="text-align: center; padding-top: 20px ; font-size: 14px;">John Doe</h1>
		<p style="text-align:center; padding-bottom: 60px;">Former Administrator
		</p>

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
                    <a href="file:///C:/Users/user/Desktop/Semester-06/Web%20Technologies/Lab%20and%20lab%20tasks/my_pages/whyFOC.html#common_questions.html">
                        <li>Why FundOurCause</li>
                    </a>
                    <a href="file:///C:/Users/user/Desktop/Semester-06/Web%20Technologies/Lab%20and%20lab%20tasks/my_pages/common_questions.html">
                        <li>Common questions</li>
                    </a>
                    <a href="file:///C:/Users/user/Desktop/Semester-06/Web%20Technologies/Lab%20and%20lab%20tasks/my_pages/Succes_stories.html">
                        <li>Success stories</li>
                    </a>
                    <a href="file:///C:/Users/user/Desktop/Semester-06/Web%20Technologies/Lab%20and%20lab%20tasks/my_pages/countries_supported.html">
                        <li>Supported countries</li>
                    </a>
                    <a href="file:///C:/Users/user/Desktop/Semester-06/Web%20Technologies/Lab%20and%20lab%20tasks/my_pages/charity_fundraising.html">
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