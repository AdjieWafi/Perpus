@extends('frontend.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Perbaharui Profile</h3>
        </div>

        {{-- <div class="card-body">
        <form action="{{ route('admin.author.update', $author ?? '')}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group  @error('name') text-danger has-danger @enderror">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukan Data Penulis" value="{{ $author ?? ''->name}}">
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
                    <input type="submit" value="ubah" class="btn btn-primary">
                </div>
            </form>
        </div> --}}
    </div>
@endsection