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
    public $postDate;
    public $description;
    public $location;
    public $typePosition;

    protected $rules=[
        'title' => 'required',
        'salary' => 'required',
        'category' => 'required',
        'company' => 'required',
        'postDate' => 'required',
        'description' => 'required',
        'location' => 'required',
        'typePosition' => 'required'
    ];

    public function createVacancy(){
        $data = $this->validate();

        Vacancy::create([
            'company_id'=> $data['company'],
            'title'=> $data['title'],
            'description'=> $data['description'],
            'location'=> $data['location'],
            'salary_id'=> $data['salary'],
            'category_id'=> $data['category'],
            'postDate'=> $data['postDate'],
            'typePosition'=> $data['typePosition'],
            'user_id' => auth()->user()->id,
        ]);
    }

    

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();
        return view('livewire.create-vacancy',['salaries'=> $salaries,'categories'=>$categories]);
    }
}
