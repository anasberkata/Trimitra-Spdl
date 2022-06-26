<?php
require "../functions.php";

$users = query("SELECT * FROM users");

include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";
?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Data Petugas</h5>
                    <!-- <p class="card-category">24 Hours performance</p> -->

                    <a href="user_add.php" class='btn btn-primary'>
                        <span>Tambah Data</span>
                    </a>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Nama</th>
                                <th>E-Mail</th>
                                <th>Username</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $u) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $u["nama"]; ?></td>
                                        <td><?= $u["email"]; ?></td>
                                        <td><?= $u["username"]; ?></td>
                                        <td>
                                            <a href="user_edit.php?id=<?= $u["id"] ?>" class="badge bg-warning mb-2">Edit</a> <br>
                                            <a href="user_delete.php?id=<?= $u["id"] ?>" class="badge bg-danger" onclick="return confirm('Yakin akan menghapus data petugas : <?= $u['nama']; ?> ?');">Hapus</a>
                                        </td>
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