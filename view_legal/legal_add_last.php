<?php
include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";

$titik_lokasi = query("SELECT * FROM titik_lokasi");
$status_dokumen = query("SELECT * FROM status_dokumen");

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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titik Lokasi</label>
                                    <select class="form-control" name="titik_lokasi">
                                        <option value="">Pilih Titik Lokasi</option>
                                        <?php foreach ($titik_lokasi as $tl) : ?>
                                            <option value="<?= $tl["id_titik_lokasi"]; ?>"><?= $tl["lokasi"]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Dokumen</label>
                                    <input type="text" class="form-control" placeholder="Kode Dokumen" name="kode_dokumen" require>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Sertifikat</label>
                                    <input type="text" class="form-control" placeholder="No. Sertifikat" name="no_sertifikat" require>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. AJB</label>
                                    <input type="text" class="form-control" placeholder="No. AJB" name="no_ajb" require>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Luas Tanah (m<sup>2</sup>)</label>
                                    <input type="number" class="form-control" placeholder="Luas Tanah" name="luas_tanah" require>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Atas Nama</label>
                                    <input type="text" class="form-control" placeholder="Atas Nama" name="atas_nama" require>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Kuasa</label>
                                    <input type="text" class="form-control" placeholder="No. Kuasa" name="no_kuasa" require>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Sertifikat (PDF)</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <select class="form-control" name="keterangan">
                                        <option value="">Pilih Status Dokumen</option>
                                        <?php foreach ($status_dokumen as $sd) : ?>
                                            <option value="<?= $sd["id_status_dokumen"]; ?>"><?= $sd["status"]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-round mt-4" name="legal_tambah">Tambah Dokumen</button>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round" name="user_tambah">Tambah Petugas</button>
                            </div>
                        </div> -->
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