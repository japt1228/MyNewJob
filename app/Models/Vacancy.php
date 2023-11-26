<?php

namespace App\Models;

use App\Models\Salary;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
    use HasFactory;

    protected $dates = ['apply_before'];
    
    protected $fillable = [
        'title',
        'salary_id',
        'category_id',
        'company',
        'apply_before',
        'description',
        'location',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function salary(){
        return $this->belongsTo(Salary::class);
    }
}
