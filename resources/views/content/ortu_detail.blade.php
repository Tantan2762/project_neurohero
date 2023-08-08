@extends('layouts.main')

@section('content')

<h3 class="text-center p-2 mt-5">Detail Data Orang Tua dan Anak</h3>
<div class="p-4 mx-5 mb-5">
<div class="d-flex"><a href="/ortu" type="button" class="btn btn-primary mb-4 mx-auto">Kembali</a></div>
    <div class="col-sm-4 p-4 card mx-auto shadow bg-white" style="border-radius: 2em;">
        <h5>Nama Orang Tua</h5>
        <p>{{$ortu->nama_ortu}}</p>
        <br>
        <h5>Nama Anak</h5>
        <p>{{$ortu->nama_anak}}</p>
        <br>
        <h5>Alamat</h5>
        <p>{{$ortu->alamat}}</p>
        <br>
        <h5>Kontak Whatsapp</h5>
        <p>{{$ortu->kontak_wa}}</p>
    </div>
        <h4 class="text-center p-5 m-2">Detail Progress Anak</h4>
        
        
        <div class="d-flex justify-content-center"><a href="/ortu-create-detail/{{ $ortu->id}}" type="button" class="btn btn-primary mb-4 mx-auto">Tambah Progress +</a></div>
     
        <table class="table table-striped col-9 mx-auto">
        <thead>
            <tr class="text-center">
            <th width="10%" scope="col">Tanggal</th>
            <th width="15%" scope="col">Progress</th>
            <th width="5%"scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($perubahan as $pr)
            @if($pr->ortu_id == $ortu->id)
            <tr>
            <td width="10%" class="text-center">{{ $pr->created_at }}</td>
            <input type="hidden" value="{{ $pr->ortu_id}}">
            <td width="15%">{{ $pr->progress}}</td>
            <td width="5%" class="text-center">
            <a type="button" href="/ortu-delete-detail/{{ $pr->id }}" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            @endif
            @empty
            <td>Data Tidak Ada</td>
            @endforelse
        </tbody>
        </table>

</div>
@endsection