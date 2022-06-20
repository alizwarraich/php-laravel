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
	<div style="align-items: center;">
		<div style="display: flex; justify-content: space-around; align-items: center;">
			<h1 style="margin-top: 100px; color: rgb(37, 180, 37);">How can we help?</h1>
		</div>
		<div style="padding-top: 50px;">
			<div style="display: flex; justify-content: space-around; align-items: center;">
				<h2 style="color: #408080; margin-top: 20px; ">Popular Articles</h2>
			</div>
			<div style=" width:100%;  position: absolute;padding-top: 50px; display: flex; justify-content: space-around; align-items:center;">
				<div style="justify-content: space-evenly;">
					<h3 style="display: inline-grid; margin-top: -1000px;color: rgb(37, 180, 37);">Organzing a Fundraiser</h3>
					<p><strong>What to consider when adding a beneficiary</strong><br>If your fundraiser was created to raise money for someone else,<br>you will have the option to add that person as the beneficiary...</p>
					<p><strong>Creating a GoFundMe from start to finish</strong><br>This article will walk you through each step of the process, from<br>creating your GoFundMe account to sharing your fundraiser…</p>
					<p><strong>How fundraising works on GoFundMe</strong><br>Whether you’ve already created your fundraiser or haven’t<br>started yet, there are a few things to bear in mind along your…</p>
					<p><strong>How to transfer funds</strong><br>This article provides a step-by-step guide for setting up bank<br>transfers from your fundraiser to a bank account. Hello…</p>
					<p><strong>Ending your fundraiser</strong><br>You will have a couple of options when you've finished raising<br>funds and you’d like to end your fundraiser; you can either…</p>
					<p><strong>Countries supported on GoFundMe</strong><br>There are currently 19 countries that we can send funds to, and<br>the person withdrawing the funds must meet the withdrawal…</p>
				</div>
				<div style="justify-content: space-evenly;">
					<h3 style="display: inline-grid; margin-top: -1000px;color: rgb(37, 180, 37);">Receiving fund as a beneficiary</h3>
					
					<p><strong>How to transfer funds</strong><br>This article provides a step-by-step guide for setting up bank<br>transfers from your fundraiser to a bank account. Hello…</p>
					<p><strong>What to know about being added as a beneficiary</strong><br>If you’ve been added as the beneficiary of a fundraiser, it means<br>that someone is raising money on your behalf…</p>
					<p><strong>Changing the beneficiary of a fundraiser</strong><br>We recommend only changing the beneficiary if they can no<br>longer receive the funds. Some common reasons for this<br>include…</p>
					<p><strong>Claiming a GoFundMe started on your behalf</strong><br>If you see that a GoFundMe has been started for you, your<br>organisation or your family by someone you do not know, you<br>may…</p>
					<p><strong>Problems accepting a beneficiary invitation</strong><br>When an invitation is sent to you from a organizer,<br>you will receive an email titled “An invitation to accept money…</p><br><br>
				</div>
				<div style="justify-content: space-evenly;">
					<h3 style="display: inline-grid; margin-top: -1000px;color: rgb(37, 180, 37);">Donating to a Fundraiser</h3>
					<p><strong>Choosing a tip amount</strong><br>When making a donation, you can choose to leave a tip for<br>donations. This is definitely not compulsory and the tip can<br>be…</p>
					<p><strong>Donations and Taxes</strong><br>Is my donation tax-deductible? Donations made to a personal<br>fundraiser, rather than a charity fundraiser, are…</p>
					<p><strong>Problems making a donation</strong><br>We truly appreciate your generosity in donating to a<br>fundraiser and we’re sorry if you’re having trouble with that…</p>
					<p><strong>How to make a donation</strong><br>Thank you for choosing to support a fundraiser. You are making<br>a big difference to someone in need. We’ve outlined some…</p>
					<p><strong>Donating anonymously</strong><br>When you make a donation anonymous, this means that your<br>name will not be visible to the public on the campaign page. …</p><br><br><br>
				</div>
				<div style="justify-content: space-evenly;">
					<h3 style="display: inline-grid; margin-top: -1000px;color: rgb(37, 180, 37);">Raising funds for a charity</h3>
					<p><strong>How to confirm your connection to your charity</strong><br>In order to give you administrative access to the charity's<br>account you've selected, we must confirm that you work<br>for the…</p>
					<p><strong>Charity Fundraiser Payouts</strong><br>Fundraiser offers two different types of fundraisers for<br>organisations. One is a standard Fundraiser, and the other is …</p>
					<p><strong>How to add your charity to the GoFundMe database</strong><br>Please visit the applicable link below to see if your charity is<br>already listed in our database and search by the tax ID…</p>
					<p><strong>Charity Fundraisers: Where is the withdraw button?</strong><br>All proceeds from a charity fundraiser will be sent to our<br>payment partner. Giving Fund, who will process and deliver…</p>
					<p><strong>Withdrawing on behalf of a charity</strong><br>If your fundraiser is in aid of a charity, there are a couple<br>of options to get the money to that organisation: Set…</p>
					<p><strong>Raising funds for an Irish Charity</strong><br>How to get funds to an Irish charity organisation If you're one<br>of the countless individuals, businesses, or organisations…</p>
				</div>
			</div>
		</div>
		<div style="padding-top: 650px;margin-bottom:350px">
			<div style="display: flex; justify-content: space-around; align-items: center;">
				<h2 style="color: #408080; margin-top: 350px; ">Browse by topic</h2>
			</div>
			<div style=" width:100%;  position: absolute;padding-top: 50px; display: flex; justify-content: space-around; align-items:center;">
				<div style="justify-content: space-evenly;">
					<img src="{{url('frontend/pictures/getstarted.jpg')}}"; style="width:40px">
					<p><strong>Get Started</strong><br>Welcome!<br>Discover how it works, and<br>how to create a successful<br>fundraiser.</p>
				</div>
				<div style="justify-content: space-evenly;">
					<img src="{{url('frontend/pictures/manageaccount.jpg')}}"; style="width:40px">
					<p><strong>Manage Account</strong><br>Learn how to make<br>changes to your account<br>and manage donations<br>you've received.</p>
				</div>
				<div style="justify-content: space-evenly;">
					<img src="{{url('frontend/pictures/withdrawfunds.jpg')}}"; style="width:40px">
					<p><strong>Withdraw funds</strong><br>Learn how to set up<br>and troubleshoot<br>withdrawals for a personal<br>or company bank account.</p>
				</div>
				<div style="justify-content: space-evenly;">
					<img src="{{url('frontend/pictures/safetysecurity.jpg')}}"; style="width:40px">
					<p><strong>Safety And Security</strong><br>Your safety is our priority.<br>Find out how to report a<br>fundraiser or remove a hold<br> from your account.</p>
				</div>
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