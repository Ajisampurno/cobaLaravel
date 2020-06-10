@extends('layout.main')

@section('title','Halamamn Data show')

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

  
                <button class="btn btn-primary">edit</button>

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

