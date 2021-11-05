@extends('layouts.normal')
@section('content')
<main class="results-content">
    <div class="container">

        <div class="col-md-12 col-lg-12">
            <div class="main-table-content">
                <p class="results-title">RESULTS</p>
                <div class="col-md-12 table-container">
                    <div class="table-responsive">
                        <table class="table align-left table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>S/NO</td>
                                    <td>POST</td>
                                    <td>SENTIMENT</td>
                                    <td>ACCURACY PERECENTAGE</td>
                                    <td>GROUP NAME</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>something amazing here</td>
                                    <td class="align-top">Positive</td>
                                    <td>95%</td>
                                    <td>Aloha</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- image section -->
                <div class="row">
                    <div class="col-md-6 results-image offset-md-4">
                    </div>
                </div>
                <!-- result explaination section -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="explaination-header">
                                What do your results mean?
                            </p>
                        </div>
                        <div class="col-md-12 explain-section">
                            <p class="text-explained">
                                <span>
                                    POSITVE:
                                </span> if your test results came out positive, it means that overall the group’s
                                communication was positive
                            </p>
                            <p class="text-explained">
                                NEGATIVE: if your test results came out positive, it means that overall the group’s
                                communication was negative
                            </p>
                            <p class="text-explained">
                                NEUTRAL: if your test results came out neutral, it means that overall the group’s
                                communication was neutral
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
@endsection