<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{

    public function index()
    {
        // $students = Student::all();

        $students = Student::orderBy('code', 'asc')->get();

        return view('student.index', compact('students'));
    }

    public function create() 
    {
        return view(('student.create'));
    }

    public function store(Request $request)
    {
        $students = new Student( $request->validate([
            'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
        ]));

        // dd($students);

        $students->save();
        return redirect('/student')->with('success', 'Student Saved!');
    }
    
    public function destroy($id) 
    {
        $student = Student::find($id);
        
        // dd($student);

        $student->delete();
        
        return redirect('/student')->with('success', 'Student Deleted!');
    }

    public function edit($id) 
    {
        $student = Student::find($id);

        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
        ]);

        $student = Student::find($id);
        $student->code = $request->code;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->birth_place = $request->birth_place;
        $student->birth_date = $request->birth_date;

        $student->save();
        
        return redirect('/student')->with('success', 'Student Updated!');
    }













    // Membuat variable
    private $nrp = '200613013';
    private $name = 'Alifudin Nuryansyah Putra';
    private $course, $task, $quiz, $mid_term, $final;
    

    public function myCourse($course, $task, $quiz, $mid_term, $final)
    {
        // Mengisi isi variable dari inputan Route
        $this->course = $course;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_term = $mid_term;
        $this->final = $final;

        // Membuat variable grade yang diisi dengan hasil method calculateGrade
        $grade = $this->calculateGrade();

        // Return view dengan beberapa nilai
        return view('student.my_view', [
            'nrp' => $this->nrp,
            'name' => $this->name,
            'course' => $course,
            'task' => $task,
            'quiz' => $quiz,
            'mid_term' => $mid_term,
            'final' => $final,
            'grade' => $grade,
        ]);
    }

    public function calculateGrade()
    {
        // Menjumlahkan grade
        $task = $this->task * 0.1;
        $quiz = $this->quiz * 0.1;
        $mid_term = $this->mid_term * 0.3;
        $final = $this->final * 0.5;

        $grade = $task + $quiz + $mid_term + $final;

        return $grade;
    }
}
