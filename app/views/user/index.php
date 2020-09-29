<div class="row">
    <div class="col-6">
        <h3>Daftar User</h3>
        <ul class='list-group'>
            <?php foreach ($data['user'] as $u) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $u->id_user ?>
                    <a href="<?= BASEURL ?>/User/detail/<?= $u->id_user ?>" class="badge badge-success">Detail</a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>