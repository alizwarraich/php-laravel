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
    <link rel="stylesheet" href="{{url('frontend/css/others/s_emergency.css')}}">
    <title>Emergency</title>
</head>
<body>
    <!-- <div class="container"> -->
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
                    <a href="{{url('/')}}"><img  src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}" width="100" height="100"></a>
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

        <!-- <div class="section1 bg"> -->
        <div class="section1 col-md-12 d-flex justify-content-evenly">
            <div class="col-md-3" style="width: 40%;">
                <h1 style="font-weight: bold;">Get help with emergency fundraising</h1>
                <p style="opacity: 0.8; font-size:x-large;">With a FundOurCause, you can get immediate help with emergency costs.</p>
                <button type="button" class="btn btn-outline-success" style="width: 250px;">Start a FundOurCause</button>
                <p style="margin-top: 150px; opacity: 0.8;">Britons raised Rs. 127,966 after the Grenfell Tower tragedy.</p>
            </div>
            <div class="col-md-3">
                <img src="https://images.unsplash.com/photo-1580795479172-6c29db0fd7c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Medical Fund Raise" width="160%" height="600">
            </div>
        </div>
        
        <!-- Section 2 -->
        <div class="section2">
            <div class="d-flex aligns-items-center justify-content-center">
                <h3><strong>We're the leader in online emergency fundraising</strong></h3>
                <!-- <p id="p44"><strong>We're the leader in online medical fundraising</strong></p> -->
            </div>
            
            <div class="c2 text-center d-flex aligns-items-center justify-content-evenly">
                <div>
                    <h3 style="font-weight: lighter;">100,000+</h3>
                    <p>emergency fundraisers per year</p>
                </div>
                <div>
                    <h3 style="font-weight: lighter;">Rs. 125 million+</h3>
                    <p>raised per year</p>
                </div>
            </div>
        </div>
        <!-- Section 3 -->
        <div class="section3">
            <div class="d-flex aligns-items-center justify-content-center">
                <h3><strong>Whatever your need, you can get help on GoFundOurCause</strong></h3>
                <!-- <p id="p44"><strong>We're the leader in online medical fundraising</strong></p> -->
            </div>
            
            <div style="margin-top: 20px;">
                <div class="text-center d-flex aligns-items-center justify-content-evenly">
                    <button type="button" class="btn btn-outline-success" style="width: 250px; margin: 10px -100px;">Fire</button>
                    <button type="button" class="btn btn-outline-success" style="width: 250px; margin: 10px -100px;">Tragedy</button>
                    <button type="button" class="btn btn-outline-success" style="width: 250px; margin: 10px -100px;">Earthquake</button>
                    <button type="button" class="btn btn-outline-success" style="width: 250px; margin: 10px -100px;">Flood</button>
                </div>
                <div class="text-center d-flex aligns-items-center justify-content-evenly">
                    <button type="button" class="btn btn-outline-success" style="width: 250px; margin: 10px -250px;">Storm</button>
                    <button type="button" class="btn btn-outline-success" style="width: 250px; margin: 10px -250px">Tornado</button>
                </div>
            </div>
        </div>
        
        <!-- Section 4 -->
        <div class="section4">
            <div class="c4 col-md-12 d-flex justify-content-evenly">
                <div class="col-md-3" style="width: 40%;">
                    <h5 class="c41">FUNDOURCAUSE FUNDRAISING STORIES</h5>
                    <h2 style="font-weight: bold;">Thanking a hero</h2><br>
                    <p style="opacity: 0.8; font-size: large;">Agter Geoff was hurt while protecting his friends during the London Bridge terror attack, donors gave money more than Rs. 80,000 to thank him for his bravey.</p>
                </div>
                <div class="col-md-3">
                    <img src="https://images.unsplash.com/photo-1576826631426-7af71963b72d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Medical Fund Raise" height="50%">
                </div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <h4 style="font-weight:lighter;">Ready to fundraise?</h4>
                <button type="button" class="btn btn-outline-success shadow p-3 mb-5" style="width: 250px; margin: 10px;">Start a FundOurCause</button>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="section4">
            <div class="c4 col-md-12 d-flex justify-content-evenly">
                <div class="col-md-3" style="width: 40%;">
                    <h5 class="c41">MEET A CUSTOMER CARE SPECIALIST</h5>
                    <h2 style="font-weight: bold;">Leah</h2><br>
                    <p style="opacity: 0.8; font-size: large; font-style: italic;">"Leah was wonderful!! She not only answered my question and pushed my withdrawal through she expressed concern about my dog whose surgery I am raising money for. What a sweet young lady."</p>
                    <p style="opacity: 0.8;">James - Buffalo,New York</p>
                </div>
                <div class="col-md-3">
                    <img class="rounded-3" src="https://efb-greenroof.eu/wp-content/uploads/2019/11/Fiona-Wolff.jpg" alt="Medical Fund Raise" width= "450" height= "400" style="margin-top: 50px;">
                </div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <h4 style="font-weight:lighter;">Our Customer Care team is ready to answer your questions.</h4>
                <button type="button" class="btn btn-outline-success fw-bold fs-5" style="width: 150px; margin: 10px; padding: 20px;">Contact us</button>
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
    <!-- </div> -->
</body>
</html>