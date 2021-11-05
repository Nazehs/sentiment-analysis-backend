@extends('layouts.normal')
@section('content')
<main class="resetpassword-content">

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 changepassword-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo-container">

                            <img class="brand-logo" src="./assets/images/logo.svg" alt="copany logo" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="change-pasword-title">Please enter your email used during sign up</p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form class="row">
                        <div class="col-12 align-self-center">
                            <div class="mb-3">
                                <label for="username" class="form-label">username</label>
                                <input type="email" class="form-control" id="username" placeholder="saaria@example.com">
                            </div>

                    </form>
                    <div class="button-container reset-password-button">

                        <button class="full-width-button btn-default">
                            Reset password
                        </button>
                    </div>
                </div>
            </div>

        </div>
</main>
@endsection