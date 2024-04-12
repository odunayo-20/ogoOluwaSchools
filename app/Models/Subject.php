<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $guarded = [];

    public function subject(){
        $this->belongsTo(AssignSubject::class);

    }
}