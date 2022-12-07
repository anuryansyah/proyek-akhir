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
        $students = Student::all();

        foreach ($students as $student) {
            echo "<br />Nama: " . $student->name;
            echo "<br />NRP: " . $student->code;
            echo "<br />Kelas: " . $student->group;
            echo "<br />";
        }
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
