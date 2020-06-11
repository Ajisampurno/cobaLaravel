@extends('layout.main')

@section('title', 'halaman login')

@section('container')

	<h1 class="text-center py-5">Login</h1>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 ">
				<form class="form-auth-small" action="/index" method="post">
					{{csrf_field()}}
				  <div class="form-group ">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email anda">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
				  </div>
				  <p>Apakah anda sudah punya akun?
				  <a href="reg" class="btn btn-secondary btn-sm d-inline">registrasi</a>
				</p>
				  <button type="submit" class="btn btn-primary btn-lg">login</button>
				</form>
			</div>
		</div>
	</div>
@endsection