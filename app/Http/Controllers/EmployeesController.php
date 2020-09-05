<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class EmployeesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index (){
        $users = User::all();
        return view('employees.index', compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('employees.edit', compact('user'));
    }

    public function update(Request $request, $id){
        

        $data = $request->validate([
            'position' => 'required',
            'profile_image' => ''
        ]);

        if($request->profile_image){
            $imagePath = $request->profile_image->store('images', 'public');
            Auth::user()->employee->update(array_merge($data, ['profile_image' => $imagePath]));
        } else {
            Auth::user()->employee->update($data);
        }

        return redirect('/employees');
    }
}
