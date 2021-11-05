@extends('layouts.normal')
@section('content')

<main class="container-fluid sign-up-content">
    <div class="row justify-content-evenly">
        <div class="col col-xs-12">
            <div class="container-image-signup"></div>
        </div>
        <div class="col col-xs-12">
            <div class="container left-signup-container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="header-title">
                            LOGIN
                        </p>
                        <div class="row social-container-sign">
                            <div class="col social-icon"><i class="fab fa-facebook-f"></i>

                            </div>
                            <div class="col social-icon"><i class="fab fa-twitter"></i>

                            </div>
                        </div>
                    </div>
                </div>
                <p class="option-title pt-4 pb-3">
                    OR
                </p>
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                            autofocus>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password"
                            required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="button-container">

                        <button type="submit" class="full-width-button btn-default btn-block">
                            Login
                        </button>
                    </div>
                    <p class="option-account-text">
                        <a href="/resetpassword">Forgot
                            password?</a>
                    </p>

                    <p class="option-account-text">
                        Don't have an account? <a href="/signup">Sign Up</a>
                    </p>


                    <!-- <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Signin</button>
                    </div> -->

                    <!-- <p class="option-account-text" onclick="changePage('reset_password.php')">Forgot
                        password?</p>

                    <p class="option-account-text">
                        Don't have an account? <a href="/signup">Sign Up</a>
                    </p> -->
                </form>

                <!-- <div class="row">
                    <div class="col-12">
                        <form class="row">
                            <div class="col-12 align-self-center">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        placeholder="saaria@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="...............">
                                </div>
                            </div>
                        </form>
                        <div class="button-container">

                            <button class="full-width-button btn-default" onclick="changePage('/dashboard')">
                                Login
                            </button>
                        </div>
                        <p class="option-account-text" onclick="changePage('reset_password.php')">Forgot
                            password?</p>

                        <p class="option-account-text">
                            Don't have an account? <a href="/signup">Sign Up</a>
                        </p>

                    </div>

                </div> -->
            </div>

        </div>
    </div>
</main>
@endsection