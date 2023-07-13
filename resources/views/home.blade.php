@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-6 my-auto">
            <h5>Manajemen Berita</h5>
        </div>
        <div class="col-6 text-right mx-auto">
            <a href="/berita" type="button" class="btn btn-success float-end">Tambah</a>
        </div>
    </div>
<div class="table-responsive">
<table class="table table-dark table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col" width="50%">deskripsi</th>
      <th scope="col">Link</th>
      <th scope="col"><div class="text-center">Aksi</div></th>
    </tr>
  </thead>
  <tbody>
  @forelse ($berita as $data)

    <tr>
      <th scope="row">1</th>
      <td>{{$data->judul}}</td>
      <td>{{$data->deskripsi}}</td>
      <td>{{$data->link}}</td>
      <td>
      <div>
      <form action="{{ route('berita.hapus',$data->id) }}" method="Post">
        <a class="btn btn-warning text-white btn-sm float-end m-1" href="{{ route('berita.edit',$data->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm float-end m-1">Delete</button>
      </form>
     </div>

      </td>
    </tr>
    @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
  @endforelse
  </tbody>
</table>
</div>
</div>
@endsection
