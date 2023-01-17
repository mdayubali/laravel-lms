<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index(){
        return view('course.curriculum.index');
    }
    public function show($id){
        // dd($id);
        return view('course.curriculum.show',[
            'curriculum_id' => $id
        ]);
    }
    public function edit($id){
        return view('course.curriculum.edit',['id'=>$id]);
    }
    public function store(){
        // return view();
    }
    public function destroy(){
        // return view();
    }
}
