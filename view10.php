<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{            
            border:solid blue;
        }

    </style>
</head>
<body>
    <?php
    define("HOST","localhost");
    $db_user = "andersonmia";
    $db_password = "&2005&";
    $db_name = "groupwork";
    $connection = mysqli_connect(HOST,$db_user,$db_password,$db_name);
    if(!$connection){
        echo mysqli_connect_error();
    }else{
        $query = "SELECT * FROM  group10";
        $select = mysqli_query($connection,$query) or die(mysqli_connect_error());
        if($select){        
        ?>
        <table>
            <tr>
                <th>No</th>
                <th>Firstname</th>
                <th>Lastame</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
    <?php while($row = mysqli_fetch_assoc($select)){?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row['lastname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><a href='edit10.php?id=".$rows[‘id’].”>Update</a></td>
                    <td><?php echo $row['username']?></td>
                </tr>            
            <?php
            }
        }
    }
    ?>
    </table>
</body>
</html>


