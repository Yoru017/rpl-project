<?php 
    require "./core/function.php";  

    if (isset($_POST['add'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $add = mysqli_query($conn, "INSERT INTO login (email, password) values ('$email','$password')");
        if ($add) {
            header('location:user.php');
        } else {
            header('location:user.php');
        }
    }

    if (isset($_POST['updateUser'])) {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $update = mysqli_query($conn, "UPDATE login SET email='$email', password='$pass' WHERE iduser='$id'");
        if ($update) {
            header('location:user.php');
        } else {
            header('location:user.php');
        }

    }

    if (isset($_POST['hapusUser'])) {
        $id = $_POST['id'];

        $delete = mysqli_query($conn, "DELETE FROM login WHERE iduser='$id'");

        if ($delete) {
            header('location:user.php');
        } else {
            header('location:user.php');
        }
    }
?>