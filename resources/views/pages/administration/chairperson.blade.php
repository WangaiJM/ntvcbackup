@extends('layouts.app')

@section('title')
    NTVC | Administration
@endsection

@section('content')

        <div class="cover-container d-flex flex-column bg-dark cover cover-chairperson">
            <header class="mx-auto my-auto">
                <h1 class="text-white">Naivasha Technical and Vocational College</h1>
            </header>
        </div>

    <main>
        <div class="container">
            <section class="">
                <div class="text-center">
                    <h1 class="">Board of Governors</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">My message</h2>
                        <p class="mb-2">
                            The Board of Governors for Naivasha Technical and Vocational College was inaugurated on <strong>20th January 2018 </strong> by the Director of Technical Education. Being a new college the board had an onerous task of ensuring the college is up and running. We are happy to inform the public that the college is now operational with over 100 students and more than ten Public Service trainers.
                        </p>
                        <p class="mb-2">
                            The college is a Centre of excellence in Mechanical Engineering and Information Technology, and we sincerely thank the government of Kenya for equipping the college with modern machines and equipment. According to the TVET Act No. 2019 of 2013 the main mandate of the Board of governors is developing, reviewing, promoting standards and relevance of training programmes in the college as well as resource mobilization and ensuring the allocated resources are utilized prudently
                        </p>
                        <p>
                            The board is up to the task and I want to assure the government and public at large that the Naivasha TVC board of governors shall ensure that the provisions of the TVET Act are adhered to and that the college grows to be a leading provider of Competence Based Education and training so that our youth plays a vital role in the achievement of the governments Big Four Agenda and realization of the Kenya Vision 2030.
                        </p>
                        <p>
                            I Welcome all the youth to enroll in our college for quality training and skills upgrading.
                        </p>
                        <p>
                            Thank You.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{URL::asset('Images/chairman_1.jpeg')}}" alt="Mechanics class" class="img-fluid">
                        <hr>
                        <h1 class="">Chairperson: <span class="heading-tertiary">Mr. david t. sasala</span></h1>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection