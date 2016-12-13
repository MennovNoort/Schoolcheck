<?php
include 'connect.php';
session_start();
$id = $_SESSION['id'];
$schoolname = $_POST['schoolname'];
$street = $_POST['street'];
$streetnumber = $_POST['streetnumber'];
$district = $_POST['district'];
$zipcode = $_POST['zipcode'];
$telnr = $_POST['telnr'];

$update = "
UPDATE scholen
SET schoolname= '$schoolname',street= '$street',streetnumber= '$streetnumber',
district= '$district',zipcode= '$zipcode', telnr= '$telnr'
WHERE school_id = '$id'
";
$do_update = mysqli_query($connect,$update);

header('location:../admin.php');