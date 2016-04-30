<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use View;
use Redirect;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(!isset($section)){
        $section = "#welcome";
      }
      return View::make('Static.home')->with('scroll','$section');
      //return view('Static.home');
    }
    public function hashtag($section)
    {
      return Redirect::to(route('home').$section)->with('scroll',$section);
    }
}
