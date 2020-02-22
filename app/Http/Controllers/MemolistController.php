<?php

namespace App\Http\Controllers;

use App\Memolist;
use App\Http\Requests\MemoRequest;

class MemolistController extends Controller
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
        $lists = Memolist::all();

        return view('layouts.list', compact('lists'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemoRequest $request)
    {
        $list = Memolist::create($request->all());

        if($list){

            return redirect("/lists");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Memolist  $memolist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memolist  $memolist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Memolist::find($id);
        
        return view('layouts.edit',compact("list"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memolist  $memolist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = Memolist::find($id);

        $list->update($request->all());

        return redirect("lists"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memolist  $memolist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Memolist::find($id);

        $list->delete();

        return back();
    }
}
