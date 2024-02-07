<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable=['name','statuse','email','job_title', 'company','mobile','lang'];
    // protected $with =['escorts'];

    public function escorts(){
        return $this->hasMany(Escort::class);
    }
}
