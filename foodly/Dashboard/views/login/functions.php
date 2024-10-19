<?php

session_start();
$database= 'localhost';
$database_user= 'root';
$database_password= '';
$database_name= 'foodly';

$con=mysqli_connect($database, $database_user, $database_password, $database_name);
if(mysqli_connect_error()){
    exit('faild to connect to database : ' . mysqli_connect_error());
}

if($stmt=$con->prepare('SELECT id, password FROM admins WHERE username = ?')){

    $stmt->bind_param('s', $_POST['username']);
$stmt->execute();


$stmt->store_result();

if($stmt->num_rows >0){
    $stmt->bind_result($id, $password);
    $stmt->fetch();

    $md_password = md5($_POST['password']);
    if($md_password === $password){
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['is'] = $id;
    header('Location: ../dashboard.php');
}else{
    echo('Incorrect Password');
    header('refresh:2;url=index.php');
}
}else{
    echo('Incorrect Username');
    header('refresh:2;url=index.php');
}



}


?>