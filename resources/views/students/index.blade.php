@extends('layout.main')

@section('title','Halamamn Data Mahasiswa')

@section('header')
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/') }}">Aji Sampurno</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/index') }}">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/mahasiswa')}}">Mahasiswa</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/students')}}">Students</a>
          </li>
        </ul>
      </div>
    </nav>

@endsection

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">

        <h1 class="mt-5">Data Mahasiswa</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <a href="/students/create" type="submit" class="btn btn-primary my-3" name="submit">Tambah Data Mahasiswa</a>

        <ul class="list-group">

            	@foreach($data_mahasiswa as $data)
    		  <li class="list-group-item d-flex justify-content-between align-items-center">
    		    {{$data -> nama}}
    		    <a href="/students/{{$data -> id}}" class="badge badge-info">show</a>
    		  </li>
    		  @endforeach
    		</ul>
      {{ $data_mahasiswa->links()}}
      </div>


    </div>
  </div>
@endsection

