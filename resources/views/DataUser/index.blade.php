@extends('templates/header')

@push('style')
{{-- SweetAlert2 --}}
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset ('assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset ('assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('content')
<!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>USER</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ url('/home') }}">User</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
          <i class="fas fa-plus-square"></i> Data User
        </button>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>Sukses!</h5>
            {{ session('success') }}.
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="icon fas fa-ban"></i>Data Gagal Disimpan!</h5>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Hak Akses</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->hak_akses }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->status }}</td>
            <td>
              <button class="btn bg-success" type="button" data-toggle="modal" data-target="#formModal"
                  data-mode="edit" data-id="{{ $user->id }}" data-username="{{ $user->username }}"
                  data-password="{{ $user->password }}" data-hak_akses="{{ $user->hak_akses }}" data-role="{{ $user->role }}"
                  data-status="{{ $user->status }}">
                  <i class="fas fa-edit"></i> Edit
              </button>
              <form action="user/{{ $user->id }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                  <button class="btn bg-danger delete-data" type="button">
                      <i class="fas fa-trash-alt"></i> Delete
                  </button>
              </form>
            </td>
        </tr>
        @endforeach
          </tbody>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
        <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card -->
    @include('DataUser.modal')
@endsection

@push('script')
{{-- sweetalert2 --}}
<script src="{{ asset('assets') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- DataTables  & Plugins -->
<script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

// script edit start
$('#formModal').on('show.bs.modal', function(e){
  console.log('user')
  const btn = $(e.relatedTarget)
  const mode = btn.data('mode')
  const id = btn.data('id')
  const username = btn.data('username')
  const email = btn.data('email')
  const password = btn.data('password')
  const modal = $(this)
    if(mode==='edit'){
      modal.find('.modal-title').text('Edit Data User')
      modal.find('#username').val(username)
      modal.find('#email').val(email)
      modal.find('#password').val(password)
      modal.find('.modal-body form').attr('action', '{{ url("admin/user") }}/'+id)
      modal.find('#method').html('@method("PATCH")')
  }else{
    modal.find('.modal-title').text('Input Data User')
    modal.find('#name').val('');
    modal.find('#email').val()
    modal.find('#password').val()
    modal.find('#method').html('')
    modal.find('.modal-body form').attr('action', '{{ url("admin/user")}}')
  }
});
// script edit end

// script delete start
$('.delete-data').click(function(e){
  e.preventDefault()
  const data = $(this).closest('tr').find('td:eq(1)').text()
  Swal.fire({
    title: 'Data akan hilang!',
    text: `Apakah penghapusan data ${data} akan dilanjutkan?`,
    icon: 'warning',
    showDenyButton: true,
    confirmButtonText: 'Ya',
    denyButtonText: 'Tidak',
    focusConfirm: false
  })
  .then((result) => {
    if(result.isConfirmed) $(e.target).closest('form').submit()
    else swal.close()
  })
});
</script>
@endpush