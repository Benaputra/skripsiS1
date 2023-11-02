@extends('default.default')
@section('titleContent')
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM/NIDN</th>
                <th>E-mail</th>
            </tr>
        </thead>
    </table>
@endsection
@push('additional_js')
<script type="text/javascript">
    $(function () {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "#",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'Name', name: 'name'},
              {data: 'nim_nidn', name: 'nim_nidn'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });   
    });
  </script>
@endpush