<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
