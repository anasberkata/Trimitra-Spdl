<?php
include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";

$id = $_GET["id"];
$legal = query("SELECT * FROM data_legal
                INNER JOIN titik_lokasi ON data_legal.titik_lokasi = titik_lokasi.id_titik_lokasi
                INNER JOIN status_dokumen ON data_legal.status_dokumen = status_dokumen.id_status_dokumen
                WHERE id_legal = $id")[0];

$titik_lokasi = query("SELECT * FROM titik_lokasi");
$status_dokumen = query("SELECT * FROM status_dokumen");

?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Edit Data Dokumen Legal</h5>
                    <!-- <p class="card-category">24 Hours performance</p> -->
                </div>
                <div class="card-body ">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="hidden" name="id" value="<?= $legal["id_legal"]; ?>">
                                    <input type="hidden" name="file_lama" value="<?= $legal["file"]; ?>">

                                    <label>Titik Lokasi</label>
                                    <select class="form-control" name="titik_lokasi">
                                        <option value="<?= $legal["id_titik_lokasi"]; ?>"><?= $legal["lokasi"]; ?></option>
                                        <?php foreach ($titik_lokasi as $tl) : ?>
                                            <option value="<?= $tl["id_titik_lokasi"]; ?>"><?= $tl["lokasi"]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Dokumen</label>
                                    <input type="text" class="form-control" placeholder="Kode Dokumen" name="kode_dokumen" value="<?= $legal["kode_dokumen"]; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Dokumen</label>
                                    <input type="text" class="form-control" placeholder="No. Dokumen" name="no_dokumen" value="<?= $legal["no_dokumen"]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. AJB</label>
                                    <input type="text" class="form-control" placeholder="No. AJB" name="no_ajb" value="<?= $legal["no_ajb"]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. HGB</label>
                                    <input type="text" class="form-control" placeholder="No. HGB" name="no_hgb" value="<?= $legal["no_hgb"]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Atas Nama</label>
                                    <input type="text" class="form-control" placeholder="Atas Nama" name="atas_nama" value="<?= $legal["atas_nama"]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Kuasa</label>
                                    <input type="text" class="form-control" placeholder="No. Kuasa" name="no_kuasa" value="<?= $legal["no_kuasa"]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Luas Area (m<sup>2</sup>)</label>
                                    <input type="number" class="form-control" placeholder="Luas Tanah" name="luas_tanah" value="<?= $legal["luas_tanah"]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Dokumen (PDF) : <a href="../dokumen/<?= $legal["file"]; ?>" target="_blank">Lihat File</a></label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status Dokumen</label>
                                    <select class="form-control" name="status_dokumen">
                                        <option value="<?= $legal["id_status_dokumen"]; ?>"><?= $legal["status"]; ?></option>
                                        <?php foreach ($status_dokumen as $sd) : ?>
                                            <option value="<?= $sd["id_status_dokumen"]; ?>"><?= $sd["status"]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="<?= $legal["keterangan"]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status Aktif</label>
                                    <select class="form-control" name="is_active">
                                        <option value="<?= $legal["is_active"]; ?>">
                                            <?php
                                            if ($legal["is_active"] == 1) {
                                                echo "Aktif";
                                            } else {
                                                echo "Tidak Aktif";
                                            }
                                            ?>
                                        </option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-round mt-4" name="legal_edit">Edit Dokumen</button>
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
if (isset($_POST["legal_edit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (legal_edit($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href= 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah');
            </script>";
    }
}
?>