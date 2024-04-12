<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    use HasFactory;

    public $guarded = [];

    public function subject(){
        return $this->belongsTo(Subject::class);
     }
     public function class(){
        return $this->belongsTo(Classes::class);
     }

}