@extends('layout.main')

@section('title','Halamamn Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">

        <h1 class="mt-5">Data Mahasiswa</h1>

        <a href="/students/create" type="submit" class="btn btn-primary my-3" name="submit">Tambah Data Mahasiswa</a>

        <ul class="list-group">

        	@foreach($data_mahasiswa as $data)
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    {{$data -> nama}}
		    <a href="/students/{{$data -> id}}" class="badge badge-info">show</a>
		  </li>
		  @endforeach
		</ul>

      </div>
    </div>
  </div>
@endsection

