@extends('layout.main')

@section('title','Halamamn Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">

        <h1 class="mt-5">Data Mahasiswa</h1>

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
        				<a href="" class="badge badge-success">edit</a>
        				<a href="" class="badge badge-danger">hapus</a>
        			</td>
        		</tr>
              @endforeach
        	</tbody>
        </table>

      </div>
    </div>
  </div>
@endsection

