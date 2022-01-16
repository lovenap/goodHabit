<?php

namespace App\Http\Controllers;

use App\Sheet;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(Sheet $sheet)
    {
        return view('edits/index')->with(['sheets' => $sheet->get()]);  
    }
}
