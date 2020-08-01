@extends('layouts.app')

@section('title', 'Resume')


@section('content')
<!-- <h2>Selamat Datang</h2>
<p>Ini halaman pelajar</p> -->
<div class="row">
    <div class="col-lg-12">
        <h4>Daftar Resume Baru <a onclick="addForm()" class="btn btn-primary float-right">Tambah Data</a></h4>

        <table class="table table-sm dataTable" id="tbl_std">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No KTP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($no=0)
                @foreach($list as $dt)
                <tr>
                    <td scope="row">{{$no+=1}}</td>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->ktp}}</td>
                    <td>{{$dt->address}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->phone}}</td>
                    <td scope="col">
                        <a href="#" onclick="editForm('{{ $dt->serial }}')">Ubah</a> |
                        <a href="/student/hapus/{{ $dt->serial }}">Hapus</a></td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@include('students.form');
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var tbl = $('#tbl_std').DataTable({});

        $('#tbl_std').each(function() {
            var datatable = $(this);
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder', 'Search');
            search_input.addClass('form-control input-sm');
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.addClass('form-control input-sm');
        });
    })

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Form Pelajar');
        $('#insertbutton').text('Tambah Data');
    }

    function editForm(id) {
        save_method = 'edit';
        // $('input[name=_method]').val('PATCH');
        $('#modal-form form')[0].reset();
        $.ajax({
            url: '/student/edit/' + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#modal-form').modal('show');
                $('.modal-title').text('Form Pelajar');
                $('#insertbutton').text('Ubah Data');
                $('#id').val(data[0].serial);
                $('#inputName').val(data[0].name);
                $('#inputAddress').val(data[0].address);
                $('#inputPhone').val(data[0].phone);
                $('#inputKTP').val(data[0].ktp);
                $('#inputEmail').val(data[0].email);
            },
            error: function() {
                alert("Nothing Data");
            }
        });
    }
</script>
@endpush