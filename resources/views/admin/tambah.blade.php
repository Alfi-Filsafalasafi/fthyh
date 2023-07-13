@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <div class="card-title">
                <h5>Tambah Berita</h5>
            </div>
            <form action="{{ route('berita.tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi singkat" id="floatingTextarea2" style="height: 100px" required></textarea>
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link Berita</label>
                    <input type="text" name="link" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection