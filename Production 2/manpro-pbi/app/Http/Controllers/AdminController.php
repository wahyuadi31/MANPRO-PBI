<?php

namespace App\Http\Controllers;

use App\Publication;
use Carbon\carbon;
use App\DataDosen;
use Input;
use Validator;
use Session;
use  Illuminate\Http\Request;
use File;


class AdminController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }

    public function index(){
      return view('admin.general');
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
      return view('admin.data_dosen.data_dosen')->with('data', $data);
    }

    public function editDosen($id){
      $data = DataDosen::findOrFail($id);
      return view('admin.data_dosen.edit_dosen')->withData($data);
    }
    public function updateDosen(Request $request, $id){
      $data = DataDosen::findOrFail($id);
      $reqs = $request->all();

      $noimage = false;
      if(strcmp($reqs['changeImage'] , 'false')){
        $rules = array(
          'image' => 'required|image',
          'jabatan' => 'required',
          'nama' => 'required',
          'profile' => 'required',
        );
      }else{
        $rules = array(
          'jabatan' => 'required',
          'nama' => 'required',
          'profile' => 'required',
        );
        $noimage = true;
      }
      $this->validate($request, $rules);
      if($noimage){

      }else {
        $oldfile = 'public/uploads/img/dosen/'.$data->image;
        if($request->file('image')->isValid()) {
          $destinationPath = 'uploads\img\dosen'; // upload path
          $extension = $request-> file('image')->getClientOriginalExtension(); // getting image extension
          $name = $request->input('nama');
          $vowels = array('-', ':');
          $time = str_replace($vowels, "", Carbon::now());
          $fileName = $name.$time.'.'.$extension; // renameing image
          $request->file('image')->move($destinationPath, $fileName);
          $data['image'] = $fileName;
        }else{
            Session::flash('error', 'uploaded file is not valid');
            return redirect()->back();
        }
          File::delete($oldfile);
      }
      $data['id'] = $id;
      $data['nama'] = $reqs['nama'];
      $data['jabatan'] = $reqs['jabatan'];
      $data['profile'] = $reqs['profile'];
      $data->save();
      Session::flash('success', 'Data Updated');
      return redirect( route('data_dosen'));
    }

    //this is test function
    public function FunctionName()
    {
      return Carbon::now();
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
            $vowels = array('-', ':');
            $time = str_replace($vowels, "", Carbon::now());
            $fileName = $name.$time.'.'.$extension; // renameing image
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

    public function deleteDosen($id)
    {
      $data = DataDosen::findOrFail($id);
      return view('admin.data_dosen.confirm_delete_dosen')->withData($data);
    }

    public function destroyDosen($id)
    {
      $data = DataDosen::findOrFail($id);
      $data->delete();
    }
}
