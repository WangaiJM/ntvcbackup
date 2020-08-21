@extends('layouts.app')

@section('title')
    NTVC | Principal
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
                    <h1 class="">Principal</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">My Message</h2>
                        <p class="mb-2">
                            The Naivasha Technical and Vocational College is a newly established public institution under the Ministry of Education, State Department of Vocational and Technical Training. Though the construction of the college started in the year 2014, it opened its doors for students in the year 2018 with the first cohort of 21 trainees undertaking Mechanical Engineering course. It’s fully registered with Technical and Vocational Education and Training Authority (TVETA) to offer Diploma and Certificate courses
                        </p>
                        <h2 class=""></h2>
                        <p class="mb-2">
                            We are committed to be the leading regional competence based education and training (CBET) provider in technical training so that we can transform the lives of our youth through provision of relevant skills for self-reliance and National Development.
                        </p>
                        <p>
                            The Government of Kenya has heavily invested in the college by providing state of art training equipment and tools so that the youth can be trained with modern equipment similar to what is available in local and international industries.
                        </p>
                        <p>
                            Secondly,In order to make technical training accessible the government has reduced fees to Ksh. 56,420 per year and out of this the government pays Ksh. 30,000 for every student admitted through Kenya Universities and Colleges Central Placement Service (KUCCPS) and the needy students are also eligible to apply for HELB Loans and Bursaries to a Maximum of ksh. 40,000. Therefore, there is no reason whatsoever for any youth to remain at home under the pretext of lack of school fees.
                        </p>
                        <p>
                            Finally, as a college we shall continue to provide demand driven courses and ensure our graduates are highly skilled and of good conduct in order to give them a competitive edge over the others and enable them to play a vital role in the realization of our big 4 agenda and achievement of the vision 2030.
                        </p>
                        <p>
                            Therefore, all should make Naivasha Technical and Vocational College their college of choice
                        </p>
                        <p>
                            Thank you and looking forward to welcome you to the college 
                        </p>
                        <p>
                            God bless you all
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{URL::asset('Images/principle_2.jpeg')}}" alt="The principle" class="img-fluid">
                        <hr>
                        <h1 class="">Principal: <span class="">Mr. Samuel Mugo</span></h1>
                        
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection