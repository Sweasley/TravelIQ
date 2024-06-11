<?php
require "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["approve"])){
            $id = $_POST["id"];

            $setData = "SELECT * FROM transactionTable WHERE controlNo = ".$id;
            $getData = $conn->query($setData);
            $placedata = $getData->fetch_assoc();

            $approve = "UPDATE transactionTable SET approval = true WHERE controlNo = ?";
            $stap = $conn->prepare($approve);
            $stap->bind_param("i",$id);

            $stap->execute();

            $sql = "INSERT INTO profitTable(transactionDate, amount) VALUES (CURDATE(),?)";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param("s", $placedata["amount"]);

            if($stmt->execute()){
                header("location: administrator-homepage.php");
            }

        } else if(isset($_POST["deny"])){
            $id = $_POST["id"];

            $approve = "UPDATE transactionTable SET approval = true WHERE controlNo = ?";
            $stap = $conn->prepare($approve);
            $stap->bind_param("i",$id);

            if($stap->execute()){
                header("location: administrator-homepage.php");
            };
        }
    }
?>