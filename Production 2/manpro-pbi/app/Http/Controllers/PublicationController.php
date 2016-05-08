<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Publication;
use file;

class PublicationController extends Controller
{
    public function index()
    {
      $pubs = Publication::all();

      return view('static.publication')->with('pubs', $pubs);
    }

    //not finished
    public function download($slug)
    {
      $pub = Publication::where('slug',$slug)->first();
      $file = './uploads/pdf/publikasi/'.$pub->Filename; // or wherever you have stored your PDF files
      return response()->download($file);
    }

    public function show($slug)
    {
      $pub = Publication::where('slug',$slug)->first();
      return view('dynamic.publication')->with('pub', $pub);
    }
}
