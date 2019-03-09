<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
    <tr>
        <td>Name</td>
        <td><input type="text" name="name"> </td>
        <br>
    </tr>
    <tr>
        <td>Age</td>
        <td><input type="text" name="age"></td>
        <br>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email"></td>
        <br>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Register"></td>
        <br>
    </tr>
</form>

</body>
</html>


<?php
if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
}

echo "Your Name: ".$name."<br>";
echo "Your Age: ".$age."<br>";
echo "Your Email: ".$email."<br>";
?>