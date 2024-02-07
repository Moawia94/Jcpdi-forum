<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escort extends Model
{
    use HasFactory;
    protected $fillabl = ['name','email','mobile','job_title','visitor_id'];
    // protected $with =['visitor'];

    public function visitor(){
        return $this->belongsTo(Visitor::class);
    }
}
