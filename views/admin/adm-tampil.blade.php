@extends('admin.adm-main')
@section('admin-content')

<div class="container">
    <h1> Data Pesanan Pembeli</h1>
    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Pesanan</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Olah Pesanan</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($pesanans as $item)
        <tr>
            <th scope="row"> {{ $loop->iteration }} </th>
            <td>{{ $item->nama_depan }}</td>
            <td>{{ $item->Pesanan }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->nohape }}</td>
            <td> <a href="{{ route('edit',$item->id) }}" class="btn btn-warning btn-sm"> Edit </a> |

                <form method="POST" id="delete-form-{{ $item->id }}" action="{{ route('delete', $item->id) }}" style="display: none">
                @csrf
                {{ method_field('delete') }}
                </form>
                <a onclick="if (confirm('yakin akan menghapus data?')){
                    event.preventDefault();
                    document.getElementById('delete-form-{{ $item->id }}').submit();
                }else
                { event.prefentDefault();}

                " href="" class="btn btn-danger btn-sm"> Delete </a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
 </div>
@endsection
