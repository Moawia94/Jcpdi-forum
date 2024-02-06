<?php

namespace App\Http\Controllers;

use App\Models\Visitors;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function showDataByEmail($email){
        $visitor = Visitors::where('email' , $email)->first();
        if(! $visitor){
            return ('erro');
        }
        return view('attendence' , ['visitor' => $visitor]);
    }
}
