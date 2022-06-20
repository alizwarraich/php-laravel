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
    <link rel="stylesheet" href="{{url('frontend/css/fundraiser.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Update Fundraiser</title>
</head>

<body>
    <div class="container-fluid">
        <div class="left">
            <a href="{{url('/')}}"><img style="margin-top:20px;" src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}"
                width="60" height="50">
            </a>
            <h2 style="margin-top:100px; color:#333333">Update the fundraiser</h2>
            <p  style="margin-top:30px;color:#454444">You can edit any details you want except for the time left</p>
        </div>
        <div class="right">
                <div class=" nav nav-link-wrapper">
                    <div class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('user1') }}
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
            <div class="form">
                <form class="form" action="{{ route ('fundraiser.update', $fundraisers->id) }}" method="post"> @csrf
                    <label for="name">What are you fundraising for? &nbsp;</label><br>
                    <input type="text" id="name" name="name" value="" required><br><br>
                    <label for="description">Describe your cause: &nbsp;</label><br>
                    <input type="text" id="description" name="description" value="" required><br><br>
                    <label for="fundtarget">What is your fund target? &nbsp;</label><br>
                    <input type="text" id="fundtarget" name="fundtarget" value="" placeholder="$0.00" required><br><br>
                    <label for="category">What category your fundraiser belongs to? &nbsp;</label><br>
                    <select id="dropdown" name="category">
                        <option value="Medical">Medical</option> 
                        <option value="Emergency">Emergency</option> 
                        <option value="Memorial">Memorial</option> 
                        <option value="Education">Education</option> 
                        <option value="Nonprofit">Nonprofit</option> 
                        <option value="Coronavirus fundraising">Coronavirus fundraising</option> 
                    </select><br><br>
                    <hr>
                    <input type="submit" class="submit" value="Submit"> </form>
                </form>
            </div>
        </div>
    </div>

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