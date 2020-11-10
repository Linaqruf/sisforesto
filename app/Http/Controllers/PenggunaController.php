<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PenggunaController extends Controller
{
    public function index(Request $request)
	{
		if($request->has('cari')){ 
     		$data_pengguna = \App\Models\pengguna::where('nama_pengguna','LIKE','%'.$request->cari.'%')->get(); 
     	}else {
     		$data_pengguna = \App\Models\pengguna::all();
     	}
		// $data_pengguna= \App\Models\pengguna::all();
		return view('pengguna.index',['data_pengguna' => $data_pengguna]);
	}

	public function create(Request $request)
	{

		// insert ke table user
		$user = new \App\Models\user;
		$user->role = 'user';
		$user->name = $request->nama_pengguna;
		$user->email = $request->email_pengguna;
		$user->password = bcrypt('rahasia');
		$user->remember_token =  Str::random(60);;
		$user->save();

		// insert ke table pengguna
		$request->request->add(['user_id' => $user->id]);
		$pengguna = \App\Models\pengguna::create($request->all());
		return redirect('/pengguna')->with('sukses','Data berhasil disimpan!');
	}

	public function edit($id)
	{
		$pengguna = \App\Models\pengguna::find($id);
		return view('/pengguna/edit',['pengguna' => $pengguna]);
	}

	public function update(Request $request,$id)
	{

		$pengguna = \App\Models\pengguna::find($id);
		$pengguna->update($request->all());
		// if($request->hasFile('avatar')){
		//  $request->hasFile('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
		// 	$pengguna->avatar = $request->file('avatar')->getClientOriginalName();
		// 	$pengguna->save();
		// }
		return redirect('/pengguna')->with('sukses','Data berhasil diupdate!');
	}

	public function delete($id)
	{
		$pengguna = \App\Models\pengguna::find($id);
		$pengguna->delete();
		return redirect('/pengguna')->with('sukses','Data berhasil dihapus!');
	}

	public function profil($id)
	{
		$pengguna = \App\Models\pengguna::find($id);
		return view('/pengguna/profil',['pengguna' => $pengguna]);
	}
	public function uploadavatar(Request $request, $id)
	{
	if ($request->hasFile('avatar')) {
		$filename = $request->avatar->getClientOriginalName();
		$request->avatar->storeAs('images', $filename, 'public');
		\App\Models\pengguna::find($id)->update(['avatar' => $filename]);
	}
		// if($request->hasFile('avatar')){
		//  	$request->hasFile('avatar')->storeAs('images/',$request->file('avatar')->getClientOriginalName());
		// 	$pengguna->avatar = $request->file('avatar')->getClientOriginalName();
		// 	$pengguna->save();
		// }
	return redirect()->back();

	}
	public function profilsaya()
	{
		// $user = \App\Models\pengguna::find($id);

		// if($user) {
		// 	return view('pengguna/profilsaya',compact(['pengguna']))->withUser($user);
		// } else {
		// 	return redirect()->back();
		// }
		$pengguna = auth()->user()->pengguna;
		return view('pengguna/profilsaya',compact(['pengguna']));
	}

	public function signup()
	{
		return view('auth.signup');
	}

	public function postregister(Request $request)
	{
		// dd($request->all());
		$user = new \App\Models\user;
		$user->role = 'user';
		$user->name = $request->nama_pengguna;
		$user->email = $request->email_pengguna;
		$user->password = bcrypt($request->password);
		$user->remember_token =  Str::random(60);;
		$user->save();

		// insert ke table pengguna
		$request->request->add(['user_id' => $user->id]);
		$pengguna = \App\Models\pengguna::create($request->all());

		return redirect('/login')->with('sukses','Akun anda telah siap, silakan login!');
	}

}
