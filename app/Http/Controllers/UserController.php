<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
	{
		if($request->has('cari')){ 
     		$data_user = \App\Models\profile::where('name','LIKE','%'.$request->cari.'%')->get(); 
     	}else {
     		$data_user = \App\Models\profile::all();
     	}
		// $data_user= \App\Models\users::all();
		return view('user.index',['data_user' => $data_user]);
	}

	public function create(Request $request)
	{
		\App\Models\profile::create($request->all());
		return redirect('/user')->with('sukses','Data berhasil disimpan!');
	}

	public function edit($id)
	{
		$user = \App\Models\profile::find($id);
		return view('/user/edit',['user' => $user]);
	}

	public function update(Request $request,$id)
	{
		$user = \App\Models\profile::find($id);
		$user->update($request->all());
		return redirect('/user')->with('sukses','Data berhasil diupdate!');
	}

	public function delete($id)
	{
		$user = \App\Models\profile::find($id);
		$user->delete();
		return redirect('/user')->with('sukses','Data berhasil dihapus!');
	}
}
