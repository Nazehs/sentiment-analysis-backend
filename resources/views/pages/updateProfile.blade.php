@extends('layouts.normal')
@section('content')
@php
$full_name = explode(" ", Auth::user()->name)
@endphp
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 changepassword-container">

                <div class="row">
                    <div class="col-md-12">
                        <p class="update-profile-title">Update Profile</p>
                    </div>
                </div>
                <div class="col-12">
                    <!-- update form section -->
                    <form class="row">
                        <div class="col-12 align-self-center">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name
                                </label>
                                <input type="text" class="form-control" id="firstname" value={{$full_name[0]}}>
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" value={{$full_name[1]}}>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" value={{Auth::user()->email}}>
                            </div>
                        </div>
                        <div class="button-container">

                            <button class="full-width-button btn-default">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</main>