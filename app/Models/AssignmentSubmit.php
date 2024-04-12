<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentSubmit extends Model
{
    use HasFactory;

    public $guarded = [];

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

}
