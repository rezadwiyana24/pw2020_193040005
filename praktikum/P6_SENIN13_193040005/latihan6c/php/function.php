<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040005") or die ("Database salah!");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
     $conn = koneksi();
     
     $photo = htmlspecialchars($data["photo"]);
     $type = htmlspecialchars($data["type"]);
     $merk = htmlspecialchars($data["merk"]);
     $alamat = htmlspecialchars($data["alamat"]);
     $harga = htmlspecialchars($data["harga"]);

     $query = "INSERT INTO pakaian
                    VALUES
                    ('','$photo','$type','$merk','$alamat',' $harga')";
            
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
 }

function hapus($id)
{
 $conn = koneksi();
 mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

 return mysqli_affected_rows($conn);
}