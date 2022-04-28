<?php
include "../view_template/header.php";
include "../view_template/sidebar.php";
include "../view_template/topbar.php";
?>
<div class="wrapper ">
    <div class="main-panel">
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row pb-2">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-badge text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Divisi</p>
                                        <p class="card-title">4
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row pb-2">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-money-coins text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Arsip</p>
                                        <p class="card-title">20
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row pb-2">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-single-02 text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Petugas</p>
                                        <p class="card-title">2
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h5 class="card-title">Users Behavior</h5>
                            <p class="card-category">24 Hours performance</p>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Country
                                        </th>
                                        <th>
                                            City
                                        </th>
                                        <th class="text-right">
                                            Salary
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Dakota Rice
                                            </td>
                                            <td>
                                                Niger
                                            </td>
                                            <td>
                                                Oud-Turnhout
                                            </td>
                                            <td class="text-right">
                                                $36,738
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Minerva Hooper
                                            </td>
                                            <td>
                                                Curaçao
                                            </td>
                                            <td>
                                                Sinaai-Waas
                                            </td>
                                            <td class="text-right">
                                                $23,789
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>. Dev by Nanang Miftahudin
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include "../view_template/footer.php"; ?>