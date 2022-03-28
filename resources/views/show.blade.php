@extends('layouts.default')
 
@section('content')
    <section>
        <div class="container mt-5" >
            <h1>Edit Siswa</h1>
            <div class="row">
                <div class="com-lg-8">
                    <form action="{{ url('/update/'. $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Siswa *</label>
                            <input type="text" name="nama" class="form-control"  placeholder="Kelvin Agustian" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kelas *</label>
                            <input type="text" name="kelas" class="form-control" placeholder="XI RPL 1" value="{{ $data->kelas }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat *</label>
                            <textarea class="form-control" name="alamat" placeholder="Bogor">{{ $data->alamat }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit Siswa</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href=""{{ url('/') }}> 
                                << Kembali ke halaman utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection