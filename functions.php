<?php

// KONEKSI DATABASE =====================================================
$conn = mysqli_connect("localhost", "root", "", "db_trimitra");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// USER
function user_tambah($data)
{
    global $conn;

    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $email = $data["email"];
    $role = $data["role"];

    $date_created = date("Y-m-d");
    $is_active = 1;

    $query = "INSERT INTO users
				VALUES
			(NULL, '$nama', '$email', '$username', '$password', '$role', '$date_created', '$is_active')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function user_edit($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $email = $data["email"];
    $role = $data["role"];

    $query = "UPDATE users SET
			nama = '$nama',
			email = '$email',
			username = '$username',
			password = '$password',
			role_id = '$role'

            WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function user_delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($conn);
}
