@extends('admin.templates.default')

@section('content')

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Penulis</h3>
              <br>
               <a href="{{route('admin.author.create')}}" class="btn btn-primary">Tambah Penulis</a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

            @if (session('success'))
              <div class="alert alert-success" role="alert">
                <strong>{{session('success')}}</strong> berhasil ditambahkan!
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
                  <th>Tipe</th>
                  <th>Nama</th>
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

<form action="" method="post" id="deleteForm">
  @csrf
  @method("DELETE")
  <input type="submit" value="Hapus" style="display: none">
</form>


@endsection

@push('scripts')
    <script>
      $(function(){
        $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route('admin.author.data')}}',
          columns:[
            {data: 'DT_RowIndex', orderable: false, searchable : false},
            {data: 'type'},
            {data: 'name'},
            {data: 'action'}
          ]
        })
      })
    </script>
@endpush