@extends('layouts.app')

@section('title')
    NTVC | Apply
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                How to Apply
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"> Home</a></li>
                <li class="breadcrumb-item active">Fee structure</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p>Fee structure is inclusive of government capitation</p>
            <a href="/feedownload" class="btn btn-large"><i class="icon-download-alt"> </i> Download Fee Structure </a>
        </div>
    </div>
</div>
@endsection