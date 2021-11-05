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
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="update-profile-title">Create New Password</p>
                    </div>
                </div>
                <div class="col-12">
                    <form class="row">
                        <div class="col-12 align-self-center">
                            <div class="mb-3">
                                <label for="password_new" class="form-label">New password</label>
                                <input type="password" class="form-control" id="password_new"
                                    placeholder="new password">
                            </div>
                            <div class="mb-3">
                                <label for="password_old" class="form-label">Confirm new Password</label>
                                <input type="password" class="form-control" id="password" placeholder="old password">
                            </div>
                        </div>
                    </form>
                    <div class="button-container">

                        <button class="full-width-button btn-default">
                            Update password
                        </button>
                    </div>
                </div>
            </div>

        </div>
</main>
@endsection