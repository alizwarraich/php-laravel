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
    <link rel="stylesheet" href="{{url('frontend/css/donate.css')}}">
    <title>Donate</title>
</head>
<body>
    <div class="page-container">
        <div class="header">
            <a class="logo" href="{{url('/')}}">
                <img src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}"
                    width="100" height="90">
            </a>
            @guest
                <div class="cansignin">
                    <span class="account">Already have an account?</span>
                    <a class="signin" href="{{route('login')}}">Sign in</a> 
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
        <!-- <hr class="line"> -->
        <div class="contains">
            <div class="checkout">
                <div class="info">
                    <a href=""><button class="goback"><ion-icon class="ionicon" name="chevron-back-outline"></ion-icon>Return to funds</button></a>
                </div>
                <div class="info info1">
                    <div class="image">
                        <img src="{{url('frontend/pictures/covid.jpg')}}" width=130px height=100px>
                    </div>
                    <div class="desc">
                        <span>You are supporting people suffering from <strong>COVID-19 disease</strong>.</span>
                        <p style="font-size:13px;color:grey">Your donation will benefit those people</p>
                    </div>
                </div>
                <div class="info">
                <p style="font-weight:600">Enter your donation</p>
                </div>
                <div class="info">
                        <input type="text" class="inputamount" value=".00">
                        <span style="font-size:24px; font-weight:700">USD</span>
                </div>
                <div class="info">
                    <p style="font-weight:600">Payment method</p>
                </div>
                <form method="post">
                    <div class="info pay">
                        <div class="radio">
                            <input type="radio" require />
                        </div>
                        <div class="payicon">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <div class="paymethod">
                            <span>Credit or debit</span>
                        </div>    
                    </div>
                </form>
                <div class="info">
                    @guest
                    <a href="{{route('login')}}">
                            <button type="submit" class=" btn btn-outline-success">
                                Pay
                            </button>
                        </a>
                    @else
                        <a href="{{url('/projects')}}">
                            <button type="submit" class=" btn btn-outline-success">
                                Pay
                            </button>
                        </a>
                    @endguest
                </div>
                <div class="info">
                    <p>By continuing, you agree with <a href="">FundOurCause terms</a> and <a href="">privacy policy</a></p>
                </div>
            </div>
            <div class="total">
                <p style="font-weight:600">Your donation</p>
                <p>Your donation <span style="margin-left:50px">USD 10.00</span></p>
                <hr>
                <p>Total due today <span style="margin-left:40px">USD 10.00</span></p>
            </div>
        </div>

    </div>
</body>
</html>