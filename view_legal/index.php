<?php
require "../functions.php";

$legal = query("SELECT * FROM data_legal
                INNER JOIN titik_lokasi ON data_legal.titik_lokasi = titik_lokasi.id_titik_lokasi
                INNER JOIN status_dokumen ON data_legal.status_dokumen = status_dokumen.id_status_dokumen");

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
                                <th>Kode Dokumen</th>
                                <th>No. Sertifikat</th>
                                <th>No. AJB</th>
                                <th>Atas Nama</th>
                                <th>Titik Lokasi</th>
                                <th>File</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($legal as $l) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $l["kode_dokumen"]; ?></td>
                                        <td><?= $l["no_sertifikat"]; ?></td>
                                        <td><?= $l["no_ajb"]; ?></td>
                                        <td><?= $l["atas_nama"]; ?></td>
                                        <td><?= $l["lokasi"]; ?></td>
                                        <td>
                                            <a class="badge bg-primary text-white" href="../dokumen/<?= $l["file"]; ?>" target="_blank">Lihat File</a>
                                            <!-- <a type="button" class="badge bg-primary text-white" data-toggle="modal" data-target="#file">Lihat File</a> -->
                                        </td>
                                        <td>
                                            <?php if ($l["id_status_dokumen"] == 1) : ?>
                                                <span class="badge bg-info text-white"><?= $l["status"]; ?></span>
                                            <?php elseif ($l["id_status_dokumen"] == 2) : ?>
                                                <span class="badge bg-success text-white"><?= $l["status"]; ?></span>
                                            <?php elseif ($l["id_status_dokumen"] == 3) : ?>
                                                <span class="badge bg-warning text-white"><?= $l["status"]; ?></span>
                                            <?php else : ?>
                                                <span class="badge bg-danger text-white"><?= $l["status"]; ?></span>
                                            <?php endif; ?>
                                        </td>
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


<!-- Modal -->
<div class="modal fade" id="file" tabindex="-1" role="dialog" aria-labelledby="file" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="file">Sertifikat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body w-100">
                <iframe src="../dokumen/<?= $l["file"]; ?>" width="100%" height="500px">
                </iframe>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button> -->
                <a class="btn btn-primary" href="../dokumen/<?= $l["file"]; ?>">Download</a>
            </div>
        </div>
    </div>
</div>

<?php include "../view_template/footer.php"; ?>