<?php
session_start();
echo $_SESSION["username"];
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["save"])){
        require "../connect.php";

        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $setControlNo = "SELECT * FROM bookingTable WHERE username = '".$_SESSION["username"]."'";
        $getControlNo = $conn->query($setControlNo);

        $setuserData="SELECT * FROM userTable WHERE username = '".$_SESSION["username"]."'";
        $getuserData=$conn->query($setuserData);
        $placeuserData=$getuserData->fetch_assoc();

        $setdemogData="SELECT * FROM demogTable WHERE username = '".$_SESSION["username"]."'";
        $getdemogData=$conn->query($setdemogData);
        $placedemogData=$getdemogData->fetch_assoc();

        if($_POST["username"] == ""){
            $username = $placeuserData["username"];
        } else {
            $username = $_POST["username"];
        }
        if($_POST["email"] == ""){
            $email = $placeuserData["email"];
        } else {
            $email = $_POST["email"];
        }
        if($_POST["password"] == ""){
            $password = $placeuserData["password"];
        } else {
            $password = $_POST["password"];
        }
        if($_POST["birthday"] == ""){
            $birthday = $placeuserData["birthday"];
        } else {
            $birthday = $_POST["birthday"];
        }
        if($_POST["gender"] == ""){
            $gender = $placedemogData["gender"];
        } else {
            $gender = $_POST["gender"];
        }
        if($_POST["region"] == ""){
            $region = $placedemogData["region"];
        } else {
            $region = $_POST["region"];
        }
        if($_POST["province"] == ""){
            if($region == "NCR"){
                $province = "Metro Manila";
            }else{
                $province = $placedemogData["province"];
            }
        } else {
            if($region == "NCR"){
                $province = "Metro Manila";
            } else {
                $province = $_POST["province"];
            }
        }
        if($_POST["city"] == ""){
            $city = $placedemogData["city"];
        } else {
            $city = $placedemogData["city"];
        }

        echo $username . $email . $password . $birthday . $gender . $region . $province . $city;
        
        $updateuserTable = "UPDATE userTable SET username = ?, email = ?, userpass = ?, birthday = ? WHERE userID = ".$placeuserData["userID"];
        $stmt=$conn->prepare($updateuserTable);
        $stmt->bind_param("ssss", $username, $email, $password, $birthday);

        $stmt->execute();

        $updatedemogTable = "UPDATE demogTable SET username = ?, gender = ?, region = ?, province = ?, city = ? WHERE userID = ".$placedemogData["userID"];
        $stmt1=$conn->prepare($updatedemogTable);
        $stmt1->bind_param("sssss", $username, $gender, $region, $province, $city);

        if($stmt1->execute()){
            if($_SESSION["username"] != $username){
                while($row = $getControlNo->fetch_assoc()){
                    $update = "UPDATE bookingTable SET username = ? WHERE controlNo = ?";
                    $add = $conn->prepare($update);
                    $add->bind_param("si",$username, $row["controlNo"]);
                    $add->execute();
                }
            }
        };

        $_SESSION["username"] = $username;

        header("location: customer-Account-Information.php");

    }
 }

?>