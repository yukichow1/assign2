<?php
	include('connection.php'); 

    if(isset($_REQUEST['delete']))
    {
        $Email = $_POST['Email'];

        $sqlQuery = mysqli_prepare($conn, "DELETE FROM user Where `email` = ? ");
        $sqlQuery->bind_param('s', $Email);
        $sqlQuery->execute();
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="delete.php" method="post">
        <table>
            <tr>
                <td>Please enter your email to confirm:</td>
                <td><input type="text" name="Email"></td>
            <tr>
           
            <tr>
                <td>
                <button onclick="location.href = 'loginpage.php';" type="button">Back</button>
                <input type="submit" name="delete" value="delete">
                </td>
            <tr> 
        </table>
    </form>
</body>
</html>
