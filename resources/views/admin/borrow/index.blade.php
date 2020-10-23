@extends('admin.templates.default')

@section('content')

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Peminjam Buku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

            @if (session('success'))
              <div class="alert alert-success" role="alert">
                <strong>{{session('success')}}</strong> Sudah dikembalikan!
             </div>
            @endif

            @if (session('info'))
              <div class="alert alert-info" role="alert">
                <strong>{{session('info')}}</strong> berhasil diupdate!
             </div>
            @endif

            @if (session('danger'))
              <div class="alert alert-danger" role="alert">
                <strong>{{session('danger')}}</strong> berhasil dihapus!
             </div>
            @endif

              <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

<form action="" method="post" id="returnForm">
  @csrf
  @method("PUT")
  <input type="submit" value="Return" style="display: none">
</form>


@endsection

@push('scripts')
    <script>
      $(function(){
        $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route('admin.borrow.data')}}',
          columns:[
            {data: 'DT_RowIndex', orderable: false, searchable : false},
            {data: 'user'},
            {data: 'book_title'},
            {data: 'created_at'},
            {data: 'action'},
          ]
        })
      })
    </script>
@endpush