<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;


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
}
