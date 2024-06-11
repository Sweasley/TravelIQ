<?php
require '../connect.php';

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["message-sent"])){
        $message = $_POST["message"];
        
        $setDetails = "SELECT * FROM userTable WHERE username = '" . $_SESSION["username"] . "'";
        $getDetails = $conn->query($setDetails);
        $placeDetails = $getDetails->fetch_assoc();
        $username = $placeDetails["username"];
        $email = $placeDetails["email"];

        $sql = "INSERT INTO messageTable(username, email, message, datesent) VALUES (?,?,?,NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $message);

        if($stmt->execute()){
            echo "Message Sent";
            header("location: customer-contact-us.php");
        }
    }
}

?>