@extends('layouts.normal')
@section('content')
<main class="generate-analysis-content">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="brand-name" src="assets/images/logo.svg" alt="company logo">
        </a>
        <div class="col-md-12 generate-analysis-image">
            <img src="./assets/images/smiling_faces.svg" alt="smiling faces of emoji's" />
        </div>

        <div class="col-md-6 offset-md-3">
            <h1 class="text-center analysis-title">WELCOME SAARIA</h1>
            <div class="mb-3">
                <input type="text" class="form-control" id="url" placeholder="Enter Facebook Group URL">
            </div>
            <div class="button-container">
                <button class="btn-default">
                    Generate Analysis
                </button>
            </div>
        </div>
        <a href="/dashboard" class="back-btn">
            Main Page
        </a>
    </div>
</main>
@endsection