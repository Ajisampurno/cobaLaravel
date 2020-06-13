@extends('layout.main')

@section('title', 'halaman registrasi')

@section('container')

	<h1 class="text-center py-5">Registrasi</h1>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 ">
		        @if (session('status'))
		            <div class="alert alert-success">
		                {{ session('status') }}
		            </div>
		        @endif

				<form class="form-auth-small" action="/registrasi" method="post">
					{{csrf_field()}}
				  <div class="form-group ">
				    <label for="nama">Usernama</label>
				    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" value="{{ old('nama') }}">
				    @error('nama')
		              <div class="invalid-feedback">
		                {{$message}}
		              </div>
		            @enderror
				  </div>
				  <div class="form-group ">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email anda" value="{{ old('email') }}">
				    @error('email')
		              <div class="invalid-feedback">
		                {{$message}}
		              </div>
		            @enderror
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
				    @error('password')
		              <div class="invalid-feedback">
		                {{$message}}
		              </div>
		            @enderror
				  </div>
				  <div class="form-group">
				    <label for="password_confirmation">Confirm Password</label>
				    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
				  	@error('password_confirmation')
		              <div class="invalid-feedback">
		                {{$message}}
		              </div>
		            @enderror
				  </div>
				  <p>Apakah anda sudah punya akun?
				  <a href="{{url('/')}}" class="btn btn-secondary btn-sm d-inline">Login</a>
				</p>
				  <button type="submit" class="btn btn-primary btn-lg">Registrasi</button>
				</form>
			</div>
		</div>
	</div>
@endsection