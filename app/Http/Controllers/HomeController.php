<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\DB;
use App;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.list');
    }

    /**
     * get store image
     */
    public function showfilepage(Request $request)
    {
        return view('/uploadfile');
    }

    public function uploadfile(UploadRequest $request)
    {
        $path = Storage::putFile('public\users', $request->file('image'));

        return $path;
    }

    public function tailwindcsspage()
    {
        return view('/tailwindcss.tailwind');
    }

    public function QueryBuilder()
    {
        // return DB::table('users')->get();

        // return DB::table('users')->count();

        // return DB::table('users')->where('name','azim')->get();

        // return DB::table('users')->insert([
        //     'name'=>'fatima',
        //     'email'=>'fatima@gmial.com',
        //     'password'=> 222222222
        // ]);


        // return DB::table('users')->where('name','azim')->update([
        //     'email'=>'azimjan@email.com'
        // ]);

        return DB::table('users')->where('name','azim')->delete();
    }

    public function downloadPDF()
    {  
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>WELCOME OT PDF GENERATOR PAGE</h1>');
        return $pdf->stream();

    }
}
