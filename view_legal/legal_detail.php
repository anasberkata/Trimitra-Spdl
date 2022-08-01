<?php
include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";

$id = $_GET["id"];

$legal = query("SELECT * FROM data_legal
                INNER JOIN titik_lokasi ON data_legal.titik_lokasi = titik_lokasi.id_titik_lokasi
                INNER JOIN status_dokumen ON data_legal.status_dokumen = status_dokumen.id_status_dokumen
                WHERE id_legal = $id
                ")[0];

?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Detail Dokumen : <?= $legal["no_dokumen"]; ?></h5>
                        </div>
                        <div class="col">
                            <a href="index.php" class="btn btn-primary float-right">Kembali</a>
                        </div>
                    </div>
                    <!-- <p class="card-category">24 Hours performance</p> -->

                    <!-- <a href="legal_add.php" class='btn btn-primary'>
                        <span>Tambah Data</span>
                    </a> -->
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item">Kode Dokumen</li>
                                <li class="list-group-item">No. Dokumen</li>
                                <li class="list-group-item">No. HGB</li>
                                <li class="list-group-item">No. AJB</li>
                                <li class="list-group-item">Luas Tanah</li>
                                <li class="list-group-item">Atas Nama</li>
                                <li class="list-group-item">No. Kuasa</li>
                                <li class="list-group-item">Titik Lokasi</li>
                                <li class="list-group-item">File</li>
                                <li class="list-group-item">Status Dokumen</li>
                                <li class="list-group-item">Keterangan</li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-9">
                            <ul class="list-group">
                                <li class="list-group-item">: <?= $legal["kode_dokumen"]; ?></li>
                                <li class="list-group-item">: <?= $legal["no_dokumen"]; ?></li>
                                <li class="list-group-item">: <?= $legal["no_hgb"]; ?></li>
                                <li class="list-group-item">: <?= $legal["no_ajb"]; ?></li>
                                <li class="list-group-item">: <?= $legal["luas_tanah"]; ?> m<sup>2</sup></li>
                                <li class="list-group-item">: <?= $legal["atas_nama"]; ?></li>
                                <li class="list-group-item">: <?= $legal["no_kuasa"]; ?></li>
                                <li class="list-group-item">: <?= $legal["lokasi"]; ?></li>
                                <li class="list-group-item">: <a href="../dokumen/<?= $legal["file"]; ?>" class="badge bg-info text-white" target="blank">Lihat File</a></li>
                                <li class="list-group-item">:
                                    <?php if ($legal["id_status_dokumen"] == 1) : ?>
                                        <span class="badge bg-info text-white"><?= $legal["status"]; ?></span>
                                    <?php elseif ($legal["id_status_dokumen"] == 2) : ?>
                                        <span class="badge bg-success text-white"><?= $legal["status"]; ?></span>
                                    <?php elseif ($legal["id_status_dokumen"] == 3) : ?>
                                        <span class="badge bg-warning text-white"><?= $legal["status"]; ?></span>
                                    <?php else : ?>
                                        <span class="badge bg-danger text-white"><?= $legal["status"]; ?></span>
                                    <?php endif; ?>
                                </li>
                                <li class="list-group-item">: <?= $legal["keterangan"]; ?></li>
                            </ul>
                        </div>
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
                <h5 class="modal-title" id="file">Dokumen Sertifikat</h5>
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