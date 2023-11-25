<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'title',
        'description',
        'location',
        'salary_id',
        'category_id',
        'postDate',
        'typePosition',
        'user_id',
    ];
}
