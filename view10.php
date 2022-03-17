<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        ?>
        <table>
            <tr>
                <th>No</th>
                <th>Firstname</th>
                <th>Lastame</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
        
        <?php
        $query = "SELECT * FROM  group10";
        $select = ($connection,$query) or die(mysqli_connect_error());
        if($select){
            while($row = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row['lastname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['username']?></td>
                </tr>
            </table>
            <?php
            }
        }
    }
    ?>
</body>
</html>


