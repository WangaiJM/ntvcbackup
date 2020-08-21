@extends('layouts.app')

@section('title')
    NTVC | Welcome
@endsection

@section('content')
    <main role="main">
        @include('layouts.message')
        <div class="cover-container d-flex flex-column bg-dark cover cover-index">
            <header class="mx-auto my-auto banner">
                <h1>Naivasha Technical and Vocational College</h1>
            </header>
        </div>
        <div class="container">
            <!-- Welcome section -->
            <section class="section-about mt-3">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">Welcome</h2>
                        <p class="">
                            People make the school great, so if you are a prospective student, current student, researcher, staff member, graduate, parent, neighbor or visitor, your interest and enthusiasm are valued and appreciated.
                        </p>
                        <h2 class=""></h2>
                        <p class="">
                            We are committed to produce responsible members and a community with people who are self reliant through wage and self employment.
                        </p>
                        <a href="/About" class="btn btn-outline-primary">More info &rarr;</a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{URL::asset('images/mec_1.jpg')}}" alt="Mechanics class" class="rounded mx-auto d-block img-fluid">
                    </div>
                </div>
            </section>
            <!-- Features -->
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <h2 class=""> Center of Excellence</h2>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img src="../Images/student_1.jpg" class="img-fluid"  />
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img src="../Images/students_1.jpg" class="img-fluid"  />
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img src="../Images/student_2.jpg" class="img-fluid"  />
                    </a>
                </div>
            </div>
           <!-- Colored -->
           <div class="row mt-3">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="">Why US:</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Well equipped workshop and classes</li>
                        <li class="list-group-item">Qualified and experienced lecturers</li>
                        <li class="list-group-item">Well Maintained and spacious compound</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="../Images/students_2.jpg" class="img-fluid"/>
                </div>
            </div>
            <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="../Images/comp_lab1.jpg"  class="img-fluid"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="heading-tertiary">Our strength:</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dedicated staff</li>
                            <li class="list-group-item">Exam center for NITA, KNEC and CDACC</li>
                            <li class="list-group-item">TVETA registered and regulated institution</li>
                        </ul>
                    </div>
                </div>
        </div>
    </main>
@endsection
