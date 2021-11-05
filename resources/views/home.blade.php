@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="main-content">
    <!-- hero section -->
    <div class="container-fluid no-padding no-margin">
        <div class="hero">

            <img src="{{asset('assets/images/hero_bg_main.svg')}}" alt="human and a machine facing each other" />
        </div>
    </div>
    <div class="container-fluid  no-padding">
        <div class="col-md-12 col-lg-12 pt-4 description-container getting-started-container">
            <h3 class="text-center pt-4">RUN FACEBOOK GROUPS SENTIMENT ANALYSIS WITH EASE</h3>

            <div class="text-center getting-started-button-container">
                <button class="btn-getting-body">Getting started</button>
            </div>
        </div>
    </div>
    <!-- what is sentiment analysis -->
    <div class="container-fluid sentiment-analysis-container no-padding">
        <div class="col-md-12">
            <h4 class="bold-text what-is-sentiment-title text-center">
                What is sentiment analysis?
            </h4>
            <p class="sentiment-definition-text text-center">
                Sentiment Analysis, often referred to as opinion
                mining, uses texts, content investigation, computational etymology, and biometrics to
                efficiently
                distinguish and evaluate emotional states of subjective data. Through sentiment analysis we can
                summarize the nature of the content as either <span class="bold-text">Negative,</span><span
                    class="bold-text">Positive,</span>or<span class="bold-text"> Neutral</span>
            </p>
        </div>
    </div>
    <!-- our solution section -->
    <section class="container-fluid our-solution">
        <div class="container">
            <div class="row  justify-content-center position-relative align-items-center">
                <div class="row our-solution-bg-scattered"></div>
                <h4 class="our-solution-header">Our solution</h4>
                <div class="col">
                    <div class="card card-container">
                        <div class="card-image card-1">

                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Hassle free</h5>
                            <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <div class="card-button-container">
                                <button href="#" class="btn-readmore">Read More
                                    &nbsp;<i class="fal fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-container">
                        <div class="card-image card-2">

                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Hassle free</h5>
                            <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                            <div class="card-button-container">
                                <button href="#" class="btn-readmore">Read More
                                    &nbsp; <i class="fal fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-container">
                        <div class="card-image card-3">

                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Hassle free</h5>
                            <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <div class="card-button-container">
                                <button href="#" class="btn-readmore">Read More
                                    &nbsp;<i class="fal fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- scattered bg -->

    <section class="container scatter-icons-small-bg">

    </section>
    <!-- research papers section -->
    <section class="container-fluid no-padding research-papers-hotlines-container">
        <div class="col-md-12">
            <h4 class="text-center">
                RESEARCH PAPERS/VIDEOS
            </h4>
            <p class="sentiment-definition-text text-center">
                You will find research papers on the importance of sentiment analysis and the need for a tool to
                evaluate facebook groups
            </p>
        </div>
    </section>

    <!-- scattered bg -->

    <section class="container scatter-icons-bg">

    </section>

    <!-- hotline numbers section -->
    <section class="container-fluid no-padding research-papers-hotlines-container">
        <div class="col-md-12">
            <h4 class="bold-text text-center">
                HOTLINE NUMBERS
            </h4>
            <p class="sentiment-definition-text text-center">
                You will find some local and international numbers to reach out to if you or your loved one
                needs help
            </p>
        </div>
    </section>
</div>
@endsection