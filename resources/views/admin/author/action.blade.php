<a href="{{ route('admin.author.edit', $model)}}" class="btn btn-info">Edit</a>
<button href="{{ route('admin.author.destroy', $model)}}" class="btn btn-danger" id="delete">Hapus</button>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah yakin ingin menghapus data ini?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan! ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya'
            }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = href;
                 document.getElementById('deleteForm').submit();

                    Swal.fire(
                    'Terhapus!',
                    'Data Telah dihapus',
                    'success'
                    )
                }
             })

       
     })
</script>