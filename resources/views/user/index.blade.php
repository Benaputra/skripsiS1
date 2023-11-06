@extends('default.default')
@section('titleContent')
    Data Mahasiswa
@endsection
@section('main_content')
    <table class="table table-bordered" id="data-table">
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
@endsection
@push('additional_js')
<script type="text/javascript">
    $(document).ready(function() {
      var table = $('#data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route ('user.show') }}',
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'nim_nidn', name: 'nim_nidn'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });   
    });
  </script>
@endpush