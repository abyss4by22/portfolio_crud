<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index(){
        $name = Name::all();
        return view("index" , compact("name"));
    }
}
