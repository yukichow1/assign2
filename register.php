<?php
    include('connection.php'); 

	if(isset($_POST['submit']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];

        $sqlQuery = "INSERT INTO user (email,`password`,fullname,phone) VALUES ('$email','$pass','$fullname','$phone')";

    if (mysqli_query($conn, $sqlQuery)) {
        echo "New record created successfully";
    }
    else {
        header("location: https://httpstat.us/404");
    }
    
    mysqli_close($conn); 
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
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>Registration form</td>
            <tr>
            <tr>
                <td>Fullname:</td>
                <td><input type="text" name="fullname"></td>
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
                <td>Phone number:</td>
                <td><input type="number" name="phone"></td>
            <tr>
            <tr>
                <td><input type="submit" name="submit" value="register"></td>
                <td><a href="index.php">already have an account?</td>
            <tr> 
        </table>
    </form>
</body>
</html>
