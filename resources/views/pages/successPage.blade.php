@extends('layouts.normal')
@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 changepassword-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo-container">
                            <img class="brand-logo" src="./assets/images/logo.svg" alt="copany logo" />
                        </div>
                        <p class="success-text">
                            Congratulations you've Successfully
                            changed your password!
                        </p>
                        <div class="logo-container">

                            <img class="company logo" src="./assets/images/success-check-mark.svg" alt=check-logo />

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="button-container back-to-login-button">

                <button class="btn-default">
                    Back to login
                </button>
            </div>
        </div>
    </div>
</main>

@endsection