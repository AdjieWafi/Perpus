@extends('admin.templates.default')

@section('content')

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Laporan Buku Populer</h3>
              <br>

              <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Jumlah</th>
                  <th>Total Dipinjam</th>
                  <th>Deskripsi</th>
                  <th>Sampul</th>
                </tr>
                </thead>

                <tbody>
                  @php
                      $no=1;
                  @endphp
                   @foreach ($books as $book)
                       <tr>
                        <td>{{ $no ++}}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author->name }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->qty }}</td>
                        <td>{{ $book->borrowed_count }}</td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <img src="{{ $book->getCover() }}" height="150px" alt="{{ $book->title }}">
                        </td>
                       </tr>
                   @endforeach
              </table>
              {{ $books->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
