@extends('layouts.app')

@section('title', 'Students')


@section('content')
<!-- <h2>Selamat Datang</h2>
<p>Ini halaman pelajar</p> -->
<div class="row">
    <div class="col-lg-12">
        <h4>Form Sekolah Asal</h4>

        <div class="modal-body">
            <form method="post" action="/schoolfrom/store">
                @csrf {{ method_field('POST') }}
                <div class="form-group">
                    <input type="hidden" name="id" id="id">
                    <label for="inputName">Nama Sekolah</label>
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Nama Sekolah" required="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Alamat </label>
                    <textarea class="form-control" name="address" id="inputAddress" cols="35" rows="4" required="" autofocus="" placeholder="Alamat Sekolah"></textarea>

                </div>

        </div>
        <div class="modal-footer ">
            <button type="reset" class="btn btn-warning">Batal</button>
            <button type="submit" class="btn btn-primary">Proses</button>
        </div>
        </form>
    </div>
</div>

@endsection