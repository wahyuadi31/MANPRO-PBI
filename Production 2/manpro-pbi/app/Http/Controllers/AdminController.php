<?php

namespace App\Http\Controllers;

use App\Publication;
use Carbon\carbon;
use App\DataDosen;
use Input;
use Validator;
use Session;
use  Illuminate\Http\Request;


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

      $noimage = false;
      if($request->hasFile('image')){
        $file = array('image' => $request-> file('image'));
        $rules = array(
          'image' => 'required|image',
          'jabatan' => 'required',
          'nama' => 'required',
          'profile' => 'required',
        );
        $noimage = false;
      }else{
        $noimage = true;
        $rules = array(
          'jabatan' => 'required',
          'nama' => 'required',
          'profile' => 'required',
        );
      }

      $this->validate($request, $rules);
        $data = $request->all();
        if($noimage){
          $data['image'] = 'no image';
        }else {
          if ($request->file('image')->isValid()) {
            $destinationPath = 'uploads\img\dosen'; // upload path
            $extension = $request-> file('image')->getClientOriginalExtension(); // getting image extension
            $name = $request->input('nama');
            $fileName = $name.'.'.$extension; // renameing image
            $request->file('image')->move($destinationPath, $fileName);
            $data['image'] = $fileName;
          }else{
              Session::flash('error', 'uploaded file is not valid');
              return redirect()->back();
          }
        }

        DataDosen::create($data);
        Session::flash('success', 'Data Added');
        return redirect()->back();
    }


}
