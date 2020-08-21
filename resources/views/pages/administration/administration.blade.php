@extends('layouts.app')

@section('title')
    NTVC | Administration
@endsection

@section('content')

    <div class="cover-container d-flex flex-column bg-dark cover cover-administration">
        <header class="mx-auto my-auto">
            <h1 class="text-white">Naivasha Technical and Vocational College</h1>
        </header>
    </div>

    <main>
        <div class="container">
            <section class="section-about">
                <div class="text-center">
                    <h1 class="">Staff Members</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">who we are</h2>
                        <p class="paragraph">
                            The Naivasha Technical and Vocational College is a newly established public institution under the Ministry of Education, State Department of Vocational and Technical Training. Though the construction of the college started in the year 2014, it opened its doors for students in the year 2018 with the first cohort of 21 trainees undertaking Mechanical Engineering course. It’s fully registered with Technical and Vocational Education and Training Authority (TVETA) to offer Diploma and Certificate courses
                        </p>
                        <h2 class=""></h2>
                        <p class="paragraph">
                            We are committed to be the leading regional competence based education and training (CBET) provider in technical training so that we can transform the lives of our youth through provision of relevant skills for self-reliance and National Development.
                        </p>
                        <p>
                            The Government of Kenya has heavily invested in the college by providing state of art training equipment and tools so that the youth can be trained with modern equipment similar to what is available in local and international industries.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{URL::asset('Images/staff_2.jpg')}}" alt="staff" class="img-fluid">
                    </div>
                </div>
                <!-- staff -->

                {{-- <div class="container">

                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class=""> Our Leaders</h2>
                            <hr>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="portfolio-item.html">
                                <img src="../Images/principle_1.jpg" class="img-responsive img-home-portfolio"  />
                            </a>
                            <h3 class="">Principal</h3>  
                            <h3 class="">Mr. Mugo</h3>  
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="portfolio-item.html">
                                <img src="../Images/deputy_1.JPG" class="img-responsive img-home-portfolio"  />
                            </a>
                            <h3 class="">Deputy Principal</h3>  
                            <h3 class="">Mrs. Mwangi</h3>  
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="portfolio-item.html">
                                <img src="../Images/dean_1.JPG" class="img-responsive img-home-portfolio"  />
                            </a>
                            <h3 class="">Registra</h3>  
                            <h3 class="">Mr. Chebii</h3>  
                        </div>
                    </div>
                    <!-- /.row -->

                </div> --}}
            </section>
        </div>
    </main>

@endsection