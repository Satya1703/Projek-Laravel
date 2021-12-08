<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pesanan as ModelsPesanan;

class PesanController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'namadepan' => 'required',
            'namabelakang' => 'required',
            'pesanan' => 'required',
            'alamat' => 'required',
            'nohp' => 'required'
        ]);
        $pesanan = new ModelsPesanan;
        $pesanan->nama_depan = $request->namadepan;
        $pesanan->nama_belakang = $request->namabelakang;
        $pesanan->Pesanan = $request->pesanan;
        $pesanan->alamat = $request->alamat;
        $pesanan->nohape = $request->nohp;
        $pesanan->save();
        return redirect(route('akhir'))->with('successMsg', 'Pesanan Berhasil');

    }
    public function akhir(){
        return view('akhir');
    }
    public function show(){
        $pesanans = ModelsPesanan::all();
        return view('admin.adm-tampil', compact('pesanans'));
    }

    public function edit($id){
        $item = ModelsPesanan::findorfail($id);
        return view('admin.edit',compact('item'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'namadepan' => 'required',
            'namabelakang' => 'required',
            'pesanan' => 'required',
            'alamat' => 'required',
            'nohp' => 'required'
        ]);
        $pesanan = ModelsPesanan::findorfail($id);
        $pesanan->nama_depan = $request->namadepan;
        $pesanan->nama_belakang = $request->namabelakang;
        $pesanan->Pesanan = $request->pesanan;
        $pesanan->alamat = $request->alamat;
        $pesanan->nohape = $request->nohp;
        $pesanan->save();
        return redirect(route('show'))->with('successMsg', 'Pesan Berhasil di Update');

    }
    //delete
    public function delete($id){
        ModelsPesanan::findorfail($id)->delete();
        return redirect(route('show'))->with('successMsg', 'Pesanan Berhasil di Hapus');
    }
}
