@extends('default.default')
@section('titleContent')
    Role Menu
@endsection
@section('main_content') 
<button class="btn btn-info btn-sm form-group" id="createRole"> Add Role </button>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataRole">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Modal content-->
    <div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalHeading">Edit Role</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
        <form id="roleForm" name="roleForm">
                <input type="hidden" id="id" name="id">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Role Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btnSave" value="create">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
      var table = $('#dataRole').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('role.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    //   Add New Data
      $('#createRole').click(function() {
                $('#btnSave').val("create-role");
                $('#id').val('');
                $('#roleForm').trigger("reset");
                $('#modalHeading').html("Create New Role");
                $('#roleModal').modal('show');
            });
    //   Click to Edit Button
      $('body').on('click', '.updateRole', function () {
        var role_id = $(this).data('id');
        $.get("{{ route('role.index') }}" +'/' + role_id +'/edit', function (data) {
            $('#btnSave').val("edit-role")
            $('#roleModal').modal('show');
            $('#modalHeading').html("Edit Role")
            $('#id').val(data.id);
            $('#name').val(data.name);
        })
  
      });  
        // Update Data
        $('#btnSave').click(function (e) {
            e.preventDefault();
            $(this).html('Sending .. ');

            $.ajax({
                data: $('#roleForm').serialize(),
                url: "{{ route('role.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#roleForm').trigger("reset");
                    $('#roleModal').modal('hide');
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

    //   Delete Role Code
        $('body').on('click', '.deleteRole', function () {
            var role_id = $(this).data("id");
            confirm("Are You sure want to delete this data ?");
            $.ajax({
                type: "DELETE",
                url: "{{ route('role.store') }}"+'/'+role_id,
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