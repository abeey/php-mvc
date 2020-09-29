<div class="row">
    <div class="col-6">
        <h3>Daftar User</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
            Tambah Data
        </button>
        <br><br>
        <ul class='list-group'>
            <?php foreach ($data['user'] as $u) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $u->id_user ?>
                    <a href="<?= BASEURL ?>/User/detail/<?= $u->id_user ?>" class="badge badge-success">Detail</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/User/tambah" method="POST">
                    <div class="form-grop">
                        <label for="nama">ID USER</label>
                        <input type="text" class="form-control" name="id_user" placeholder="Id User">
                    </div>
                    <div class="form-grop">
                        <label for="passw">Password</label>
                        <input type="text" class="form-control" name="passw" placeholder="Password">
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