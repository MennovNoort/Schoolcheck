<?php 
session_start();

$id = $_GET['school_id'];
$_SESSION['id'] = $id;

?>
<form action="../model/edit_content.php" method="POST">
    schoolname<br><input type="text" name="schoolname" required autofocus><br>
    street<br><input type="text" name="street" required><br>
    streetnumber<br><input type="text" name="streetnumber" required><br>
    district<br><input type="text" name="district" required><br>
    zipcode<br><input type="text" name="zipcode" required><br>
    telnr<br><input type="text" name="telnr" required><br>
    <input type="submit">
</form>