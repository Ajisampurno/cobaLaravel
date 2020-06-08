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
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukan NRP">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan Jurusan">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>
@endsection

