@extends('layouts.main')

@section('content')

<h3 class="text-center p-2 mt-5">Tambah Data Progress Anak</h3>
<div class="p-4 mx-5 mb-5">
    
    <form action="/ortu-store-detail/{id}" method="post" class="col-sm-6 mx-auto">
        @csrf
        <input type="hidden" name="ortu_id" value="{{ $ortu->id }}" class="form-control" id="">
        <br>
        <label for="progress">Progress</label>
        <input type="text" name="progress" class="form-control" id="">
        <input type="submit" class="btn btn-primary my-3" value="Simpan">
    </form>
</div>
@endsection