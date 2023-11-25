<?php

namespace App\Http\Livewire;

use App\Models\Salary;
use App\Models\Category;
use App\Models\Vacancy;
use Livewire\Component;

class CreateVacancy extends Component
{
    public $title;
    public $salary;
    public $category;
    public $company;
    public $apply_before;
    public $description;
    public $location;

    protected $rules = [
        'title' => 'required|string',
        'salary' => 'required',
        'category' => 'required',
        'company' => 'required',
        'apply_before' => 'required',
        'description' => 'required',
        'location' => 'required'
    ];
    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();
        return view('livewire.create-vacancy',['salaries'=> $salaries,'categories'=>$categories]);
    }

    public function createVacancy(){
        $datos = $this->validate();

        //Crear la vacante
        Vacancy::create([
            'title' => $datos['title'],
            'salary_id' => $datos['salary'],
            'category_id' => $datos['category'],
            'company' => $datos['company'],
            'apply_before' => $datos['apply_before'],
            'description' => $datos['description'],
            'location' => $datos['location'],
            'user_id' => auth()->user()->id,
        ]);

        //Crear un mensaje

        session()->flash('mensaje', 'La vacante se publico correctamente'); 
        //Redireccionar al usuario
        return redirect()->route('Vacancies.index');
    }
}
