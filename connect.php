<?php
$connection = mysqli_connect('localhost','root');

if ($connection) {
    
}
else {
    echo "ERROR: Connection failed";
}

mysqli_select_db($connection, 'authentication');

$username = $_POST['Uname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$enpass = password_hash($pass,PASSWORD_DEFAULT);

$s = "select * from credentials where USERNAME = '$username'";
$result = mysqli_query($connection,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo"Username already taken";
}
else
{
    $data = "INSERT INTO credentials (USERNAME,EMAIL,PASSWD) VALUES ('$username','$email','$enpass')";
    mysqli_query ($connection , $data);
    header('location:signsuccess.php');
}

?>