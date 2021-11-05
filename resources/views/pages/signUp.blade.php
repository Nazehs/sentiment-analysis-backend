@extends('layouts.normal')
@section('content')
<div class="container-fluid sign-up-content">
    <div class="row justify-content-evenly">
        <div class="col col-xs-12">
            <div class="container-image-signup"></div>

        </div>
        <div class="col col-xs-12">
            <div class="container left-signup-container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="header-title">
                            SIGN UP
                        </p>
                        <div class="row social-container-sign">
                            <div class="col social-icon"><i class="fab fa-facebook-f"></i>

                            </div>
                            <div class="col social-icon"><i class="fab fa-twitter"></i>

                            </div>
                        </div>
                    </div>
                </div>
                <p class="option-title">
                    OR
                </p>
                <div class="row">
                    <div class="col-12">
                        <!-- <form class="row">
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
                        </form> -->
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Full Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>

                            <!-- <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div> -->
                            <div class="button-container">

                                <button type='submit' class="full-width-button btn-default">
                                    Sign Up
                                </button>
                            </div>
                        </form>

                        <p class="option-account-text">
                            Have an account? <a href="/signin">Login</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection