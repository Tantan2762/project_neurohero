@extends('layouts.main')

@section('content')

<h3 class="text-center p-2 mt-5">Data Orang Tua dan Anak</h3>
<div class=" col-8 p-4 mx-auto mb-5">
<a href="/ortu-create" type="button" class="btn btn-primary mb-4">Tambah Data Ortu dan Anak +</a>
<table class="table table-striped">
  <thead>
    <tr class="text-center">
      <th width="5%" scope="col">No</th>
      <th width="15%" scope="col">Nama Orang Tua</th>
      <th width="15%" scope="col">Nama Anak</th>
      <th width="20%"scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($ortu as $ot)
    <tr>
      <td width="5%" class="text-center">{{ $loop->iteration}}</td>
      <td width="15%">{{ $ot->nama_ortu}}</td>
      <td width="15%">{{ $ot->nama_anak}}</td>
      <td width="20%" class="text-center">
      <a type="button" href="/ortu-detail/{{ $ot->id }}" class="btn btn-info">Detail</a>
      <a type="button" href="/ortu-edit/{{ $ot->id }}" class="btn btn-warning">Ubah</a>
      <a type="button" href="/ortu-delete/{{ $ot->id}}" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @empty
    <td>Data Tidak Ada</td>
    @endforelse
  </tbody>
</table>
</div>
@endsection