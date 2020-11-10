<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoranController extends Controller
{
	public function index(Request $request)
	{
		if($request->has('cari')){ 
     		$data_restoran = \App\Models\restoran::where('nama_restoran','LIKE','%'.$request->cari.'%')->get(); 
     	}else {
     		$data_restoran = \App\Models\restoran::all();
     	}
		// $data_restoran= \App\Models\restoran::all();
		return view('restoran.index',['data_restoran' => $data_restoran]);
	}

	public function create(Request $request)
	{
		\App\Models\restoran::create($request->all());
		return redirect('/restoran')->with('sukses','Data berhasil disimpan!');
	}

	public function edit($id)
	{
		$restoran = \App\Models\restoran::find($id);
		return view('/restoran/edit',['restoran' => $restoran]);
	}

	public function update(Request $request,$id)
	{
		$restoran = \App\Models\restoran::find($id);
		$restoran->update($request->all());
		return redirect('/restoran')->with('sukses','Data berhasil diupdate!');
	}

	public function delete($id)
	{
		$restoran = \App\Models\restoran::find($id);
		$restoran->delete();
		return redirect('/restoran')->with('sukses','Data berhasil dihapus!');
	}

	public function listrestoran(Request $request)
	{
		if($request->has('cari')){ 
     		$data_restoran = \App\Models\restoran::where('nama_restoran','LIKE','%'.$request->cari.'%')->get(); 
     	}else {
     		$data_restoran = \App\Models\restoran::all();
     	}
		// $data_restoran= \App\Models\restoran::all();
		return view('/restoran/listrestoran',['data_restoran' => $data_restoran]);
	}

		public function profil($id)
	{
		$restoran = \App\Models\restoran::find($id);
		return view('/restoran/profil',['restoran' => $restoran]);
	}

	public function postreview(Request $request)
	{
		$request->request->add(['user_id' => auth()->user()->id]);
		$review = \App\Models\review::create($request->all());
		return redirect()->back()->with('success','Komentar berhasil ditambahkan!');
	}

		public function fasilitas(Request $request)
	{
		// $request->request->add(['user_id' => auth()->user()->id]);
		$fasilitas = \App\Models\fasilitas::create($request->all());
		return redirect()->back()->with('success','Fasilitas berhasil ditambahkan!');
	}
	public function menu(Request $request)
	{
		// $request->request->add(['user_id' => auth()->user()->id]);
		$menu = \App\Models\menu::create($request->all());
		return redirect()->back()->with('success','Menu berhasil ditambahkan!');
	}
	// public function deletefasilitas($id)
	// {
	// 	$fasilitas = \App\Models\fasilitas::find($id);
	// 	$fasilitas->delete();
	// 	return redirect()->back()->with('sukses','Data berhasil dihapus!');
	// }
}
