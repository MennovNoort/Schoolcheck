<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-panel</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    
        <table id="table-scholen">
            <thead>
                <tr>
                    <th>schoolname</th>
                    <th>street</th>
                    <th>streetnumber</th>
                    <th>district</th>
                    <th>zipcode</th>
                    <th>tel.nr</th>
                </tr>
            </thead> 
            <tbody>
                
            <?php 
                include 'model/select_schools.php'; 
                while($row = mysqli_fetch_assoc($result)){
                    print("<tr>");
                    print("<td>{$row['schoolname']}</td>");
                    print("<td>{$row['street']}</td>");
                    print("<td>{$row['streetnumber']}</td>");
                    print("<td>{$row['district']}</td>");
                    print("<td>{$row['zipcode']}</td>");
                    print("<td>{$row['telnr']}</td>");
                    /*print("<td>{$row['text']}</td>");*/
                    print("<td> <a href='vieuw/edit.php?school_id={$row['school_id']}'>edit</a></td>");
                    print("<td> <a href='model/delete.php?school_id={$row['school_id']}'>delete</a></td>");
                }
            ?>
            <tr>
                <td><a href="vieuw/add.php"><button>Add school</button></a></td>
            </tr>
            </tbody> 
        </table>
</body>
</html>
