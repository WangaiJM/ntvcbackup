@extends('layouts.app')

@section('title')
    NTVC | Deputy Principal
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
                    <h1 class="">Deputy Principal</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="">My message</h2>
                        <p class="mb-2">
                            Welcome to Naivasha Technical and Vocational College.
                        </p>
                        <h2 class=""></h2>
                        <p class="mb-2">
                            The office of the Deputy Principal is mandated to ensure effective and efficient curriculum implementation and evaluation guided by the institution's academic policy. This actualizes the college's vision of being a leading competency based education and training (CBET) provider in TVET.
                        </p>
                        <p>
                            The college endevours to nurture all the talents  that the trainees possess through provision of a broad based curriculum. NTVC provides courses that are demand driven using modern training equipments and innovative training strategies.
                        </p>
                        <p>
                            The college has well equipped modern mechanical engineering workshops and computer laboratories and highly competent trainers
                        </p>
                        <p>
                            The office of the deputy principal is committed to ensure quality and relevant education is offered to trainees through continous upgrading of courses and programs in response to the global labour market demands.
                        </p>
                        <p>
                            Trainees personal development is enhanced by adherence to high standards of discipline in both curricular and co-curricular activities. 
                        </p>
                        <p>
                            We are grateful to the parents/ guardians/ sponsors/ and other stakeholders in TVET for entrusting us with the noble role  of transforming the young kenyans into responsible, diligent workforce for our country Kenya and the world at large.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{URL::asset('Images/deputy_2.jpg')}}" alt="Mechanics class" class="img-fluid">
                        <hr>
                        <h1 class="">Deputy Principal: <span class="heading-tertiary">Dorcas N Macharia</span></h1>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection