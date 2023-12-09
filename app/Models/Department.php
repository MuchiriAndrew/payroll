<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['departmentName'];
    protected $table = 'departments';

    //relationship to employee
    public function employee() {
        return $this->hasMany(Employee::class, 'id');
    }
}
