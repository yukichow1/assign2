<?php
	include('connection.php'); 

    if(isset($_REQUEST['login']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sqlQuery = "SELECT `email`, `password` FROM `user` WHERE `email` = '$email' AND `password` = '$pass' ";
        $result = $conn->query($sqlQuery);

        if ($result) {
            if ($result->num_rows > 0) {
                echo "Logged in succesfully";
                header("location: loginpage.php");
                while ($row = $result->fetch_assoc()) {
                    $email = $row["email"];
                    $pass = $row["password"];
                }
            } else {
                echo "Incorrect details";
            }
        }
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
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>Login form</td>
            <tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            <tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            <tr>
            <tr>
                <td><input type="submit" name="login" value="login"></td>
                <td><a href="register.php">Don't have an account yet?</td>
            <tr> 
        </table>
    </form>
</body>
</html>
