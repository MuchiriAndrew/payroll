<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phoneNo', 'email', 'branchID', 'departmentID', 'salary', 'isDisabled?', 'document'];
    protected $table = 'employees';

    //relationship to branch
    public function branch() {
        return $this->belongsTo(Branch::class, 'branchID');
    }

    //relationship to department
    public function department() {
        return $this->belongsTo(Department::class, 'departmentID');
    }
}
