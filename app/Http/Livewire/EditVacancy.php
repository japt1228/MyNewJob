<?php

namespace App\Http\Livewire;

use App\Models\Salary;
use App\Models\Vacancy;
use Illuminate\Support\Carbon;
use Livewire\Component;
use App\Models\Category;

class EditVacancy extends Component
{
    public $vacancy_id;
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
    public function mount(Vacancy $vacancy){
        $this->vacancy_id = $vacancy->id;
        $this->title = $vacancy->title;
        $this->salary = $vacancy->salary_id;
        $this->category = $vacancy->category_id;
        $this->company = $vacancy->company;
        $this->apply_before = Carbon::parse($vacancy->apply_before)->format('Y-m-d');
        $this->description = $vacancy->description;
        $this->location = $vacancy->location;

    }

    public function editVacancy(){
        $datos = $this->validate();

        //Encontrat Vacante a editar
        $vacancy = Vacancy::find($this->vacancy_id);

        //Asignar los valores
        $vacancy->title = $datos['title'];
        $vacancy->salary_id = $datos['salary'];
        $vacancy->category_id = $datos['category'];
        $vacancy->company = $datos['company'];
        $vacancy->apply_before = $datos['apply_before'];
        $vacancy->description = $datos['description'];
        $vacancy->location = $datos['location'];
        //Guardar la vacante
        $vacancy->save();
        //Redireccionar
        session()->flash('mensaje', 'La vacante se actualizó correctamente');
        
        return redirect()->route('Vacancies.index');
    }
    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();
        return view('livewire.edit-vacancy',['salaries'=> $salaries,'categories'=>$categories]);
    }
}
