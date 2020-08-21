<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    // Academic
    public function programmes()
    {
        return view('pages.academics.programmes');
    }
    // Administration
    public function administration()
    {
        return view('pages.administration.administration');
    }
    public function chairperson()
    {
        return view('pages.administration.chairperson');
    }
    public function principal()
    {
        return view('pages.administration.principal');
    }
    public function deputy_principal()
    {
        return view('pages.administration.deputy_principal');
    }
    public function registrar()
    {
        return view('pages.administration.registrar');
    }
    // Admissions
    public function accounts()
    {
        return view('pages.admissions.accounts');
    }
    public function general()
    {
        return view('pages.admissions.general');
    }
    public function apply()
    {
        return view('pages.admissions.apply');
    }
    public function registration()
    {
        return view('pages.admissions.registration');
    }
    public function admission_programmes()
    {
        return view('pages.admissions.programmes');
    }
    public function fees()
    {
        return view('pages.admissions.fees');
    }
    // Contacts
    public function contacts(){
        return view('pages.contacts');
    }
}
