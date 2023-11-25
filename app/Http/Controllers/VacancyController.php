<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
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

    public function edit(Vacancy $vacante){
        return view('Vacancies.edit', [
            'vacantes' => $vacante
        ]);
    }

    public function delete(){

    }
}
