@extends('layouts.main')


@section('content')
<h3 class="text-center p-2 mt-5">Ubah Data Orang Tua dan Anak</h3>
<div class="p-4 mx-5 mb-5">
    <form action="/ortu-update" method="post" class="col-sm-6 mx-auto">
        @method('put')
        @csrf
        <input type="hidden" value="{{$ortu->id}}" name="id" class="form-control" id="">
        <label for="nama_ortu">Nama Orang Tua</label>
        <input type="text" value="{{$ortu->nama_ortu}}" name="nama_ortu" class="form-control" id="">
        <br>
        <label for="nama_anak">Nama Anak</label>
        <input type="text" value="{{$ortu->nama_anak}}" name="nama_anak" class="form-control" id="">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" value="{{$ortu->alamat}}" name="alamat" class="form-control" id="">
        <br>
        <label for="kontak_wa">Kontak Whatsapp</label>
        <input type="text" value="{{$ortu->kontak_wa}}" name="kontak_wa" class="form-control" id="">
        <input type="submit" class="btn btn-primary my-3" value="Simpan">
    </form>
</div>

@endsection
