@extends('layouts.main')
@section('content')
@if (session('successMsg'))
<div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
</div>
@endif
    <h1 class="text-center" style="margin-top: 50px;"> Terima Kasih Sudah Memesan </h1>
    <h2 class="text-center" style="margin-top: 50px;"> Silahkan Melakukan Transakasi Pembayaran </h2>
@endsection