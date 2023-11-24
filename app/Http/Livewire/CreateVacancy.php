<?php

namespace App\Http\Livewire;

use App\Models\Salary;
use App\Models\Category;
use Livewire\Component;

class CreateVacancy extends Component
{
    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();
        return view('livewire.create-vacancy',['salaries'=> $salaries,'categories'=>$categories]);
    }
}
