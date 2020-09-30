<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal" id='tambahModalTambah'>
            Tambah Data
        </button>
    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-6">
        <form action="<?= BASEURL ?>/User/cari" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari User..." name="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="cari">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <h3>Daftar User</h3>
        <ul class='list-group'>
            <?php foreach ($data['user'] as $u) : ?>
                <li class="list-group-item"><?= $u->id_user ?>
                    <a href="<?= BASEURL ?>/User/hapus/<?= $u->id_user ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin Hapus ?')">Hapus</a>
                    <a href="<?= BASEURL ?>/User/detail/<?= $u->id_user ?>" class="badge badge-success float-right ml-1">Detail</a>
                    <a href="<?= BASEURL ?>/User/ubah/<?= $u->id_user ?>" class="badge badge-primary float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#tambahModal" data-id="<?= $u->id_user ?>">Edit</a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/User/tambah" method="POST">

                    <div class="form-grop">
                        <label for="nama">ID USER</label>
                        <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Id User">
                    </div>
                    <div class="form-grop">
                        <label for="passw">Password</label>
                        <input type="text" class="form-control" id="passw" name="passw" placeholder="Password">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
            </form>
        </div>
    </div>
</div>