<?php
include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";

$titik_lokasi = $_GET["titik_lokasi"];

$status_dokumen = query("SELECT * FROM status_dokumen");
$lokasi = query("SELECT * FROM titik_lokasi WHERE id_titik_lokasi = $titik_lokasi")[0];


$queryKode = query("SELECT max(kode_dokumen) as kodeTerbesar FROM data_legal WHERE titik_lokasi = $titik_lokasi")[0];
$kodeTerbesar = $queryKode['kodeTerbesar'];
$urutan = (int) substr($kodeTerbesar, 3, 3);
$urutan++;

if ($titik_lokasi == 1) {
    $huruf = "M";
    $kodeDokumen = $huruf . sprintf("%03s", $urutan);
} else if ($titik_lokasi == 2) {
    $huruf = "R";
    $kodeDokumen = $huruf . sprintf("%03s", $urutan);
} else if ($titik_lokasi == 3) {
    $huruf = "B";
    $kodeDokumen = $huruf . sprintf("%03s", $urutan);
} else if ($titik_lokasi == 4) {
    $huruf = "C";
    $kodeDokumen = $huruf . sprintf("%03s", $urutan);
}

?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Tambah Data Dokumen Legal</h5>
                    <!-- <p class="card-category">24 Hours performance</p> -->
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <a href="legal_add.php?titik_lokasi=1" class="btn btn-primary w-100">
                                <i class="nc-icon nc-simple-add"></i>
                                <span><b>Farm Mariwati</b></span>
                            </a>
                        </div>

                        <div class="col-6 col-lg-3">
                            <a href="legal_add.php?titik_lokasi=2" class="btn btn-info w-100">
                                <i class="nc-icon nc-simple-add"></i>
                                <span><b>Cikalong Kulon</b></span>
                            </a>
                        </div>

                        <div class="col-6 col-lg-3">
                            <a href="legal_add.php?titik_lokasi=3" class="btn btn-warning w-100">
                                <i class="nc-icon nc-simple-add"></i>
                                <span><b>Farm Buniayu</b></span>
                            </a>
                        </div>

                        <div class="col-6 col-lg-3">
                            <a href="legal_add.php?titik_lokasi=4" class="btn btn-danger w-100">
                                <i class="nc-icon nc-simple-add"></i>
                                <span><b>Cert Customer</b></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-header ">
                    <h5 class="card-title">Isi Form : <?= $lokasi["lokasi"]; ?></h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <input type="hidden" value="<?= $titik_lokasi; ?>" name="titik_lokasi">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Dokumen</label>
                                    <input type="text" class="form-control" placeholder="Kode Dokumen" name="kode_dokumen" value="<?= $kodeDokumen; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Dokumen</label>
                                    <input type="text" class="form-control" placeholder="No. Dokumen" name="no_dokumen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. AJB</label>
                                    <input type="text" class="form-control" placeholder="No. AJB" name="no_ajb">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. HGB</label>
                                    <input type="text" class="form-control" placeholder="No. HGB" name="no_hgb">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Atas Nama</label>
                                    <input type="text" class="form-control" placeholder="Atas Nama" name="atas_nama" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Kuasa</label>
                                    <input type="text" class="form-control" placeholder="No. Kuasa" name="no_kuasa" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Luas Area (m<sup>2</sup>)</label>
                                    <input type="number" class="form-control" placeholder="Luas Area" name="luas_tanah" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Sertifikat (PDF)</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status Dokumen</label>
                                    <select class="form-control" name="status_dokumen">
                                        <option value="">Pilih Status Dokumen</option>
                                        <?php foreach ($status_dokumen as $sd) : ?>
                                            <option value="<?= $sd["id_status_dokumen"]; ?>"><?= $sd["status"]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-round mt-4" name="legal_tambah">Tambah Dokumen</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<?php
include "../view_template/footer.php";

// Tambah RT RW
if (isset($_POST["legal_tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (legal_tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href= 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
            </script>";
    }
}
?>