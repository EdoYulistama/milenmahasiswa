<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    
    public function __construct(student $students)
    {
        $this->students = $students;
    }
    
    public function index()
    {   
        $students = $this->students->students();
        return view('admin.index',
        [
            'students' => $students
        ]);
    }
    
    public function students()
    {
        $students = $this->students->students();
        return view('admin.mahasiswa',
        [
            'students' => $students
        ]);
    }
    public function studentsaktif()
    {
        $students = $this->students->studentsaktif();
        return view('admin.mahasiswaaktif',
        [
            'students' => $students
        ]);
    }
    public function studentscuti()
    {
        $students = $this->students->studentscuti();
        return view('admin.mahasiswacuti',
        [
            'students' => $students
        ]);
    }
    public function studentsdo()
    {
        $students = $this->students->studentsdo();
        return view('admin.mahasiswado',
        [
            'students' => $students
        ]);
    }

    public function about()
    {
        return view('admin.about');
    }

    public function student($student)
    {
        return $this->students->student($student);
    }

    public function create()
    {
        $students = $this->students->students();
        return view('admin.create',
        [
            'students' => $students        
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'npm' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required',
            'status' => 'required',
        ]);
        return $this->students->addstudents($request->all());
    }

    public function show($student)
    {
        $student = $this->students->student($student);
        return view('admin.show',
        [
           'students' => $student 
        ]);
    }

    public function edit($student)
    {
        $student = $this->students->student($student);
        return view('admin.edit',
        [
           'students' => $student 
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'npm' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required',
            'status' => 'required',
        ]);
        return $this->students->updatestudent($request->all());
        // return $request;
    }

    public function destroy($id)
    {
        return $this->students->studentsdelete($id);
    }
}
