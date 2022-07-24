<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['login'])) {
    header("location: index.php");
}

require '../functions.php';

$id = $_GET["id"];

if (legal_active($id) > 0) {
    echo "
		<script>
			alert('Data berhasil diaktifkan');
			document.location.href = 'index.php';
		</script>
	";
} else {
    echo "
		<script>
			alert('Data gagal diaktifkan');
			document.location.href = 'index.php';
		</script>

	";
}
