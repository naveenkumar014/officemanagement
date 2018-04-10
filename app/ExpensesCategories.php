<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensesCategories extends Model
{
    protected $fillable = [
        'name', 'created_by_id',
    ];
}
