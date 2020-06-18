<?php

// Create connection
// url + userId + userPassword + databaseName
$connection = mysqli_connect('localhost','root','','');

$query = "SELECT * FROM users";

// GET result
$result = mysqli_query($connection, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);