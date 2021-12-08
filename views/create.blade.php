@extends('layouts.main')
@section('content')
    <h1 class="text-center" style="margin-top: 50px;"> Haloo ini halaman pesanan </h1>
    <form class="container-sm" style="margin-top: 50px;" action="/simpan" method="POST">
        @csrf
        <!-- input nama depan dan nama belakang pada satu baris -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="namadepan" class="form-control" name="namadepan" />
              <label class="form-label" for="namadepan">Nama Depan</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="namabelakang" class="form-control" name="namabelakang" />
              <label class="form-label" for="namabelakang">Nama Belakang</label>
            </div>
          </div>
        </div>

        <!-- input pesanan -->
        <div class="form-outline mb-4">
          <input type="text" id="pesanan" class="form-control" name="pesanan"/>
          <label class="form-label" for="pesanan">Pesanan</label>
        </div>


        <!-- input alamat -->
        <div class="form-outline mb-4">
            <input type="text" id="alamat" class="form-control" name="alamat" />
            <label class="form-label" for="alamat">Alamat</label>
        </div>

        <!-- input no hp -->
        <div class="form-outline mb-4">
          <input type="number" id="nohp" class="form-control" name="nohp"/>
          <label class="form-label" for="nohp">No Handphone</label>
        </div>


        <!-- button memesan -->
        <button type="submit" class="btn btn-dark btn-block mb-4" >Pesan Sekarang</button>
      </form>
@endsection
