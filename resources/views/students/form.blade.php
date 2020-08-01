<!--Data Insert modal here-->
<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form method="post" action="/student/store">
                    @csrf {{ method_field('POST') }}
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="inputName">Nama</label>
                        <input type="text" class="form-control" name="name" id="inputName" placeholder="Nama lengkap" required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="inputKTP">No. KTP </label>
                        <input type="text" name="ktp" class="form-control" id="inputKTP" placeholder="Nomor KTP" required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Alamat </label>
                        <textarea class="form-control" name="address" id="inputAddress" cols="35" rows="4" required="" autofocus="" placeholder="Alamat Lengkap"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="inputPhone">Email </label>
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email" required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">No. Telp </label>
                        <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Nomor Telepon" required="" autofocus="">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="insertbutton"></button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--SIngle data show are here-->
<div class="modal fade" id="single-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" align="center"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">ID: <span class="text-danger" id="id"></span></li>
                    <li class="list-group-item">Nama: <span class="text-danger" id="name"></span> </li>
                    <li class="list-group-item">Alamat: <span class="text-danger" id="address"></span></li>
                    <li class="list-group-item">No. Telp: <span class="text-danger" id="phone"></span></li>
                    <li class="list-group-item">Asal Sekolah: <span class="text-danger" id="school_from"></span></li>
                </ul>
            </div>
        </div>
    </div>