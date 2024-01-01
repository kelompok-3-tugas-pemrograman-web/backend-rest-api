<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Resources\V1\StudentCollection;
use App\Http\Resources\V1\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return new StudentCollection(Student::all());
    }

    public function store(StoreStudentRequest $request){
        Student::create($request->validated());
        return response()->json("Student's data is created successfully.");
    }

    public function update(StoreStudentRequest $request, Student $student){
        $student->update($request->validated());
        return response()->json("Student's data is updated successfully.");
    }

    public function show(Student $student){
        return new StudentResource($student);
    }

    public function destroy(Student $student){
        $student->delete();
        return response()->json("Student's data is deleted successfully.");
    }
}