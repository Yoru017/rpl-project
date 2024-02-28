<?php 
    require "./core/function.php";  
    if (isset($_POST['add'])) {
        $id = $_POST['idBarang'];
        $namaBarang = $_POST['namaBarang'];
        $jenis = $_POST['jenis'];
        $stock = $_POST['stock'];

        $addDB = mysqli_query($conn, "INSERT INTO barang (idbarang, namabarang, jenisbarang, stock) values ('$id','$namaBarang','$jenis','$stock')");
        if ($addDB) {  
            header('location:index.php');
        } else {
            header('location:index.php');
        }
    }

    if (isset($_POST['updateBarang'])) {
        $id = $_POST['idb'];
        $namaBarang = $_POST['namaBarang'];
        $jenis = $_POST['jenis'];
        $stock = $_POST['stock'];

        $update = mysqli_query($conn, "UPDATE barang SET namabarang='$namaBarang', jenisbarang='$jenis', stock=$stock WHERE idbarang='$id'");
        if ($update) {
            header('location:index.php');
        } else {
            header('location:index.php');
        }

    }

    if (isset($_POST['hapusBarang'])) {
        $id = $_POST['idb'];

        $delete = mysqli_query($conn, "DELETE FROM barang WHERE idbarang='$id'");

        if ($delete) {
            header('location:index.php');
        } else {
            header('location:index.php');
        }
    }
?>