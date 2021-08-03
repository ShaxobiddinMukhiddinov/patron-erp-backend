<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(Student::all());
    }
    public function store()
    {
        $student = new Student;
        $student->name = 'Shaxzodbek';
        $student->birth_date = now()->subDays(1000);
        $student->save();
        return response()->json($student);
    }

    public function delete($id){
        Student::where('id', $id)->delete();
        return response()->json(['success' => true]);
    }

    public function update($id) {
        $student = Student::find($id);
        $student->name = $student->name . 'bek';
        $student->update();
        return response()->json($student);
    }
}