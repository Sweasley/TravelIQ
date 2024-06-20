<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require "connect.php";
    if(isset($_POST["page-submit-1"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["useremail"];
        $birthdate = $_POST["birthdate"];
        
        $sql="INSERT INTO usertable(username, userpass, userrole, email, birthday, is_new) VALUES (?,?,2,?,?,true)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $password, $email, $birthdate);

        if($stmt->execute()){
            echo "Registration Complete";
            header("location: register-page-2.php");
        } else {
            echo "Was not executed";
        }
    } else if (isset($_POST["page-submit-2"])){
        $gender = $_POST["gender"];
        if($gender == "Other"){
            $gender = $_POST["genderOther"];
        }
        $region = $_POST["select-region"];
        if($region == "NCR"){
            $province = "Invalid";
        } else {
            $province = $_POST["select-province"];
        }
        $city = $_POST["select-city"];

        $sql = "INSERT INTO demogTable(gender, region, province, city) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $gender, $region, $province, $city);

        if($stmt->execute()){
            echo "Registration Complete";
            header("location: login.php");
        }

        echo $gender . $region . $province . $city;
    } else if (isset($_POST["administrator-register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $code = $_POST["referral-code"];

        $stmtCode = "SELECT * FROM userTable WHERE referralCode = " . $code ."";
        $setCode = $conn->query($stmtCode);
        $getCode = $setCode->fetch_assoc();

        $code = mt_rand(1000,999999);

        $sql = "INSERT INTO userTable(username, userpass, userrole, email, referralcode) VALUES (?,?,1,?,?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("sssi", $username, $password, $email, $code);

        if($stmt->execute()){
            echo "Registration Complete";
            header("location: administrator-register.php");
        }
    }
}
?>