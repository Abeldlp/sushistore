<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vlog;
use App\USer;
use Auth;

class VlogsController extends Controller
{

    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $vlogs = Vlog::all();
        return view('vlogs.index', compact('vlogs'));
    }

    public function show($id){
        $vlog = Vlog::findOrFail($id);
        return view('vlogs.show', compact('vlog'));
    }

    public function edit(Vlog $vlog, $id){
        //Authorizing admin update
        $this->authorize('update', $vlog);

        $vlog = Vlog::findOrFail($id);
        return view('vlogs.edit', compact('vlog'));
    }

    public function create(Vlog $vlog){
        //Authorizing the Admin to create News feed
        $this->authorize('create', $vlog);
        return view('vlogs.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Vlog::create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
        return redirect('/vlogs');
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

    public function delete($id){
        Vlog::destroy($id);
        
        return redirect('/vlogs');
    }
}
