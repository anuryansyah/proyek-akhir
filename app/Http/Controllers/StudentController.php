<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

    // Membuat variable
    private $nrp = '200613013';
    private $name = 'Alifudin Nuryansyah Putra';
    private $course, $task, $quiz, $mid_term, $final;


    public function index()
    {
        // $students = Student::all();

        // $students = Student::where('gender', 'P')
        //             ->orWhere('birth_place', 'Bandung')            
        //             ->get();

        // $students = Student::orderBy('name', 'desc')->get();

        // $students = Student::where('code', 'LIKE', '%7%')->get();
        
        // $students = Student::where(['gender' => 'W', 'birth_place' => 'Jakarta'])->get();
        
        // $students = Student::where('code', 'LIKE', '%2%')->where('birth_place', 'Jakarta')
        //             ->orWhere('birth_place', 'LIKE', '%u%')->where('gender', 'W')
        //             ->get();

        // $students = Student::whereMonth('birth_date', '03')->get();

        // $students = Student::take(5)->get();

        $students = Student::latest()->limit(5)->get();

        return view('student.index', ['students' => $students]);
    }

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
