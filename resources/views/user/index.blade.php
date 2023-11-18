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
                <form id="userForm" name="userForm">
                    <input type="hidden" id="id" name="id">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">NIM/NIDN:</label>
                    <input type="text" class="form-control" id="nim_nidn" name="nim_nidn">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">E-Mail:</label>
                    <input type="emai" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Password:</label>
                    <input type="password" class="form-control" id="password">
                </div>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary" id="btnSave">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </form>
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
<script type="text/javascript">

    $(function () {
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
    //   Render DataTable
      var table = $('#dataUser').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('users.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'nim_nidn', name: 'nim_nidn'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    //   Click to Edit Button
      $('body').on('click', '.updateUser', function () {
        var user_id = $(this).data('id');
        $.get("{{ route('users.index') }}" +'/' + user_id +'/edit', function (data) {
            $('#updateModal').modal('show');
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#nim_nidn').val(data.nim_nidn);
            $('#email').val(data.email);
            $('#password').val(data.password);
        })
  
      });  
    // Update Data
        $('btnSave').click(function (e) {
            e.preventDefault();
            $(this).html('Sending .. ');

            $.ajax({
                data: $('#userForm').serialize(),
                url: "{{ route('users.store') }}",
                type: "POST",
                dataType: 'json',
                success : function(data) {
                    $('#userForm').trigger("reset");
                    $('#updateModal').modal('hide');
                    table.draw();
                },
                error: function(data) {
                    console.log('Error: ', data);
                    $('#btnSave').html('Save Changes');
                }
            });
        });

    //   Delete Product Code
      $('body').on('click', '.deleteUser', function () {
          var user_id = $(this).data("id");
          confirm("Are You sure want to delete !");
          $.ajax({
              type: "DELETE",
              url: "{{ route('users.store') }}"+'/'+user_id,
              success: function (data) {
                  table.draw();
              },
              error: function (data) {
                  console.log('Error:', data);
              }
          });
      });
    });
  </script>
@endpush