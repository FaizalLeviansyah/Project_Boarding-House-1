<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dormitory;

class DormitoryController extends Controller
{
    public function index()
    {
        return view('dormitory-comparison');
    }

    public function getDorms()
    {
        $dorms = Dormitory::all();

        return response()->json($dorms);
    }
}