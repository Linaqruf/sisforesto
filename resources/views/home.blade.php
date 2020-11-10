@extends('layouts.app')

@section('breadcrumbs')
{{ Breadcrumbs::render('home') }}
@endsection

@section('content')

<div class="container-fluid">
  <div class="fade-in">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
        	<div class="card-header"> <h1>Daftar Restoran</h1>
        	           </div>
<div class="jumbotron text-right">
	<h1 class="display-8">Selamat Datang di</h1>
	<h1 class="display-4">SISFORESTO</h1>
	<h1 class="display-8">Sistem Informasi Restoran</h1>
	{{--  <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium error eos culpa, quam dolor iusto eum possimus, debitis tempore laborum, repellat qui omnis, ducimus nostrum deserunt impedit quibusdam facere a.</p>
	<hr class="my-4">
	<p>  Lorem ipsum dolor sit amet consectetur adipisicing, elit. A, et. Obcaecati architecto blanditiis impedit, officiis voluptate tempora, ullam delectus perspiciatis nemo est laboriosam magni minus voluptatibus enim sit placeat! Expedita odio quidem alias similique temporibus architecto. Quod, dolor quibusdam eos quis tempore nesciunt rem aliquam perferendis mollitia distinctio, ex, modi.</p>
	<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
</div>

<div class="card-header"> <h1>Main Menu</h1></div>
        	          <div class="card-body">

				<div class="row">
					
						<div class="col-sm-6 col-lg-6">
							<div class="card text-white bg-gradient-info" href="#">
								<img src= "{{ asset('/storage/images/restoran.jpeg')}}" width="50%"  class="card-img-top" alt="...">
								<div class="card-body justify-content-between align-items-start">
									{{--     <h5 class="card-title">{{ $restoran->id}}</h5> --}}
									<h3 class="card-text">Daftar Restoran</h3>
								</div>
							</div>
							<a href="/listrestoran" type="hidden" class="stretched-link text-white"></a>
							</div>
						<div class="col-sm-6 col-lg-6">
							<div class="card text-white bg-gradient-info" href="#">
								<img src= "{{ asset('/storage/images/cafe.jpg')}}" width="50%"  class="card-img-top" alt="...">
								<div class="card-body justify-content-between align-items-start">
									{{--     <h5 class="card-title">{{ $restoran->id}}</h5> --}}
									<h3 class="card-text">Daftar Cafe</h3>
								</div>
							</div>
							<a href="/listcafe" type="hidden" class="stretched-link text-white"></a>
							</div>
				</div>

			</div>

			{{--  --}}
		</div>
	</div>
</div>
</div>
</div>

@endsection