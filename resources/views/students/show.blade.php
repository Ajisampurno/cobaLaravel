@extends('layout.main')

@section('title','Halamamn Data show')

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

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{$student -> nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$student -> nrp}}</h6>
            <p class="card-text">{{$student -> email}}</p>
            <p class="card-text">{{$student -> jurusan}}</p>

            <a href="/students/{{$student -> id}}/edit" class="btn btn-primary">edit</a>

            <form action="{{$student -> id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">hapus</button>
            </form>
        
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

