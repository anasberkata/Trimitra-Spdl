<?php include "v_header.php"; ?>

<div class="wrapper">
    <div class="main-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-10 mt-5">
                    <div class="card card-user mt-5">
                        <div class="card-header text-center">
                            <img src="assets/img/logo.png" width="100px">
                            <h5 class="card-title">Sistem Pengarsipan Dokumen Legal
                                <br>PT. QL TRIMITRA
                            </h5>
                        </div>
                        <div class="card-body">
                            <form action="cek-login.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" class="btn btn-primary btn-round">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "v_footer.php"; ?>