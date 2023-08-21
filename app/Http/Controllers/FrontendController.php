<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Name;
use App\Models\Role;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $name = Name::all();
        $info = Info::all();
        $roles = Role::all();
        return view("index" , compact("name","info","roles"));
        
    }
}
