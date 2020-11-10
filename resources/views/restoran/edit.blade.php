@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('edit_restoran') }}
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
          <div class="card-header"> <h1>Edit Data Restoran</h1>
            {{-- Button for Modal --}}
          </div>
          <div class="card-body">
               <form action="/restoran/{{$restoran->id}}/update" method="POST">
          {{ csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama Restoran</label>
              <input name="nama_restoran" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Restoran" value="{{$restoran->nama_restoran}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Alamat Restoran</label>
              <input name="alamat_restoran" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Restoran" value="{{$restoran->alamat_restoran}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Jam Buka</label>
              <input name="open" type="time" class="form-control" id="exampleFormControlInput1" value="{{$restoran->open}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Jam Tutup</label>
              <input name="close" type="time" class="form-control" id="exampleFormControlInput1" value="{{$restoran->close}}">
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
