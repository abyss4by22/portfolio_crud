<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view("backend.backend");
    }
    public function roles(){
        $roles = Role::all();
        return view("backend.roles.edit" ,compact("roles"));
    }
}
