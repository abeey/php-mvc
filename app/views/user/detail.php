<div class="row">
    <div class="col-6">
        <h3>Detail User, <?= $data['id_user'] ?></h3>
        <table style="border:solid 1pt;">
            <tr>
                <td>ID USER</td>
                <td>PASSW</td>
            </tr>
            <tr>
                <td><?= $data['user']->id_user ?></td>
                <td><?= $data['user']->password ?></td>
            </tr>
        </table>
    </div>
</div>