@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sign Up</div>

                <div class="card-body">
                    <form method="POST" action="/postregister">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_pengguna" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama_pengguna" type="text" class="form-control @error('nama_pengguna') is-invalid @enderror" name="nama_pengguna" value="{{ old('nama_pengguna') }}" required autocomplete="nama_pengguna" autofocus>

                                @error('nama_pengguna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_pengguna" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email_pengguna" type="email" class="form-control @error('email_pengguna') is-invalid @enderror" name="email_pengguna" value="{{ old('email_pengguna') }}" required autocomplete="email_pengguna">

                                @error('email_pengguna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     

                       <div class="form-group row">
                            <label for="alamat_pengguna" class="col-md-4 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat_pengguna" type="text" class="form-control" name="alamat_pengguna">

                            </div>
                        </div>


                       <div class="form-group row">
                            <label for="telp_pengguna" class="col-md-4 col-form-label text-md-right">Nomor Telpon</label>

                            <div class="col-md-6">
                                <input id="telp_pengguna" type="tel" class="form-control" name="telp_pengguna">

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
