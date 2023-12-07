@extends('default.default')
@section('titleContent')
    Data Mahasiswa
@endsection
@section('main_content') 
<button class="btn btn-info btn-sm form-group" id="createUser"> Add Data </button>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataUser">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM/NIDN</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Modal content-->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalHeading">Edit User</h1>
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
                <button type="submit" class="btn btn-primary" id="btnSave" value="create">Simpan</button>
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
          ajax: "{{ route('user.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'nim_nidn', name: 'nim_nidn'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    //   Add New Data
      $('#createUser').click(function() {
                $('#btnSave').val("create-user");
                $('#id').val('');
                $('#userForm').trigger("reset");
                $('#modalHeading').html("Create New User");
                $('#userModal').modal('show');
            });
    //   Click to Edit Button
      $('body').on('click', '.updateUser', function () {
        var user_id = $(this).data('id');
        $.get("{{ route('user.index') }}" +'/' + user_id +'/edit', function (data) {
            $('#btnSave').val("edit-user")
            $('#userModal').modal('show');
            $('#modalHeading').html("Edit User")
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#nim_nidn').val(data.nim_nidn);
            $('#email').val(data.email);
            $('#password').val(data.password);
        })
  
      });  
        // Update Data
        $('#btnSave').click(function (e) {
            e.preventDefault();
            $(this).html('Sending .. ');

            $.ajax({
                data: $('#userForm').serialize(),
                url: "{{ route('user.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#userForm').trigger("reset");
                    $('#userModal').modal('hide');
                    table.draw();
                    
                    // Show success alert
                    alert('Data successfully added/updated!');
                },
                error: function (data) {
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
              url: "{{ route('user.store') }}"+'/'+user_id,
              success: function (data) {
                alert('Data successfully deleted!');
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