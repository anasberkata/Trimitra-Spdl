<?php
require "../functions.php";

include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";
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
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-Mail</label>
                                    <input type="email" class="form-control" placeholder="E-Mail" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" name="role">
                                        <option value="1">Admin</option>
                                        <option value="2">Petugas</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round" name="user_tambah">Tambah Petugas</button>
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
if (isset($_POST["user_tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (user_tambah($_POST) > 0) {
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