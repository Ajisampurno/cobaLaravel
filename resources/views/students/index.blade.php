@extends('layout.main')

@section('title','Halamamn Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">

        <h1 class="mt-5">Data Mahasiswa</h1>

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

