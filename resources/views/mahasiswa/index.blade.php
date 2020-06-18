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
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/mahasiswa')}}">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/students')}}">Students</a>
          </li>
        </ul>
      </div>
       <form class="form-inline" action="/mahasiswa" method="get">
          <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

@endsection
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">

        <h1 class="my-5">Data Mahasiswa</h1>

        <table class="table">
        	<thead class="thead-dark">
        		<tr>
        			<th scope="col">#</th>
        			<th scope="col">NAMA</th>
        			<th scope="col">NRP</th>
        			<th scope="col">EMAIL</th>
        			<th scope="col">JURUSAN</th>
        			<th scope="col">AKSI</th>
        		</tr>
        	</thead>
        	<tbody>


        		@foreach($data_mahasiswa as $data)
        		<tr>
        			<td scope="row">{{$loop->iteration}}</td>
        			<td>{{$data->nama}}</td>
        			<td>{{$data->nrp}}</td>
        			<td>{{$data->email}}</td>
        			<td>{{$data->jurusan}}</td>
        			<td>
        				<a href="/students/{{$data -> id}}/edit" class="badge badge-success">edit</a>
        				<a href="" class="badge badge-danger">hapus</a>
        			</td>
        		</tr>
              @endforeach
        	</tbody>
        </table>

        @if (session('paginate'))
            <div>
              {{ session('paginate') }}
            </div>
        @endif

      </div>
    </div>
  </div>
@endsection
  

