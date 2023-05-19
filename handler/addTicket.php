<?php
    require  "../model/ticket.php";
    
    session_start();
    $host = "localhost";
    $db = "ticket";
    $username = "root";
    $password = "";
    try{
    $conn = new mysqli($host, $username, $password, $db);
        
        if ($conn->connect_errno) {
            exit("Konekcija neuspesna: " . $conn->connect_errno);
        }
        $categoryId = $_POST["categoryId"];
        $userID = $_COOKIE['user_id'];

        ticket::addTicket($conn, $categoryId, $userID);
    } catch(Exception $e){
        echo $e->getMessage() . "<br/>";
            while($e = $e->getPrevious()) {
                echo 'Previous exception: '.$e->getMessage() . "<br/>";
            }
    }
?>