<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Shift;

class ShiftsController extends Controller
{
    public function show ($id){
        $user = User::findOrFail($id);
        return view('shifts.show', compact('user'));
    }

    public function create(){
        $users = User::all();
        return view('shifts.create', compact('users'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'user_id' => '',
            'monday' => '',
            'tuesday' => '',
            'wednesday' => '',
            'thursday' => '',
            'friday' => '',
        ]);

        Shift::create($data);

        return redirect('/shift/'.$data['user_id']);
    }
}
