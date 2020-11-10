@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('profil_user') }}
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('/css/material.css')}}">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-12 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> 
                                    <img src="{{ $pengguna->getAvatar()}}" class="img-radius rounded-circle" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600">{{$pengguna->nama_pengguna}}</h6>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".cd-example-modal-lg">Edit Profil</button>
                              {{--   <a href="/pengguna/{{$pengguna->id}}/edit" class="btn btn-warning">Edit Profil</a> --}} <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Alamat</p>
                                        <h6 class="text-muted f-w-400">{{ $pengguna->alamat_pengguna}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{ $pengguna->email_pengguna}}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Nomor Telepon</p>
                                        <h6 class="text-muted f-w-400">{{$pengguna->telp_pengguna}}</h6>
                                    </div>
                                    
                                    
                                  <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Ubah Foto Profil</p>
                                        <form action="/pengguna/{{$pengguna->id}}/uploadavatar" enctype="multipart/form-data" method="POST">
                                            @csrf
                                    <div class="input-group mb-3">
                                      <div class="custom-file">
                                        <input type="file" name="avatar" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                      </div>
                                      <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                      </div>
                                    </div>
                                </div>
                            </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<div class="modal fade cd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
 {{--  --}}
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-12 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <form action="/pengguna/{{$pengguna->id}}/update" enctype="multipart/form-data" method="POST">
                                    @csrf
                                <div class="m-b-25"> 
                                    <img src="{{ $pengguna->getAvatar()}}" class="img-radius rounded-circle" alt="User-Profile-Image">
                                </div>

                                <h6 class="f-w-600">Ubah Nama Pengguna</h6>
                                <input name="nama_pengguna" type="text" class="form-control col-3 mx-auto"  placeholder="Masukkan Nama Pengguna" value="{{$pengguna->nama_pengguna}}">
                                <br>
                                <button type="submit" class="btn btn-primary">Update</button>

                             {{--    <a href="/pengguna/{{$pengguna->id}}/edit" class="btn btn-warning">Edit Profil</a>  --}}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card-block">
                                  
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Alamat</p>
                                        <div class="form-row">
                                        <div class="col">
                                            <input name="alamat_pengguna" type="text" class="form-control text-muted" id="exampleFormControlInput1" placeholder="Masukkan Alamat Pengguna" value="{{$pengguna->alamat_pengguna}}">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <div class="form-row">
                                        <div class="col">
                                            <input name="email_pengguna" type="email" class="form-control text-muted" id="exampleFormControlInput1" placeholder="Masukkan Email" value="{{$pengguna->email_pengguna}}">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Nomor Telepon</p>
                                        <div class="form-row">
                                        <div class="col">
                                            <input name="telp_pengguna" type="tel" class="form-control text-muted" id="exampleFormControlInput1" placeholder="Masukkan Alamat Pengguna" value="{{$pengguna->telp_pengguna}}">
                                        </div>
                                    </div>

                                </div> 
                               
                                    </div>
                            </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

 {{--  --}}
    </div>

@endsection

         
       {{--        <input name="email_pengguna" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email Pengguna"value="{{$pengguna->email_pengguna}}">
              <input name="telp_pengguna" type="tel" placeholder="Masukkan Nomor Telepon Pengguna" class="form-control" id="exampleFormControlInput1" value="{{$pengguna->telp_pengguna}}"> --}}