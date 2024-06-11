<?php
session_start();
error_reporting(E_ALL);
require "../connect.php";
ini_set('display_errors', 1);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["save"])){
            $setDetails = "SELECT * FROM userTable WHERE username = '".$_SESSION["username"]."'";
            $getDetails = $conn->query($setDetails);
            $placeDetails = $getDetails->fetch_assoc();

            if($_POST["username"] == ""){ 
                $username = $placeDetails["username"];
            } else {
                $username = $_POST["username"];
            }
            if($_POST["email"] == ""){ 
                $email = $placeDetails["email"];
            } else {
                $email = $_POST["email"];
            }
            if($_POST["password"] == ""){ 
                $password = $placeDetails["userpass"];
            } else {
                $password = $_POST["password"];
            }

            echo $username . $email . $password;

            $sql="UPDATE userTable SET username = ?, email = ?, userpass = ? WHERE username = '" . $_SESSION["username"] . "'";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $password);
            $_SESSION["username"] = $username;

            if($stmt->execute()){
                echo $_SESSION["username"];
                echo "Updated successfully";

                header("location: administrator-homepage.php");
            }

        }
    }
?>