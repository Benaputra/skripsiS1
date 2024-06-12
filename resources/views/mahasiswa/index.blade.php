@extends('default.default')
@section('titleContent')
    Data Mahasiswa
@endsection
@section('main_content')
<button class="btn btn-info btn-sm form-group" id="createMahasiswa"> Tambah Mahasiswa </button>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataMahasiswa">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Handphone</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Modal content-->
    <div class="modal fade" id="mahasiswaModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="inputModalLabel">Edit Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="mahasiswaForm" name="mahasiswaForm">
                <div class="mb-3">
                    <label class="col-form-label">Nama :</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">NIM:</label>
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Handphone:</label>
                    <input type="number" class="form-control" id="handphone" name="handphone">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Prodi:</label>
                    <select name="prodi_id" id="prodi_id">
                        @foreach ($prodis as $prodi)
                            <option value="{{ $prodi->id }}">{{ $prodi->name }}</option>
                        @endforeach
                    </select>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="id" name="id">
                <button type="button" class="btn btn-primary" id="btnSave">Simpan</button>
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
<script type="text/javascript">

    $(function () {
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
       //   Add New Data
       $('#createMahasiswa').click(function() {
                $('#btnSave').val("create-mahasiswa");
                $('#id').val('');
                $('#userMahasiswa').trigger("reset");
                $('#modalHeading').html("Tambah Mahasiswa");
                $('#mahasiswaModal').modal('show');
            });

    //   Render DataTable
      var table = $('#dataMahasiswa').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('mahasiswa.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'nim', name: 'nim'},
              {data: 'handphone', name: 'handphone'},
              {data: 'prodi_id', name: 'prodi_id'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    //   Click to Edit Button
      $('body').on('click', '.updateMahasiswa', function () {
        var mahasiswa_id = $(this).data('id');
        $.get("{{ route('mahasiswa.index') }}" +'/' + mahasiswa_id +'/edit', function (data) {
            $('#mahasiswaModal').modal('show');
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#nim').val(data.nim);
            $('#handphone').val(data.handphone);
            $('#prodi_id').val(data.prodi_id);
        })
     });  

      // Update Data
      $('#btnSave').click(function (e) {
            e.preventDefault();
            $(this).html('Sending .. ');

            $.ajax({
                data: $('#mahasiswaForm').serialize(),
                url: "{{ route('mahasiswa.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#mahasiswaForm').trigger("reset");
                    $('#mahasiswaModal').modal('hide');
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
      $('body').on('click', '.deleteMahasiswa', function () {
          var mahasiswa_id = $(this).data("id");
          confirm("Are You sure want to delete !");
          $.ajax({
              type: "DELETE",
              url: "{{ route('mahasiswa.store') }}"+'/'+mahasiswa_id,
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