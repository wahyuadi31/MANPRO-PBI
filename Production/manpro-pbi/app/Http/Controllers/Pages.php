<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

//controller untuk pages dari halaman website
class Pages extends BaseController{

    /*function index
      mereturn homepage dari website
    */
    public function index(){
        return view('home');
    }

    public function articles(){
      return view('artikel');
    }

}
?>
