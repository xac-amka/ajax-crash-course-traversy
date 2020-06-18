<?php

// Connect DB
// url + userId + userPassword + databaseName
$connection = mysqli_connect('localhost','root','','');

echo 'Processing...';

// Check for GET variable
if(isset($_GET['name'])){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    echo 'GET: Your name is '.$_GET['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($connection, $query)){
        echo 'User Added... ';
    }else{
        echo 'Error '.mysqli_error($connection);
    }
}

// Check for POST variable
if(isset($_POST['name'])){
    echo 'POST: Your name is '.$_POST['name'];
}