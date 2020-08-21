@extends('layouts.app')

@section('title')
    NTVC | Show
@endsection

@section('content')
    <div class="container my-4">
        <div class="card col-lg-12 col-md-12">
            <div class="card-header">
                <h2>Submitted Information</h2>
            </div>
            <div class="card-body">
                <div class="text-center p-3">
                    <h3>Personal Details </h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <strong>Name: </strong> {{$student->name}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Address: </strong> P.O Box {{$student->address}} - {{$student->postalcode}}, {{$student->town}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Email: </strong> {{$student->email}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <strong>Contacts: </strong> {{$student->contacts}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Date Of Birth: </strong> {{ $student->dateofbirth}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Gender: </strong> {{$student->gender}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <strong>Last School: </strong> {{$student->lastschool}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Religion: </strong> {{$student->religion}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Course Admitted: </strong> {{$student->course}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <strong>Id Number: </strong> {{$student->idNumber}}
                    </div>
                </div>
            </div>
            <div class="text-center p-3">
                <h3>Guardian Information</h3>
            </div>
            <div class="row">
                    <div class="col-lg-4">
                        <strong>Name: </strong> {{$student->gname}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Address: </strong> P.O Box {{$student->gaddress}} - {{$student->gpostalcode}}, {{$student->gtown}}
                    </div>
                    <div class="col-lg-4">
                        <strong>Contacts: </strong> {{$student->gcontacts}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <strong>Gender: </strong> {{$student->ggender}}
                    </div>
                </div>
        </div>
    </div>
@endsection