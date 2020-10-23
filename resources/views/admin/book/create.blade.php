@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Buku</h3>
        </div>

        <div class="card-body">
        <form action="{{route('admin.book.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group  @error('title') text-danger has-danger @enderror">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukan Judul Buku" value="{{old('title')}}">

                    @error('title')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group  @error('author_id') text-danger has-danger @enderror">
                    <label for="">Penulis</label>
                <div class="form-group  @error('author_id') text-danger has-danger @enderror">
                    <select name="author_id" id="" class="form-control select2">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id}}">{{ $author->name}}</option>
                        @endforeach
                    </select>

                    @error('author_id')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group  @error('description') text-danger has-danger @enderror">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" rows="3" class="form-control" placeholder="Deskripsi Buku" >{{old('description')}}</textarea>

                    @error('description')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group  @error('publisher') text-danger has-danger @enderror">
                    <label for="">Penerbit</label>
                    <input type="text" name="publisher" class="form-control" placeholder="Masukan Nama Penerbit" value="{{old('publisher')}}">

                    @error('publisher')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group  @error('year') text-danger has-danger @enderror">
                    <label for="">Tahun Terbit</label>
                    <input type="text" name="year" class="form-control" placeholder="Masukan Tahun Terbit" value="{{old('year')}}">

                    @error('year')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group  @error('isbn') text-danger has-danger @enderror">
                    <label for="">ISBN</label>
                    <input type="text" name="isbn" class="form-control" placeholder="Masukan ISBN" value="{{old('isbn')}}">

                    @error('isbn')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group  @error('cover') text-danger has-danger @enderror">
                    <label for="">Cover</label>
                    <br>
                    <input type="file" name="cover" class="form-control">

                    @error('cover')
                        <span class='text-danger help-block'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group  @error('qty') text-danger has-danger @enderror">
                    <label for="">Jumlah</label>
                    <input type="text" name="qty" class="form-control" placeholder="Masukan Jumlah Buku" value="{{old('qty')}}">

                    @error('qty')
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

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/dist/css/select2.min.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/dist/js/select2.full.min.js')}}"></script>

    <script>
        $('.select2').select2();
    </script>
@endpush