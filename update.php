<?php
	include('connection.php'); 

    if(isset($_REQUEST['update']))
    {
        $Email = $_POST['Email'];
        $pass = $_POST['pass'];

        $sqlQuery = mysqli_prepare($conn, "UPDATE user SET `password`='$pass' Where `email` = ? ");
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
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="Email"></td>
            <tr>
            <tr>
                <td>New password:</td>
                <td><input type="password" name="pass"></td>
            <tr>
            <tr>
                
                <td>
                <button onclick="location.href = 'loginpage.php';" type="button">Back</button>
                <input type="submit" name="update" value="update">
                </td>
            <tr> 
        </table>
    </form>
</body>
</html>
