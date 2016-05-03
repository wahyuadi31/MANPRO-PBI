<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use Carbon\carbon;
use App\DataDosen;

class AdminController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }

    public function index(){
      return view('admin.article');
    }

    public function createPublication()
    {
        return view('dynamic.createPublication');
    }

    public function storePublication()
    {
        $input = Request::all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        $input['slug'] = Carbon::now()->year();

        return $input;
    }

    public function getLogout(){
     auth()->guard()->logout();
     return redirect()->route('home');
    }

    public function getDataDosen(){
      $data = DataDosen::all();
      return view('admin.data_dosen')->with('data', $data);
    }

    public function tambahDosen(Request $request){
      $data = $request->all();
        DataDosen::create($data);
      return redirect()->back();
    }


}
