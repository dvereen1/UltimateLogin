<?php

include_once('Classes/DBConnection.php');
include_once('Classes/FormValidator.php');

//Create a database connection first.. If this fails no need to validate any post data
$conn = DBConnection::initialize("ultimLogin.ini");
$inputTypes = [
    "firstName" => "text",
    "lastName" => "text",
    "email" => "email",
    "username" => "text",
    "password" => "password"
];
/*echo(json_encode($_POST));*/
$validator = new FormValidator();
$valid = $validator->check($_POST, $inputTypes, $conn, 1);

if($valid){
    //inserting user info into users table
    $conn->dbQuery("insert into users(id, username, firstName, lastName, email) values (?, ?, ?, ?, ?)",[0, $valid["username"], $valid["firstName"], $valid["lastName"], $valid["email"]]);
    //inserting username and password into login table
    $conn->dbQuery("insert into login(username, password) values (?, ?)",[ $valid["username"], $valid["password"] ]);
    
   echo(json_encode("Success"));
}


