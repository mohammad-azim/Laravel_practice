<?php

namespace App\Http\Controllers;

use App\Sublist;
use Illuminate\Http\Request;

class SublistController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('layouts.sublistcreate',compact("id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([

            'name' => 'required|min:3|max:200',
            'details' => 'required|min:3|max:200',
            'priority' => 'required',
        ]);
       
        $sublists = Sublist::create($request->all());

        if($sublists){

            return redirect("/sublists/".$request->memolist_id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sublist  $sublist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sublists = Sublist::where("memolist_id",$id)->get();
        return view('layouts.sublist', compact('sublists',"id"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sublist  $sublist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sublist = Sublist::find($id);
        
        return view('layouts.sublistedit',compact("sublist"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sublist  $sublist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sublist = Sublist::find($id);

        $sublist->update($request->all());

        return redirect('sublists'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sublist  $sublist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sublist = Sublist::find($id);

        $sublist->delete();

        return back();
    }

    public function changeStatus($id)
    {
        $sublist = Sublist::find($id);
        $sublist->status = "1";
        if($sublist->save()){
            return back();
        }
    }
}