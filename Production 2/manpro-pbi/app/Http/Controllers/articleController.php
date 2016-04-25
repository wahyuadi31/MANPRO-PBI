<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class articleController extends Controller
{
    public function create ($value='')
    {
      // if user can post i.e. user is admin or author
      if($request->user()->can_post())
      {
        return view('posts.create');
      }
      else
      {
        return redirect('/')->withErrors('You have not sufficient permissions for writing post');
      }
    }
}
