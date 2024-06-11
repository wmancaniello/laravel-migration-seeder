<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trainInfo = Train::all();
        // dd($trainInfo);
        return view('train', compact('trainInfo'));
    }
}
