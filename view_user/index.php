<?php
include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";

$users = query("SELECT * FROM users");
?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Data Petugas</h5>
                    <!-- <p class="card-category">24 Hours performance</p> -->

                    <?php if ($user['role_id'] == 1) : ?>
                        <a href="user_add.php" class='btn btn-primary'>
                            <span>Tambah Data</span>
                        </a>
                    <?php else : ?>

                    <?php endif; ?>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Nama</th>
                                <th>E-Mail</th>
                                <th>Username</th>
                                <?php if ($user['role_id'] == 1) : ?>
                                    <th>Opsi</th>
                                <?php else : ?>

                                <?php endif; ?>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $u) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $u["nama"]; ?></td>
                                        <td><?= $u["email"]; ?></td>
                                        <td><?= $u["username"]; ?></td>
                                        <?php if ($user['role_id'] == 1) : ?>
                                            <td>
                                                <a href="user_edit.php?id=<?= $u["id"] ?>" class="badge bg-warning mb-2 text-white">Edit</a> <br>
                                                <a href="user_delete.php?id=<?= $u["id"] ?>" class="badge bg-danger text-white" onclick="return confirm('Yakin akan menghapus data petugas : <?= $u['nama']; ?> ?');">Hapus</a>
                                            </td>
                                        <?php else : ?>

                                        <?php endif; ?>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "../view_template/footer.php"; ?>