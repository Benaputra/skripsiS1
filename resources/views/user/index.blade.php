@extends('default.default')
@section('titleContent')
    Data Mahasiswa
@endsection
@section('main_content')
    <table class="table table-bordered" id="data-user">
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
        <tbody>

        </tbody>
    </table>
@endsection
@push('additional_js')
<script>
    $(function() {
    console.log( "yuhu!" );
});
</script>
<script type="text/javascript">
    $(function() {
       $('#data-user').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
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
</script>
@endpush