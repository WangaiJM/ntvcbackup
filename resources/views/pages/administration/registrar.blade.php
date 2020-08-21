@extends('layouts.app')

@section('title')
    NTVC | Registrar
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
                <div class="text-center my-2">
                    <h1 class="">Registrar</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">My message</h2>
                        <p class="mb-2">
                            Welcome to Naivasha Technical and Vocational College (NTVC).  At NTVC we aspire to provide quality training to our learners. Our learners are drawn from all over the country.
                        </p>
                        <p class="mb-2">
                            Students who have immediately graduated from high school as well as those that have stayed at home for some time after their KCSE examinations can be admitted at NTVC to take various courses in Engineering, ICT and Business.
                        </p>
                        <p>
                            We gear our training to equip the trainee with skills that will contribute towards the government attainment of the ‘Big Four agenda’ and the ‘Vision 2030’.
                        </p>
                        <p>
                            Students applying through Kenya Universities &Colleges Central Placement Service (KUCCPS) benefit from government capitation, HELB loans and Government bursaries. In this regard, challenges attributable to issues of fees are mitigated. 
                        </p>
                        <p>
                            There are many opportunities open to students graduating from our college. Those who join industry can work in the manufacturing sector, those who join “Jua Kali” sector can be self-employed; - this a sector that is rich with creativity and innovation. Students who join construction industry can be very productive in housing development as construction support technicians.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{URL::asset('Images/dean_1.jpg')}}" alt="Registrar" class="img-fluid">
                        <hr>
                        <h1 class="">Registrar: <span class="">Mr. Eric K. Chebii</span></h1>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection