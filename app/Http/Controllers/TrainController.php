<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    //
    public function train(){

        $trains = Train::all();


        return view('trains', compact('trains'));
    }
}
