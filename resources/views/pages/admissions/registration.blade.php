@extends('layouts.app')

@section('title')
    NTVC | Online Application
@endsection

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12">
            <h1 class="my-3">
                Online Application
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"> Home </a></li>
                <li class="breadcrumb-item active">Online Application</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="text-center p-3">
                    <h3>Personal Details </h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}" name="surname" value="{{ old('surname')}}" required>
                            @if($errors->has('surname'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('surname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" value="{{ old('firstname')}}" required>
                            @if($errors->has('firstname'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('firstname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" name="lastname" value="{{ old('lastname')}}" required>
                            @if($errors->has('lastname'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('lastname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="address">Address Number</label>
                            <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ old('address')}}" required>
                            @if($errors->has('address'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('address') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" class="form-control {{ $errors->has('postalcode') ? 'is-invalid' : '' }}" name="postalcode" value="{{ old('postalcode')}}" required>
                            @if($errors->has('postalcode'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('postalcode') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="town">Town</label>
                            <input type="text" class="form-control {{ $errors->has('town') ? 'is-invalid' : '' }}" name="town" value="{{ old('town')}}" required>
                            @if($errors->has('town'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('town') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="contacts">Contacts</label>
                            <input type="text" class="form-control {{ $errors->has('contacts') ? 'is-invalid' : '' }}" name="contacts" value="{{ old('contacts')}}" required>
                            @if($errors->has('contacts'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('contacts') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="dateOfBirth">Date of Birth</label>
                            <input type="date" class="form-control {{ $errors->has('dateOfBirth') ? 'is-invalid' : '' }}" name="dateOfBirth" value="{{ old('dateOfBirth')}}" required>
                            @if($errors->has('dateOfBirth'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('dateOfBirth') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="town">Gender</label>
                            <select name="gender" id="gender" class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" value="{{ old('gender')}}" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="both">Both</option>
                                <option value="others">Others</option>
                            </select>
                            @if($errors->has('gender'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('gender') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="form-group">
                            <label for="lastSchool">Last School Attended</label>
                            <input type="text" class="form-control {{ $errors->has('lastSchool') ? 'is-invalid' : '' }}" name="lastSchool" value="{{ old('lastSchool')}}" required>
                            @if($errors->has('lastSchool'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('lastSchool') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <select name="religion" id="religion" class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" value="{{ old('religion')}}" required>
                                <option value="">Select Religion</option>
                                <option value="christian">Christian</option>
                                <option value="islam">Islam</option>
                                <option value="hindu">Hindu</option>
                                <option value="jew">Jew</option>
                                <option value="atheist">Atheist</option>
                            </select>
                            @if($errors->has('religion'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('religion') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                            <label for="course">Course</label>
                            <select name="course" id="course" class="form-control {{ $errors->has('course') ? 'is-invalid' : '' }}" value="{{ old('course')}}" required>
                                <option value="">Select course</option>
                                <option value="DICT">Diploma in ICT</option>
                                <option value="CICT">Certificate in ICT</option>
                                <option value="DME">Diploma in Mechanical Engineering - Production Option</option>
                                <option value="CME">Certificate in Mechanical Engineering - Production Option</option>
                                <option value="DBM">Diploma in Business Management</option>
                                <option value="CBM">Certificate in Business Management</option>
                                <option value="DCM">Diploma in Co-operative Management</option>
                                <option value="CCM">Certificate in Co-operative Management</option>
                                <option value="D Supply Chain">Diploma in Supply Chain Management</option>
                                <option value="C Supply Chain">Certificate in Supply Chain Management</option>
                                <option value="DHR">Diploma in Human Resource</option>
                                <option value="CHR">Certificate in Human Resource</option>
                            </select>
                            @if($errors->has('course'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('course') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email')}}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="text">ID Number</label>
                            <input type="text" class="form-control {{ $errors->has('idNumber') ? 'is-invalid' : '' }}" name="idNumber" value="{{ old('idNumber')}}" required>
                            @if($errors->has('idNumber'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('idNumber') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-center p-3">
                    <h3>Guardian's Details </h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="gsurname">Surname</label>
                            <input type="text" class="form-control {{ $errors->has('gsurname') ? 'is-invalid' : '' }}" name="gsurname" value="{{ old('gsurname')}}" required>
                            @if($errors->has('gsurname'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('gsurname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="gfirstname">Firstname</label>
                            <input type="text" class="form-control {{ $errors->has('gfirstname') ? 'is-invalid' : '' }}" name="gfirstname" value="{{ old('gfirstname')}}" required>
                            @if($errors->has('gfirstname'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('gfirstname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="glastname">Lastname</label>
                            <input type="text" class="form-control {{ $errors->has('glastname') ? 'is-invalid' : '' }}" name="glastname" value="{{ old('dlastname')}}" required>
                            @if($errors->has('glastname'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('glastname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control {{ $errors->has('gaddress') ? 'is-invalid' : '' }}" name="gaddress" value="{{ old('gaddress')}}" required>
                            @if($errors->has('gaddress'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('gaddress') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" class="form-control {{ $errors->has('gpostalcode') ? 'is-invalid' : '' }}" name="gpostalcode" value="{{ old('gpostalcode')}}" required>
                            @if($errors->has('gpostalcode'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('gpostalcode') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="town">Town</label>
                            <input type="text" class="form-control {{ $errors->has('gtown') ? 'is-invalid' : '' }}" name="gtown" value="{{ old('gtown')}}" required>
                            @if($errors->has('gtown'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('gtown') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="contacts">Contacts</label>
                            <input type="text" class="form-control {{ $errors->has('gcontacts') ? 'is-invalid' : '' }}" name="gcontacts" value="{{ old('gcontacts')}}" required>
                            @if($errors->has('gcontacts'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('gcontacts') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="town">Gender</label>
                            <select name="ggender" id="gender" class="form-control {{ $errors->has('ggender') ? 'is-invalid' : '' }}" value="{{ old('ggender')}}" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="both">Both</option>
                                <option value="others">Others</option>
                            </select>
                            @if($errors->has('ggender'))
                                <div class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('ggender') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 d-flex">
                        <input type="submit" value="Register" class="btn btn-outline-primary btn-lg ml-auto">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection