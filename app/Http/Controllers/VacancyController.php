<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacancyController extends Controller
{
    
    public function index(){
        return view('Vacancies.index');
    }

    public function create(){
        return view('Vacancies.create');
    }

    public function store(){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function delete(){

    }
}
