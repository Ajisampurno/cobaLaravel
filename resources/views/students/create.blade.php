@extends('layout.main')

@section('title','Halamamn Data Insert')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">

        <h1 class="mt-5">Tambah Data Mahasiswa</h1>

        <form method="post" action="/students">

          @csrf <!-- sebagai security -->

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid  @enderror" id="nama" name="nama" placeholder="Masukan Nama">
            @error('nama')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control @error('nrp') is-invalid  @enderror" id="nrp" name="nrp" placeholder="Masukan NRP">
            @error('nrp')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" placeholder="Masukan Email">
            @error('email')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid  @enderror" id="jurusan" name="jurusan" placeholder="Masukan Jurusan">
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

