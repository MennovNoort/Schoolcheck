<?php 
include 'connect.php';
$id = $_GET['school_id'];

$delete = "DELETE FROM scholen WHERE school_id = '$id' ";
$do_delete = mysqli_query($connect,$delete);
header('location:../admin.php');
?>