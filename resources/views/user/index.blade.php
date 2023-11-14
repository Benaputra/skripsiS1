@extends('default.default')
@section('titleContent')
    Data Mahasiswa
@endsection
@section('main_content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataUser">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM/NIDN</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Modal content-->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="inputModalLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">NIM/NIDN:</label>
                    <input type="text" class="form-control" id="nim_nidn">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">E-Mail:</label>
                    <input type="emai" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Password:</label>
                    <input type="password" class="form-control" id="password">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="id" value="0">
                <button type="button" class="btn btn-primary" id="btn-save">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>
</div>
</div>
@endsection
@push('additional_js')
<script>
    $(function() {
    console.log( "yuhu!" );
});
</script>
{{-- Show Data --}}
<script type="text/javascript">
   // CSRF Token
   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 
    $(function() {
       $('#dataUser').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('user.getUserData')}}",
            columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable:false, orderable:false},
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'nim_nidn', name: 'nim_nidn'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
    
            ]
        });
     });
     // Update record
     $('#dataUser').on('click','.updateUser',function(){
            var id = $(this).data('id');
            $('#id').val(id);
            // AJAX request
            $.ajax({
                url: "{{ route('user.getUpdateData') }}",
                type: 'POST',
                data: {_token: CSRF_TOKEN,id: id},
                dataType: 'json',
                success: function(response){
                    if(response.success == 1){
                         $('#name').val(response.name);
                         $('#nim_nidn').val(response.nim_nidn);
                         $('#email').val(response.email);
                         $('#password').val(response.password);
                         dataUser.ajax.reload();
                    }else {
                         alert(id);
                    }
                }
            });
       });
</script>
@endpush