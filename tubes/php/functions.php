<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040005") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $photo = htmlspecialchars($data['photo']);
    $merk = htmlspecialchars($data['merk']);
    $type = htmlspecialchars($data['type']);
    $alamat = htmlspecialchars($data['alamat']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO pakaian
                        VALUES
                        (null, '$photo', '$type', '$merk', '$alamat', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $photo = htmlspecialchars($data['photo']);
    $merk = htmlspecialchars($data['merk']);
    $type = htmlspecialchars($data['type']);
    $alamat = htmlspecialchars($data['alamat']);
    $harga = htmlspecialchars($data['harga']);
    $query = "UPDATE pakaian
                SET
                photo = '$photo',
                merk = '$merk',
                type = '$type',
                alamat = '$alamat',
                harga = '$harga'
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('username sudah digunakan');
                </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
