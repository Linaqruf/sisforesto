@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('profil_user') }}
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('/css/material.css')}}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-6 sampul user-profile">
                            <div class="card-block text-center text-white">
{{--                                 <div class="m-b-25"> 
                                    <img src="{{ $cafe->getAvatar()}}" class="img-radius rounded-circle" alt="User-Profile-Image">
                                </div> --}}
                                <h2 class="f-w-600">{{$cafe->nama_cafe}}</h2>
                              {{--   <a href="/cafe/{{$cafe->id}}/edit" class="btn btn-warning">Edit Profil</a> --}} <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            {{--  --}}
                            <div class="card-block">
                                {{--  --}}
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Nama cafe</p>
                                        <h6 class="text-muted f-w-400">{{ $cafe->nama_cafe}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Alamat cafe</p>
                                        <h6 class="text-muted f-w-400">{{ $cafe->alamat_cafe}}</h6>
                                    </div>
                                </div>
                                {{--  --}}
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    {{--  --}}
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Jam Buka</p>
                                        <h6 class="text-muted f-w-400">{{$cafe->open}}</h6>
                                    </div>
                                
                            {{-- end of div row --}}
                                </div>
                                <div class="row">
                                    {{--  --}}
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Jam Tutup</p>
                                        <h6 class="text-muted f-w-400">{{$cafe->close}}</h6>
                                    </div>
                                
                            {{-- end of div row --}}
                                </div> 
                                {{-- end of div row --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-6">
                            {{--  --}}
                            <div class="card-block">
                                {{--  --}}
                                <h3 class="m-b-20 p-b-5 b-b-default f-w-600">Fasilitas</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                    @foreach($cafe->fasilitasCafe as $fasilitas)
                                        <h4 class="m-b-10 f-w-600">{{ $fasilitas->konten_fasilitas}}</h4>
                                        <p class="m-b-10 f-w-600"></p>
                                    @endforeach

                                    </div>

                                </div>
                            <button type="button" style="margin-top:10px;" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                  Tambah Fasilitas
                                </button>
                                {{-- end of div row --}}                        
                            </div>
                    </div>
                    <div class="col-sm-6">
                            {{--  --}}
                            <div class="card-block">
                                {{--  --}}
                                <h3 class="m-b-20 p-b-5 b-b-default f-w-600">Menu cafe</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                    @foreach($cafe->menuCafe as $menu)
                                        <h4 class="m-b-10 f-w-600">{{ $menu->menu}}</h4>
                                        <p class="m-b-10 f-w-600"></p>
                                    @endforeach

                                    </div>

                                </div>
                            <button type="button" style="margin-top:10px;" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                  Tambah Menu
                                </button>
                                {{-- end of div row --}}                        
                            </div>
                    </div>
                </div>
                </div>
                {{--  --}}
                 <div class="card user-card-full">

                    {{-- Komentar --}}
                        <div class="col-sm-12">
                            {{--  --}}
                            <div class="card-block">
                                <h1>Kolom Review</h1>
                                {{--  --}}
                                <div class="btn-group">
                                    <button class="btn btn-primary">Suka</button>
                                    <button class="btn btn-primary" id="btn-review-utama">Review</button>
                                </div>
                                <form action="/cafe/{{$cafe->id}}/profil/postreview" style="margin-top:10px; display:none;" id="review-utama" method="POST">
                                    @csrf
                                    <input type="hidden" name="cafe_id" value="{{ $cafe->id}}">
                                    <input type="hidden" name="parent" value="0">
                                    <input type="hidden" name="restoran_id" value="0">
                                    <textarea name="konten" class="form-control" id="review-utama"></textarea>
                                    <input type="submit" style="margin-top:10px;" class="btn btn-primary" value="Kirim">
                               </form>
                        </div>
                       
                    </div>
                </div>
                    <div class="card user-card-full">
                    <div class="col-sm-12">
                        <div class="card-header"><h1>Review</h1></div>
                            {{--  --}}
                            <div class="card-block">
                            @foreach($cafe->review()->orderBy('Created_at','desc')->get() as $review)
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{$review->user->pengguna->getAvatar()}}" class="img rounded-circle img-fluid"/>
                                    <p class="text-secondary text-center">{{$review->created_at->diffforhumans()}}</p>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$review->user->pengguna->nama_pengguna}}</strong></a>
                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p>{{$review->konten}}</p>
                                </div>
                            </div>
                            @endforeach


                                {{-- <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="{{$reviewcafe->user->getAvatar()}}" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Marco </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                {{$reviewcafe->konten}}
                              </p>
                          </div>              
                        </div>
                      </li> --}}

{{--                                  <li>
                        <img src="{{$reviewcafe->user->getAvatar()}}" width="20px"class="rounded-circle">
                        <p>
                            <a href="#"></a>{{$reviewcafe->konten}}
                            <span class="timestamp">20 MINUTES AGO</span></p>
                        </li> --}}

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal fasilitas--}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fasilitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cafe/{{$cafe->id}}/profil/fasilitas" method="POST">
    @csrf
        <input type="hidden" name="cafe_id" value="{{ $cafe->id}}">
        <input type="hidden" name="parent" value="0">
      
        <label for="exampleFormControlInput1">Fasilitas</label>
        <input type="text" name="konten_fasilitas" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Fasilitas">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>  
      </div>
      </form>
    </div>
  </div>
</div>
{{--  --}}

{{-- modal fasilitas--}}
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Fasilitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cafe/{{$cafe->id}}/profil/menu" method="POST">
    @csrf
        <input type="hidden" name="cafe_id" value="{{ $cafe->id}}">
        <input type="hidden" name="parent" value="0">
        <label for="exampleFormControlInput2">Menu cafe</label>
        <input type="text" name="menu" class="form-control" id="exampleFormControlInput2" placeholder="Masukkan Menu">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>  
      </div>
      </form>
    </div>
  </div>
</div>
{{--  --}}


@endsection

@section('footer')
            <script>
                $(document).ready(function(){
                        $('#btn-review-utama').click(function(){
                        $('#review-utama').toggle(1000);
                        });
                });
            </script>
@endsection
