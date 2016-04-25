<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Publication;

class PublicationController extends Controller
{
    public function index()
    {
      $pubs = Publication::all();

      return view('static.publication')->with('pubs', $pubs);
    }

    public function show($slug)
    {
      $pub = Publication::where('slug',$slug)->first();

      return view('dynamic.publication')->with('pub', $pub);
    }
}
