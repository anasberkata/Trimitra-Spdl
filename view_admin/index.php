<?php
include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";



$titik_lokasi = $_GET["titik_lokasi"];

if (!isset($titik_lokasi)) {
    $legal = query("SELECT * FROM data_legal
                INNER JOIN titik_lokasi ON data_legal.titik_lokasi = titik_lokasi.id_titik_lokasi
                INNER JOIN status_dokumen ON data_legal.status_dokumen = status_dokumen.id_status_dokumen");
} else {
    $legal = query("SELECT * FROM data_legal
                INNER JOIN titik_lokasi ON data_legal.titik_lokasi = titik_lokasi.id_titik_lokasi
                INNER JOIN status_dokumen ON data_legal.status_dokumen = status_dokumen.id_status_dokumen
                WHERE titik_lokasi = $titik_lokasi
                ");
}

$total_f = count(query("SELECT * FROM data_legal WHERE titik_lokasi = 1"));
$total_rck = count(query("SELECT * FROM data_legal WHERE titik_lokasi = 2"));
$total_b = count(query("SELECT * FROM data_legal WHERE titik_lokasi = 3"));
$total_c = count(query("SELECT * FROM data_legal WHERE titik_lokasi = 4"));
?>

<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="index.php?titik_lokasi=1">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row pb-2">
                            <div class="col-2 col-md-2">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-box text-success"></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <div class="numbers">
                                    <p class="card-category">Farm Mariwati</p>
                                    <p class="card-title"><?= $total_f; ?>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="index.php?titik_lokasi=2">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row pb-2">
                            <div class="col-2 col-md-2">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-box text-info"></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <div class="numbers">
                                    <p class="card-category">Cikalong Kulon</p>
                                    <p class="card-title"><?= $total_rck; ?>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="index.php?titik_lokasi=3">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row pb-2">
                            <div class="col-2 col-md-2">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-box text-warning"></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <div class="numbers">
                                    <p class="card-category">Farm Buniayu</p>
                                    <p class="card-title"><?= $total_b; ?>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="index.php?titik_lokasi=4">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row pb-2">
                            <div class="col-2 col-md-2">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-box text-danger"></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <div class="numbers">
                                    <p class="card-category">Cert Customer</p>
                                    <p class="card-title"><?= $total_c; ?>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Lokasi :
                        <?php
                        if (!isset($titik_lokasi)) {
                            echo "Semua";
                        } else {
                            echo $legal[0]["lokasi"];
                        }
                        ?>
                    </h5>
                    <!-- <p class="card-category">Jumlah Data : </p> -->
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
                                <th>Keterangan</th>
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