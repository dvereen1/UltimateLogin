<?php
include_once('Classes/DBConnection.php');
include_once('Classes/FormValidator.php');

//Create a database connection first.. If this fails no need to validate any post data
$conn = DBConnection::initialize('ultimLogin.ini');
$inputTypes = [
    "username" => "text",
    "password" => "password"
];
/*var_dump($_SESSION);*/
$validator = new FormValidator();
$valid = $validator->check($_POST, $inputTypes, $conn, 0);
/**
 * Verifies supplied password matches hash stored in database based on given username
 * 
 * @param {String} $username - the username used to query database
 * @param {String} $password - the password used to compare with the hash stored inside database
 * @param {DBConnection} $conn - the database connection object
 */

function verifyPassword($username, $password, $conn){
    $stmt = $conn->dbQuery("select password from login where username = ?", [$username], 1);
    $dbPwd = $stmt->fetch();
    if(!$dbPwd){
        exit(json_encode("Username"));
    }
    if(password_verify($password, $dbPwd["password"])){
        $result = $conn->dbQuery("select * from users where username = ? ", [$username], 1)->fetch();
        session_start();
        $_SESSION["authorized"] = true;
        $_SESSION["firstName"] = $result["firstName"];
        $_SESSION["lastName"] = $result["lastName"];
        echo(json_encode("Valid Password"));
    }else{
        exit(json_encode("Password"));
    }
}
//result of server side validation. Refer to FormValidator.php
if($valid){
    verifyPassword($valid["username"], $valid["password"], $conn); 
}
