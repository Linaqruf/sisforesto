<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
	public function index(Request $request)
	{
		if($request->has('cari')){ 
     		$data_cafe = \App\Models\cafe::where('nama_cafe','LIKE','%'.$request->cari.'%')->get(); 
     	}else {
     		$data_cafe = \App\Models\cafe::all();
     	}
		return view('cafe.index',['data_cafe' => $data_cafe]);
	}

	public function create(Request $request)
	{
		\App\Models\cafe::create($request->all());
		return redirect('/cafe')->with('sukses','Data berhasil disimpan!');
	}

	public function edit($id)
	{
		$cafe = \App\Models\cafe::find($id);
		return view('/cafe/edit',['cafe' => $cafe]);
	}

	public function update(Request $request,$id)
	{
		$cafe = \App\Models\cafe::find($id);
		$cafe->update($request->all());
		return redirect('/cafe')->with('sukses','Data berhasil diupdate!');
	}

	public function delete($id)
	{
		$cafe = \App\Models\cafe::find($id);
		$cafe->delete();
		return redirect('/cafe')->with('sukses','Data berhasil dihapus!');
	}
	public function listcafe(Request $request)
	{
		if($request->has('cari')){ 
     		$data_cafe = \App\Models\cafe::where('nama_cafe','LIKE','%'.$request->cari.'%')->get(); 
     	}else {
     		$data_cafe = \App\Models\cafe::all();
     	}
		return view('cafe.listcafe',['data_cafe' => $data_cafe]);
	}
		public function profil($id)
	{
		$cafe = \App\Models\cafe::find($id);
		return view('/cafe/profil',['cafe' => $cafe]);
	}

	public function postreview(Request $request)
	{
		$request->request->add(['user_id' => auth()->user()->id]);
		$review = \App\Models\review::create($request->all());
		return redirect()->back()->with('success','Komentar berhasil ditambahkan!');
	}

		public function fasilitasCafe(Request $request)
	{
		// $request->request->add(['user_id' => auth()->user()->id]);
		$fasilitas = \App\Models\fasilitasCafe::create($request->all());
		return redirect()->back()->with('success','Fasilitas berhasil ditambahkan!');
	}
	public function menuCafe(Request $request)
	{
		// $request->request->add(['user_id' => auth()->user()->id]);
		$menu = \App\Models\menuCafe::create($request->all());
		return redirect()->back()->with('success','Menu berhasil ditambahkan!');
	}
}
