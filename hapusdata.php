<?php
    $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

    $localhost = '';
    $username = '';
    $password = '';
    $nama_database = 'daftar_produk';

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM daftar_produk WHERE id = $id";
        if (mysqli_query($koneksi, $query)) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }

    mysqli_close($koneksi);
?>
