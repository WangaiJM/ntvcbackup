@extends('layouts.app')

@section('title')
    NTVC | Academic Programmes
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <h1 class="py-4">
                Academic Programmes | 
                <small>Excel with Us</small>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Academics</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <a href="">
                <img src="../Images/comp_lab1.jpg" class="img-fluid" />
            </a>
        </div>
        <div class="col-md-5">
            <h3 class=""><strong>Information Communication and Technology</strong></h3>
            <h4>Learn to code with us</h4>
            <p>
                An institution to impact the world by training specialized software developers. Join us to become among the very few to move from amateur to advanced developers in a short period yet with world class skills.
            </p>
            <br>
            <h2>Courses:</h2>
            <p>Certificate in ICT</p>
            <p>Diploma in ICT</p>
            <p>Computer Packages</p>
            <a href="/Apply" class="btn btn-primary">Apply <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7">
            <a href="">
                <img src="../Images/mec_2.jpg" class="img-fluid" />
            </a>
        </div>
        <div class="col-md-5">
            <h3 class=""><strong>Mechanical Engineering</strong></h3>
            <p>
                This course entails manufacturing processes such as lathe work, grinding, milling, shaping and all types of welding. 
            </p>
            <p>
                The workshops are equiped with modern facilities that are automated and others are computerized and numerically controlled using computer programs. This is done to ensure the trainees are conversant  with the current technology in the industries and also for business startup locally.
            </p>
            <br>
            <h2>Courses:</h2>
            <p>Certificate in Mechanical Engineering</p>
            <p>Diploma in Mechanical Engineering</p>
            <p>Certificate in Welding and Fabrication</p>
            <br>
            <h2>The examining bodies are:</h2>
            <ul>
                <li>KNEC</li>
                    <ul style="margin-left: 2.5rem;">
                        <li>March and July Series</li>
                    </ul>
                <li>CDACC
                    <ul style="margin-left: 2.5rem;">
                        <li>Competence assessment for every level</li>
                    </ul>
                </li>
                <li>NITA
                    <ul style="margin-left: 2.5rem;">
                        <li>August and December series</li>
                    </ul>
                </li>
            </ul>
            <a href="/Apply" class="btn btn-primary">Apply <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7">
            <a href="">
                <img src="../Images/students_1.jpg" class="img-fluid" />
            </a>
        </div>
        <div class="col-md-5">
            <h3 class=""><strong>Other Courses</strong></h3>
            <h4></h4>
                <p>Includes;</p>
            <br>
            <h2>Courses:</h2>
            <h3>Diploma</h3>
                <p>Diploma in Business Management</p>
                <p>Diploma in Human Resource Management</p>
                <p>Diploma in Social work and community development</p>
                <p>Diploma in Supply chain management</p>
                <p>Diploma in Co-operative management</p>
            <hr>
            <h3>Certificate</h3>
                <p>Certificate in Business Management</p>
                <p>Certificate in Human Resource Management</p>
                <p>Certificate in Social work and community development</p>
                <p>Certificate in Supply chain management</p>
                <p>Certificate in Co-operative management</p>
            <a href="/Apply" class="btn btn-primary">Apply <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>

@endsection
    