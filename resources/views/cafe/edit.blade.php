@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('edit_cafe') }}
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
          <div class="card-header"> <h1>Edit Data Cafe</h1>
            {{-- Button for Modal --}}
          </div>
          <div class="card-body">
               <form action="/cafe/{{$cafe->id}}/update" method="POST">
          {{ csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama Cafe</label>
              <input name="nama_cafe" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Cafe" value="{{$cafe->nama_cafe}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Alamat Cafe</label>
              <input name="alamat_cafe" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Cafe" value="{{$cafe->alamat_cafe}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Jam Buka</label>
              <input name="open" type="time" class="form-control" id="exampleFormControlInput1" value="{{$cafe->open}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Jam Tutup</label>
              <input name="close" type="time" class="form-control" id="exampleFormControlInput1" value="{{$cafe->close}}">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" href="/cafe">Close</button>
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
