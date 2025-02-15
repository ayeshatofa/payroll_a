<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'emp_id';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table = 'employees';
    protected $fillable = ['name', 'address', 'date_of_join'];
}
