@extends('layouts.normal')
@section('content')
<main class="show-profile-content">

    <div class="profile-avatar-container col-md-4 offset-md-4">
        <div class="ava-main">
            <div class="avatar-b"></div>
            <p class="avatar-user-name-dashboard"> {{Auth::user()->name}} </p>
            <p class="avatar-user-email"> {{Auth::user()->email}} </p>
        </div>
        <div class="profile-buttons">
            <button class="btn-default"> <a href="/update-profile">update
                    profile </a></button>
            <button class="btn-default"> <a href="/change-password">change password </a></button>
        </div>
    </div>
</main>
@endsection