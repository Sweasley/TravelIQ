<?php

session_start();

require "../connect.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
        $transID = $_POST["transactionId"];
        $amount = $_POST["amount"];
        $mop = $_POST["mode"];

        $sql = "INSERT INTO transactionTable(username, mop, amount, transactionID) VALUES (?,?,?,?)";
        $result=$conn->prepare($sql);
        $result->bind_param("ssss", $_SESSION["username"], $mop, $amount, $transID);

        if($result->execute()){
            $_SESSION["transactionid"] = $transID;
            header("location: payment-confirmed.php");
            exit();
        }
    }
}

?>