<?php
require "../functions.php";

$legal = query("SELECT * FROM data_legal");

include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";
?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Data Dokumen Legal</h5>
                    <!-- <p class="card-category">24 Hours performance</p> -->

                    <a href="legal_add.php" class='btn btn-primary'>
                        <span>Tambah Data</span>
                    </a>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Perusahaan</th>
                                <th>Land Title</th>
                                <th>Land Area</th>
                                <th>Land Address</th>
                                <th>No. AJB</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($legal as $l) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $l["perusahaan"]; ?></td>
                                        <td><?= $l["land_title"]; ?></td>
                                        <td><?= $l["land_area"]; ?> M<sup>2</sup> </td>
                                        <td><?= $l["land_address"]; ?></td>
                                        <td><?= $l["no_ajb"]; ?></td>
                                        <td>
                                            <a href="legal_details.php?id=<?= $l["id_legal"] ?>" class="badge bg-info mb-2 text-white">Details</a> <br>
                                            <a href="legal_edit.php?id=<?= $l["id_legal"] ?>" class="badge bg-warning mb-2 text-white">Edit</a> <br>
                                            <a href="legal_delete.php?id=<?= $l["id_legal"] ?>" class="badge bg-danger text-white" onclick="return confirm('Yakin akan menghapus data dokumen : <?= $l['land_title']; ?> ?');">Hapus</a>
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