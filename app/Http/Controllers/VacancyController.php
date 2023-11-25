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

    public function edit(Vacancy $vacancy){
        
        $this->authorize('update', $vacancy);
        return view('Vacancies.edit', [
             'vacancy' => $vacancy
        ]);
    }

    public function delete(){

    }
}
