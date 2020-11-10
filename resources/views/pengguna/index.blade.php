@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('data_user') }}
@endsection   

@section('content')

{{--  --}}

<div class="container-fluid">

  <div class="fade-in">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
          {{-- banner sukses --}}
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{ session('sukses')}}
</div>
          @endif
          {{-- end of banner sukses --}}
          <div class="card-header"> <h1>Data pengguna</h1> <br>
            {{-- Button for Modal --}}
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                  Tambah data
                  </button>
                  <div>
                    <form class="form-inline my-2 my-lg-0 d-md-down-none" method="GET" action="/pengguna">
                      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
          </div>
        </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-hover">
             <thead class="thead-light">
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Nomor Telpon</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                  </thead>
                @foreach($data_pengguna as $pengguna)
              <tbody>
                  <tr>
                    <td><a href="/pengguna/{{$pengguna->id}}/profil">{{$pengguna->id}}</a></td>
                    <td><a href="/pengguna/{{$pengguna->id}}/profil">{{$pengguna->nama_pengguna}}</a></td>
                    <td>{{$pengguna->alamat_pengguna}}</td>
                    <td>{{$pengguna->email_pengguna}}</td>
                    <td>{{$pengguna->telp_pengguna}}</td>
                    <td class="text-center">
                      <a class="btn btn-warning btn-sm" href="/pengguna/{{$pengguna->id}}/edit">Edit</a>
                      <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal1">Delete</a></th>
                  </tr>
              </tbody>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal CREATE-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data pengguna {{$pengguna->id+1}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pengguna/create" method="POST">
          {{ csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input name="nama_pengguna" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pengguna">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Alamat</label>
              <input name="alamat_pengguna" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Pengguna">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input name="email_pengguna" type="email" class="form-control" id="exampleFormControlInput1" Placeholder="Masukkan Email Pengguna">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nomor Telpon</label>
              <input name="telp_pengguna" type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Telepon Pengguna">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- End of MODAL CREATE --}}


<!-- Modal DELETE-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="/pengguna/{{$pengguna->id}}/delete"
>Delete</a>
      </div>
    </div>
  </div>
</div>

@endsection
                {{-- end of modal --}}
