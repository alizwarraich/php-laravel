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
	<style >
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
} 
</style>
	
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

	<div style="justify-content: space-around; padding-right: 200px; padding-left: 200px; align-items: center;  ">
		<div style="text-align: center; justify-content: space-around;">
			<h1 style="padding-top: 50px; color: rgb(37, 180, 37);">Countries supported on FundOurCause</h1>
			

	


		</div>
		<div style="justify-content: space-around; padding-right: 150px; padding-left: 150px;">
		<p style="padding-top:30px ">April 16, 2022 . Updated</p>
		<br>
		<p>There are currently  20 countries that we can send funds to, and the person withdrawing the funds must meet the withdrawal requirements from that country. The location of a fundraiser is chosen during the fundraiser creation process, and once the fundraiser is published, it cannot be changed.<br><br>We are working to expand our services to more countries in the future, but for now, your fundraiser must be created in one of the following countries :</p>
		</div>
<div style="justify-content: space-around; padding-right: 200px; padding-left: 200px; align-items: center; padding-top: 50px;">
<table>
  	<tr>
    <td>Australia</td>
    <td>Austria</td>
    <td>Belgium</td>
    <td>Canada</td>
  	</tr>
  	<tr>
    <td>Denmark</td>
    <td>Finland</td>
    <td>France</td>
    <td>Germany</td>
  	</tr>
  	<tr>
    	<td>Ireland</td>
    	<td>Italy</td>
    <td>Luxembourg</td>
    <td>Netherlands</td>
  	</tr>
  	<tr>
    	<td>Norway</td>
    	<td>Pakistan</td>
    <td>Spain</td>
    <td>Sweden</td>
  	</tr>
  	<tr>
    	<td>Switzerlands</td>
    	<td>United Kingdom</td>
    <td>United States</td>
    <td>Portugal</td>
  	</tr>
</table>
</div>
<div style="justify-content: space-around; padding-right: 150px; padding-left: 150px;">

	<h4><br>*United States Territories</h4>
	
	<ul>
		<li>American Samona</li>
		<li>Gaum</li>
		<li>Northern Mariana Islands</li>
		<li>Puerto Rico</li>
		<li>U.S. Virgin Islands</li>

	</ul>
	<br>
	<p>If you do not meet the withdrawal requirements for one of these supported countries, then please do not create an account and/or fundraiser. If a fundraiser is created by an organizer who does not meet supported country requirements, it is likely that all money raised will be refunded and the account will be removed from FundOurCause. </p>
	<p>If you accidentally created a fundraiser from an unsupported country or territory and raised funds, please contact us by clicking "Get help". You will need to ask someone in one of the supported countries above to raise money for you instead.</p>
	<h3>Get notified when we are live in your country</h3>
	<p>If you're thinking about setting up a FundOurCause fundraiser for an important cause in your life, we'd love to help. While we’re not yet available in every country, we should be in the future. If you’d like, you can leave your contact information in this form, and we’ll reach out when we’re live.

	</div>
	

</p>
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