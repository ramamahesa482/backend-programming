<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::All();
        $data = [
            'masage' => 'get All Students',
            'data' => $students
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        $data = [
            'masage' => 'Students is create',
            'data' => $student
        ];
        return response()->json($data, 201);
    }
}