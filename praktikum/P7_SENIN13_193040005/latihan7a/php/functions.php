<?php
   
   // function untuk melakukan koneksi ke database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040005") or die("Database salah!");
        
        return $conn;
    }

    // function untuk melakukan query ke database
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    // fungsi untuk menambahkan data didalam database
    function tambah($data)
    {
        $conn = koneksi();

        $img = htmlspecialchars($data['photo']);
        $merk = htmlspecialchars($data['merk']);
        $type = htmlspecialchars($data['type']);

        $query = "INSERT INTO pakaian
                        VALUES
                        (``, `$merk`, `$photo`, `$type`)";
            
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
        $img = htmlspecialchars($data['photo']);
        $merek = htmlspecialchars($data['merek']);
        $ukuran = htmlspecialchars($data['ukuran']);

        $query = "UPDATE pakaian
                SET
                photo = '$photo',
                merk = '$merk',
                type = '$type',
                WHERE id = '$id'
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>
