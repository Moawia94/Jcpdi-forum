<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function showDataByEmail($email){
        $visitor = Visitor::where('email' , $email)->first();
        if(! $visitor){
            return ('erro');
        }
        return view('attendence' , ['visitor' => $visitor]);
    }
}
