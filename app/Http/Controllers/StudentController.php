<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(30);

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = new Student;

        $student->firstname = $request->firstname;
        $student->surname = $request->surname;
        $student->lastname = $request->lastname;
        $student->address = $request->address;
        $student->postalcode = $request->postalcode;
        $student->town = $request->town;
        $student->idNumber = $request->idNumber;
        $student->gender = $request->gender;
        $student->course = $request->course;
        $student->lastschool = $request->lastSchool;
        $student->religion = $request->religion;
        $student->email = $request->email;
        $student->contacts = $request->contacts;
        $student->dateofbirth = $request->dateOfBirth;

        $student->gfirstname = $request->gfirstname;
        $student->gsurname = $request->gsurname;
        $student->glastname = $request->glastname;
        $student->gaddress = $request->gaddress;
        $student->gpostalcode = $request->gpostalcode;
        $student->gtown = $request->gtown;
        $student->ggender = $request->ggender;
        $student->gcontacts = $request->gcontacts;

        $student->save();

        return redirect()->route('index')->with('success', 'Application sent successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
