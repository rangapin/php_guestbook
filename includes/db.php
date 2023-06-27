<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'guestbook');
define('TABLE_GUEST', 'guests');

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

function makeQuery($handle, $query) {
    return mysqli_query($handle, $query);
}

function getOneRecord($handle, $id, $table){
    
}

function getAllRecords($handle, $table){
    $query = "SELECT * FROM $table";
    return makeQuery($handle, $table);
}

function deleteOneRecord($handle, $id, $table){
    
}

function updateOneRecord($handle, $id, $table){
    
}

function insertOneRecord($handle, $id, $table){
    
}

