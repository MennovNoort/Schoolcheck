<?php
include 'connect.php';

$id = $_SESSION['id'];
$schoolname = $_POST['schoolname'];
$street = $_POST['street'];
$streetnumber = $_POST['streetnumber'];
$district = $_POST['district'];
$zipcode = $_POST['zipcode'];
$telnr = $_POST['telnr'];

$add = "
INSERT INTO scholen (schoolname,street,streetnumber,district,zipcode,telnr)
VALUES  ('$schoolname','$street','$streetnumber','$district','$zipcode','$telnr')
";
$do_add = mysqli_query($connect,$add);

header('location:../admin.php');