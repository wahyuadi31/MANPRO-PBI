<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class userController extends Controller
{
  public function getLogin()
  {
    if(Auth::user())
    {
      return Auth::user()->name;
    }
  }
}
