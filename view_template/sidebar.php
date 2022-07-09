<?php
$id_user = $_SESSION['id'];
$user = query("SELECT * FROM users WHERE id = $id_user")[0];
?>

<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/favicon.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            SIPEDOL
            <br>
            QL. TRIMITRA
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <!-- <li class="active "> -->
            <li>
                <a href="../view_admin/index.php">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="../view_legal/index.php">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Data Dokumen Legal</p>
                </a>
            </li>

            <?php if ($user['role_id'] == 1) : ?>
                <li>
                    <a href="../view_user/index.php">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Data Petugas</p>
                    </a>
                </li>
            <?php else : ?>

            <?php endif; ?>
        </ul>
    </div>
</div>