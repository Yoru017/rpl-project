<?php 
    require "./core/function.php";  
    if (isset($_POST['add'])) {
        $kodeb = $_POST['kodeBarang'];
        $namaBarang = $_POST['namaBarang'];
        $jenis = $_POST['jenis'];
        $stock = $_POST['stock'];
        $ownerId = $_POST['userId'];

        $addDB = mysqli_query($conn, "INSERT INTO barang (kode, namabarang, jenisbarang, stock, owner_id) values ('$kodeb','$namaBarang','$jenis','$stock','$ownerId')");
        header('location:index.php');
    }

    if (isset($_POST['updateBarang'])) {
        $id = $_POST['idb'];
        $kodeb = $_POST['kodeb'];
        $namaBarang = $_POST['namaBarang'];
        $jenis = $_POST['jenis'];
        $stock = $_POST['stock'];
        $ownerId = $_POST['userId'];

        $update = mysqli_query($conn, "UPDATE barang SET namabarang='$namaBarang', jenisbarang='$jenis', stock=$stock WHERE kode='$kodeb' AND owner_id='$ownerId'");
        header('location:index.php');
    }

    if (isset($_POST['hapusBarang'])) {
        $id = $_POST['idb'];
        $kodeb = $_POST['kodeb'];
        $ownerId = $_POST['userId'];

        $delete = mysqli_query($conn, "DELETE FROM barang WHERE kode='$kodeb' AND owner_id='$ownerId'");
        header('location:index.php');
    }
?>