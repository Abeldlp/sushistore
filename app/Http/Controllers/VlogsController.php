<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vlog;

class VlogsController extends Controller
{
    public function index(){
        $vlogs = Vlog::all();
        return view('vlogs.index', compact('vlogs'));
    }

    public function show($id){
        $vlog = Vlog::findOrFail($id);
        return view('vlogs.show', compact('vlog'));
    }

    public function edit($id){
        $vlog = Vlog::findOrFail($id);
        return view('vlogs.edit', compact('vlog'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $vlog = Vlog::findOrFail($id);
        $vlog->update($data);
        return redirect('/vlogs/'.$vlog->id);
    }
}
