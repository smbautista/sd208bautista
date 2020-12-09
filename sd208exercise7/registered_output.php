<?php
        include "connection.php";
       
        if(isset($_POST['update'])){
            header('location: update.php?id='.$_POST['id']);
        }

        if(isset($_POST['delete'])){
            $sql_delete = "DELETE FROM `user` where id =". $_POST['id'];
        
            //check the query if it is executed well
        if(mysqli_query($conn, $sql_delete)){
            echo "Deleted successfully";
        }else {
            echo "ERROR: ". mysqli_error($conn);
        }
        }
        $sql = "SELECT * FROM `user`";
    
        $result = mysqli_query($conn,$sql);
        
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
body {
    background-image:url(coffee1.png);
    background-size:cover;
}

table{
    font-family: Alegreya SC;
    border-collapse:collapse;
    width: 60%;
    margin-left:18%;
    margin-top:10%;

}  
td, th{
    border: 1px solid black;
    text-align: center;
    padding: 3px;
}

th{
   background: #ffc107;
}
  
tr:nth-child(even){
    background-color: gray;
}

tr:nth-child(odd){
    background-color:#f2f2f2;
}

button{
    background-color: #ffc107;
    color: white;
    padding: 5px;
    cursor: pointer;
    width: auto;
    font-family: Alegreya SC;
    border: 1px solid black;
    font-size: 12px;
}

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           <?php
            if (mysqli_num_rows($result) > 0) {
                //output data each row
                while($row = mysqli_fetch_assoc($result)){
                    ?> 
                    <tr>
                        <td><?php  echo $row["id"]; ?> </td>
                        <td><?php  echo $row["lastname"]; ?> </td>
                        <td><?php  echo $row["firstname"]; ?> </td>
                        <td><?php  echo $row["email"]; ?> </td>
                        <td>
                            <form action="./registered_output.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                <button type="submit" name="update">Update</button>
                                <button type="submit" name="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
            }else{
                echo " 0 results";
            }
           ?>
        </tbody>
    </table>
</body>
</html>