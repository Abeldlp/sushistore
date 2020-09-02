<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmployeesController extends Controller
{
    public function index (){
        $users = User::all();
        return view('employees.index', compact('users'));
    }
}
