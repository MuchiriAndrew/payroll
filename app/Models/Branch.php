<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['branchName'];

    //relationship to employee
    public function employee() {
        return $this->hasMany(Employee::class, 'id');
    }

}
