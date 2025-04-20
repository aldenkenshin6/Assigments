<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function employees()
{
    return $this->hasMany(Employee::class, 'job_id');
}

}
