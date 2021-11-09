<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sentiment Analysis') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        @php
        $full_name = explode(" ", Auth::user()->name)
        @endphp
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="avatar-stub">
                    <div class="avatar-small">{{$full_name[0][0]}}{{$full_name[1][0]}}</div>
                    <p class="avatar-username">{{Auth::user()->name}}</p>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="dashboard-content">

        <div class="row">
            <div class="col-md-1 left-container">
                <div class="navbar-links-dashboard">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link" aria-current="page" href="/profile"><i class="far fa-user"></i>
                                Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/generate-analysis"><i class="fas fa-chart-pie"></i>
                                Analysis</a>
                        </li>
                    </ul>
                </div>
                <div class="hr-line"></div>
                <div class="main-avatar-container">
                    <div class="avatar-main">
                        <div class="avatar-big"></div>
                        <p class="avatar-username-main">{{Auth::user()->name}}</p>
                        <p class="avatar-email">{{Auth::user()->email}}</p>
                        <a href="/signout" class="btn btn-outline-light">Logout &nbsp;<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="main-table-content">
                    <p class="dashboard-title">Your recent sentiment analysis will show here</p>
                    <div class="col-md-12 table-container">
                        <div class="table-responsive">
                            <table class="table align-left table-striped table-hover">
                                <thead>
                                    <tr>
                                        <td>S/NO</td>
                                        <td>GROUP NAME</td>
                                        <td>POST COUNT</td>
                                        <td>OVERRALL SENTIMENT</td>
                                        <td>DATE</td>
                                        <td>ACTIONS</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Some Group Name</td>
                                        <td class="align-top">3000</td>
                                        <td>Positive</td>
                                        <td>20/02/2022</td>
                                        <td><i class="far fa-eye"></i> &nbsp; <i class="far fa-trash-alt"></i></td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Some Group Name</td>
                                        <td class="align-top">3000</td>
                                        <td>Positive</td>
                                        <td>20/02/2022</td>
                                        <td><i class="far fa-eye"></i> &nbsp; <i class="far fa-trash-alt"></i></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Some Group Name</td>
                                        <td class="align-top">3000</td>
                                        <td>Positive</td>
                                        <td>20/02/2022</td>
                                        <td><i class="far fa-eye"></i> &nbsp; <i class="far fa-trash-alt"></i></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Some Group Name</td>
                                        <td class="align-top">3000</td>
                                        <td>Positive</td>
                                        <td>20/02/2022</td>
                                        <td><i class="far fa-eye"></i> &nbsp; <i class="far fa-trash-alt"></i></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Some Group Name</td>
                                        <td class="align-top">3000</td>
                                        <td>Positive</td>
                                        <td>20/02/2022</td>
                                        <td><i class="far fa-eye"></i> &nbsp; <i class="far fa-trash-alt"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('includes.footer')

</body>

</html>