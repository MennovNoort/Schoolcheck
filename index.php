
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scholen</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php 
        include 'model/select_schools.php';

        while($row = mysqli_fetch_assoc($result)){
        print("<div class='schools'>");
        print("<div class='schoolname'>{$row['schoolname']}</div>
        Streetname: {$row['street']}<br>
        Streetnumber: {$row['streetnumber']}<br>
        District: {$row['district']}<br>
        Zipcode: {$row['zipcode']}<br>
        Tel-number: {$row['telnr']}<br><br><br>
        
        ");
        print("</div>"); 
               
   
            }
    ?>
</body>
</html>
