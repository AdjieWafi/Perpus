@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Penulis</h3>
        </div>

        <div class="card-body">
        <form action="{{route('admin.author.store')}}" method="POST">
                @csrf

                <div class="form-group  @error('name') text-danger has-danger @enderror">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukan Data Penulis">

                    @error('name')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group  @error('type') text-danger has-danger @enderror">
                    <label for="">Tipe</label>
                    <br>
                    <input type="radio" id="umum" name="type" value="Umum">
                    <label for="umum">Umum</label><br>

                    <input type="radio" id="dosen" name="type" value="Dosen">
                    <label for="dosen">Dosen</label><br>

                    <input type="radio" id="mahasiswa" name="type" value="mahasiswa">
                    <label for="mahasiswa">Mahasiswa</label>

                    @error('type')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection