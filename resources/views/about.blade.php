@extends('layout.main')

@section('title','about')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/') }}">Aji Sampurno</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('index') }}">Home</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/mahasiswa')}}">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/students')}}">Students</a>
          </li>
        </ul>
      </div>
    </nav>
@endsection

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-5">Halaman About</h1>
			</div>
		</div>
	</div>
@endsection