<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'guestbook');

function connect(){
    try{
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        if($conn){
            // echo "connected";
            return $conn;
        } else {
            throw new Exception("Cannot connect");
        }
    } catch( Exception $e){
        echo "Couln't connect.";
        echo "Error: " . $e->getMessage();
    }
    return null;
}