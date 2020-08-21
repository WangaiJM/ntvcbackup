@extends('layouts.app')

@section('title')
    NTVC | Academic Programmes
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mt-3">
                Academic Programmes
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/"> Home </a>
                </li>
                <li class="breadcrumb-item active">Academic programmes</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2> Information Communication Technology</h2>
            <ul>
                <li> <a href="#!"> Diploma in ICT </a> </li>
                <li> <a href="#!">Certificate in ICT </a></li>
            </ul>

            <h2> Mechanical Engineering</h2>
            <ul>
                <li> <a href="#!"> Diploma in Mechanical Engineering - Production Option </a> </li>
                <li> <a href="#!">Certificate in Mechanical Engineering - Production Option </a></li>
                <li> <a href="#!"> Certificate in Welding and Fabrication</a></li>
            </ul>

            <h2> Business Courses </h2>
            <ul>
                <li> <a href="#!">Diploma in Business Management</a> </li>
                <li> <a href="#!">Certificate in Business Management</a></li>
                <li> <a href="#!">Diploma in Co-operative Management</a> </li>
                <li> <a href="#!">Certificate in Co-operative Management</a></li>
                <li> <a href="#!">Diploma in Supply chain Management</a> </li>
                <li> <a href="#!">Certificate in Supply chain Management</a></li>
                <li> <a href="#!">Diploma in Human resource Management</a> </li>
                <li> <a href="#!">Certificate in Human resource Management</a></li>
            </ul>

            <h2> Other Courses </h2>
            <ul>
                <li> <a href="#!"> Certificate in Plumbing </a> </li>
                <li> <a href="#!"> certificate in Masonry </a></li>
                <li> <a href="#!"> certificate in Electrical Installation </a></li>
            </ul>

            <h2> Short Courses </h2>
            <ul>
                <li> <a href="#!"> Certificate in Foods & Beverage </a> </li>
            </ul>

        </div>
    </div>
</div>

@endsection