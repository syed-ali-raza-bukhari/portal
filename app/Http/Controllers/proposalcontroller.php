<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;

class proposalcontroller extends Controller
{
    public function index(){
        return view('proposals.index', ['proposals'=> Proposal::get() ]);
    }
    public function create(){
        return view('proposals.create');
    }
    public function store(Request $request){
        
        //Validate Data

        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'cast' => 'required',
            'sect' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'marital_status' => 'required',
            'disability' => 'required',
            'skin_tone' => 'required',
            'others' => 'required', 
        ]);
        
        //Proposal Data Insert
        
        $proposal = new Proposal;
        $proposal->name = $request->name;
        $proposal->gender = $request->gender;
        $proposal->dob = $request->dob;
        $proposal->cast = $request->cast;
        $proposal->sect = $request->sect;
        $proposal->height = $request->height;
        $proposal->weight = $request->weight;
        $proposal->m_status = $request->marital_status;
        $proposal->disabilty_conf = $request->disability;
        $proposal->color = $request->skin_tone;
        $proposal->others = $request->others;

        $proposal->save();

        return back()->withSuccess('Proposal Added Successfuly....!!!!');
    }

    public function edit($id){
        $proposal = Proposal::where('id' ,$id)->first();

        return view('proposals.edit', ['proposal'=> $proposal]);

    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'cast' => 'required',
            'sect' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'marital_status' => 'required',
            'disability' => 'required',
            'skin_tone' => 'required',
            'others' => 'required', 
        ]);
        
        $proposal = Proposal::where('id' ,$id)->first();

        $proposal->name = $request->name;
        $proposal->gender = $request->gender;
        $proposal->dob = $request->dob;
        $proposal->cast = $request->cast;
        $proposal->sect = $request->sect;
        $proposal->height = $request->height;
        $proposal->weight = $request->weight;
        $proposal->m_status = $request->marital_status;
        $proposal->disabilty_conf = $request->disability;
        $proposal->color = $request->skin_tone;
        $proposal->others = $request->others;

        $proposal->save();

        return back()->withSuccess('Proposal Updated....!!!!');
    }
    public function distroy($id){
        $proposal = Proposal::where('id', $id)->first();
        $proposal->delete();
        return back()->withSuccess('Proposal Deleted....!!!!');
    }
}
