@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('edit_user') }}
@endsection

@section('content')

{{--  --}}

<div class="container-fluid">

  <div class="fade-in">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          {{-- banner sukses --}}
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{ session('sukses')}}
</div>
          @endif
          {{-- end of banner sukses --}}
          <div class="card-header"> <h1>Edit Data Pengguna</h1>
            {{-- Button for Modal --}}
          </div>
          <div class="card-body">
               <form action="/pengguna/{{$pengguna->id}}/update" method="POST">
          {{ csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input name="nama_pengguna" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pengguna" value="{{$pengguna->nama_pengguna}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Alamat</label>
              <input name="alamat_pengguna" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Pengguna" value="{{$pengguna->alamat_pengguna}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input name="email_pengguna" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email Pengguna"value="{{$pengguna->email_pengguna}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nomor Telepon</label>
              <input name="telp_pengguna" type="tel" placeholder="Masukkan Nomor Telepon Pengguna" class="form-control" id="exampleFormControlInput1" value="{{$pengguna->telp_pengguna}}">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
                {{-- end of modal --}}
