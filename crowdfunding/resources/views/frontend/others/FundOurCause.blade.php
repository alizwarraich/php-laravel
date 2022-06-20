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
	<link rel="stylesheet" type="text/css" href="footer.css">
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
	<div style="align-items: center;">
		<div style="display: flex; justify-content: space-around; align-items: center;">
			<h1 style="margin-top: 100px; color: rgb(37, 180, 37);  	">How FundOurCause works?</h1>
		</div>
		<div style="display: flex; justify-content: space-around; align-items: center;">
			<p style="color: #408080; margin-top: 20px; ">FundOurCause is the best place to fundraise, whether you are an individual, group, or organization.</p>
		</div>	
		<br><br>
		
		
		<div style="width:100%;position: relative;padding: 10px; display: flex; justify-content: space-around;">
			<iframe width="800" height="300" src="https://www.youtube.com/embed/voF1plqqZJA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div style=" width:100%;  position: absolute;padding-top: 100px; display: flex; justify-content: space-around; align-items:center;">

			<div style="justify-content: space-evenly;">
			
				
				<img src="hand_pic.jpeg" alt="fund raising "; style="width:50px; ">
			
				<h3 style="display: inline-grid; color: rgb(37, 180, 37);">1.Start your fundraiser</h3>
				<ul>
					<li>Set your fundraiser goal</li>
					<li>Tell your story</li>
					<li>Add a picture or video</li>
					<li><a style="text-decoration: none;color: #408080 ;" href="https://youtu.be/Dcf4H8fchbE">Watch a video tutorial</a></li>
				</ul>
			</div>
			<div style="justify-content: space-evenly;">
				<img src="sharewithfriends.png" alt="fund raising "; style="width:40px">
				<h3 style="display: inline-grid; color: rgb(37, 180, 37);">2.Share with friends</h3>
				<ul>
					<li>Send emails</li>
					<li>Send text messages</li>
					<li>Share on social media</li>
					<li><a style="text-decoration: none; color: #408080 ;" href="https://youtu.be/Dcf4H8fchbE">Watch a video tutorial</a></li>
				</ul>
			</div>
			<div style="justify-content: space-evenly;">
				<img src="manage3.png" alt="fund raising "; style="width:50px">
				<h3 style="display: inline-grid; margin-top: -1000px;color: rgb(37, 180, 37);">3.Manage donations</h3>
				<ul>
					<li>Accept donations</li>
					<li>Thank donors</li>
					<li>Manage accounts</li>
					<li>Withdraw funds</li>
					
				</ul>
			</div>

			
			
			

		</div>
		<div style="background-color: #F7F7F7;">
		<div style="margin-top: 360px; background-color: #F7F7F7; display: flex; justify-content: space-evenly;  text-align: center; padding-bottom: 30px;">
			<p style="margin-top:70px;font-size: 14px;">This website is amazing! i raised to $15,000 in less than 3 days for our disable<br> community to fulfill their medical needs and your customer service was so helpfull. </p>

				
				
		</div>
		<div style="display: flex; justify-content: space-evenly; align-items:center; text-align: center;">
			<img style="border-radius: 50%;     vertical-align: middle; width: 50px; height: 50px;" src="profilepic.jpg">

		</div>
		<h1 style="text-align: center; padding-top: 20px ; font-size: 14px;">Muhammad Shahzaib</h1>
		<p style="text-align:center; padding-bottom: 60px;">Raised $16,000 on FundOurCause</p>

		</div>
		<div style="display: flex; justify-content: space-evenly;  text-align: center;">
			<h1 style="color: rgb(37, 180, 37);">Fast and Safe</h1>

		</div>
		<div  style="display: flex; justify-content: space-evenly;  text-align: center;">
			<p>Millions trust FundOurCause as the #1 online fundraising expert. That’s why more people <br> start fundraisers on FundOurCause than any other platform.</p>
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