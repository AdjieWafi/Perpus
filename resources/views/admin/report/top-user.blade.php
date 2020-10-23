@extends('admin.templates.default')

@section('content')

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Laporan User Teraktif</h3>
              <br>
              <br>

              <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jumlah Peminjaman</th>
                  <th>Bergabung</th>
                </tr>
                </thead>

                <tbody>
                  @php
                    $no=1;
                  @endphp
                   @foreach ($users as $user)
                       <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->borrow_count }}</td>
                        <td>{{ $user->created_at->diffForHumans()}}</td>
                       </tr>
                   @endforeach
              </table>
              {{ $users->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
