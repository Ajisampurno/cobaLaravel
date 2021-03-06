@extends('layout.main')

@section('title','Halaman Edit')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">

        <h1 class="mt-5">Ubah Data Mahasiswa</h1>

        <form action="/students/{{$student -> id}}" method="post">

          @method('patch')
          @csrf <!-- sebagai security -->

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid  @enderror" id="nama" name="nama" placeholder="Masukan Nama" value="{{$student -> nama}}">
            @error('nama')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control @error('nrp') is-invalid  @enderror" id="nrp" name="nrp" placeholder="Masukan NRP" value="{{$student -> nrp}}">
            @error('nrp')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" placeholder="Masukan Email" value="{{$student -> email}}">
            @error('email')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid  @enderror" id="jurusan" name="jurusan" placeholder="Masukan Jurusan" value="{{$student -> jurusan}}">
            @error('jurusan')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>
@endsection

