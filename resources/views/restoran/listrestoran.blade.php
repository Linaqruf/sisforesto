@extends('layouts.app')
@section('content')

<div class="container-fluid">
  <div class="fade-in">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
        	          <div class="card-header"> <h1>Daftar Restoran</h1>
        	           </div>
        	          <div class="card-body">
				<div class="row">
					@foreach($data_restoran as $restoran)
						<div class="col-sm-6 col-lg-3">
							<div class="card text-white bg-gradient-info" href="#">
								<img src= "{{ asset('/storage/images/restoran.jpeg')}}" width="50%"  class="card-img-top" alt="...">
								<div class="card-body justify-content-between align-items-start">
									{{--     <h5 class="card-title">{{ $restoran->id}}</h5> --}}
									<h3 class="card-text">{{ $restoran->nama_restoran}}</h3>
								</div>
							</div>
							<a href="/restoran/{{$restoran->id}}/profil" type="hidden" class="stretched-link text-white"></a>
							</div>
					@endforeach
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection