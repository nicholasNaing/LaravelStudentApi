<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Models\StudentCard;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        
        $student = Student::all();
        return response()->json($student);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $student_id = Student::max('student_id')+1; //get the number of id in the Student table and add 1
        $card_number = "uuid_".$request->name."_".$student_id;
        $validated_data = $request->validated();
        $validated_data["card_number"] = $card_number;
        $student = Student::create($validated_data);

        //add data to student_cards table
        $student_cards = StudentCard::create([
            "student_id"=>$student->student_id,
            "card_number"=>$card_number
        ]);
        return response()->json($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return "Update was successful.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return "Deletion is successful.";
    }
}
