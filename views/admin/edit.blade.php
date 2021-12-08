@extends('admin.adm-main')
@section('admin-content')
    <h1 class="text-center" style="margin-top: 50px;"> Form Edit Data </h1>
    <form class="container-sm" style="margin-top: 50px;" action="/adm/update" method="POST">
        @csrf
        <!-- input nama depan dan nama belakang pada satu baris -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="namadepan" class="form-control" name="namadepan" value="{{ $item->nama_depan }}" />
              <label class="form-label" for="namadepan">Nama Depan</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="namabelakang" class="form-control" name="namabelakang" value="{{ $item->nama_belakang }}" />
              <label class="form-label" for="namabelakang">Nama Belakang</label>
            </div>
          </div>
        </div>

        <!-- input pesanan -->
        <div class="form-outline mb-4">
            <input type="text" id="pesanan" class="form-control" name="pesanan" value="{{ $item->Pesanan }}" />
            <label class="form-label" for="pesanan">Pesanan</label>
        </div>

        <!-- input alamat -->
        <div class="form-outline mb-4">
            <input type="text" id="alamat" class="form-control" name="alamat" value="{{ $item->alamat }}" />
            <label class="form-label" for="alamat">Alamat</label>
        </div>

        <!-- input no hp -->
        <div class="form-outline mb-4">
          <input type="number" id="nohp" class="form-control" name="nohp" value="{{ $item->nohape }}" />
          <label class="form-label" for="nohp">No Handphone</label>
        </div>


        <!-- button memesan -->
        <button type="submit" class="btn btn-dark btn-block mb-4" >Edit Data</button>
      </form>
@endsection
