<?php

include('koneksi.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql= "DELETE FROM galeri WHERE id= '$id'";
    $query= mysqli_query($koneksi,$sql);

    if ($query){
    	header('Location: index.php');
    }else {
    	die("Pict not deleted")
    }
}
?>

<!--<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM album WHERE id = '$id' ";

if (mysqli_query($conn , $query)) {
 # redirect ke index.php
 header("location:index.php");
}
else{
 echo "ERROR, gambar gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>-->