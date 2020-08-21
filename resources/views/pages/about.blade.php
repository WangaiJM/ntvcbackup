@extends('layouts.app')

@section('title')
    NTVC | Welcome
@endsection

@section('content')
<div class="cover-container d-flex flex-column bg-dark cover cover-index">
    <header class="mx-auto my-auto banner">
        <h1>Naivasha Technical and Vocational College</h1>
    </header>
</div>

<div class="container">
            <section class="section-about">
                <div class="text-center my-3">
                    <h1 class="">ABOUT US</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">who we are</h2>
                        <p class="">
                            The Naivasha Technical and Vocational College is a newly established public institution under the Ministry of Education, State Department of Vocational and Technical Training. Though the construction of the college started in the year 2014, it opened its doors for students in the year 2018 with the first cohort of 21 trainees undertaking Mechanical Engineering course. It’s fully registered with Technical and Vocational Education and Training Authority (TVETA) to offer Diploma and Certificate courses
                        </p>
                        <h2 class=""></h2>
                        <p class="">
                            We are committed to be the leading regional competence based education and training (CBET) provider in technical training so that we can transform the lives of our youth through provision of relevant skills for self-reliance and National Development.
                        </p>
                        <p>
                            The Government of Kenya has heavily invested in the college by providing state of art training equipment and tools so that the youth can be trained with modern equipment similar to what is available in local and international industries.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="composition">
                            <img src="{{URL::asset('Images/comp_lab2.jpg')}}" alt="Photo 1" class="img-fluid">
                            <!-- <img src="{{URL::asset('Images/mec_3.jpg')}}" alt="Photo 2" class="img-fluid">
                            <img src="{{URL::asset('Images/student_4.jpg')}}" alt="Photo 3" class="img-fluid"> -->
                        </div>
                    </div>
                </div>
                <!-- Values -->
                <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class=""></h2>
                            <hr>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 bg-primary">
                            <h2 class=""> Mission</h2>
                            <p>
                                A leading regional competence based education and training (CBET) provider in TVET
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 bg-danger">
                            <h2 class=""> Vision</h2>
                            <p>
                                To transform the lives of youths through provision of relevant skills for self reliance and national development
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 bg-primary">
                            <h2 class=""> Core Values</h2>
                            <p> Excellence, Access, creativity and collaboration</p>
                        </div>
                    </div>
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">why us</h2>
                        <p class="paragraph">
                            In order to make technical training accessible the government has reduced fees to Ksh. 56,420 per year and out of this the government pays Ksh. 30,000 for every student admitted through Kenya Universities and Colleges Central Placement Service (KUCCPS) and the needy students are also eligible to apply for HELB Loans and Bursaries to a Maximum of ksh. 40,000. Therefore, there is no reason whatsoever for any youth to remain at home under the pretext of lack of school fees.
                        </p>
                        <p>
                            Needy students are allowed to register and attend classes as they process HELB loans and bursaries.
                        </p>
                        <p>
                            Thank you and looking forward to welcome you to the college.
                        </p>
                        <a href="/Apply" class="btn btn-success">Apply Now &rarr;</a>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="composition">
                            <img src="{{URL::asset('Images/machines_1.jpg')}}" alt="Photo 1" class="img-fluid">
                            <!-- <img src="{{URL::asset('Images/staff_3.jpg')}}" alt="Photo 2" class="img-fluid">
                            <img src="{{URL::asset('Images/view_1.jpg')}}" alt="Photo 3" class="img-fluid"> -->
                        </div>
                    </div>
                </div>
            </section>
@endsection
