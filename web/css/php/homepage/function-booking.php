<?php

require '../connect.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $Firstname = $_POST["firstname"];
        $Middlename = $_POST["middlename"];
        $Lastname = $_POST["lastname"];
        $Bookdate = $_POST["bookdate"];
        $Roundtrip = $_POST["return"];
        $Class = $_POST["class2"];
        $username = $_SESSION["username"];
        $Passengers = $_POST["passengers"];
        $vehicleType = $_POST["vehicleType"];
        $_SESSION["controlNo"] = $_POST["controlNo"];
        $destination = $_POST["destination"];

        $Suffix = empty($_POST["suffix"]) ? "None" : $_POST["suffix"];
        $ReturnDate = ($Roundtrip == "Yes") ? $_POST["return-date"] : "Invalid";

        $sql = "INSERT INTO bookingTable(username, traveltype, vehicleType, firstname, middleinitial, lastname, suffix, destination, deptDate, returnTrip, returnDate, class) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

        echo $Passengers;

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssss", $username, $Passengers, $vehicleType, $Firstname, $Middlename, $Lastname, $Suffix, $destination, $Bookdate, $Roundtrip, $ReturnDate, $Class);

        if($stmt->execute()){
            if($Passengers == "Solo"){
                $_SESSION["partycount"] = 1;
                header("Location: payment.php");
            } else if($Passengers == "Duo"){
                $_SESSION["vehicleType"] = $vehicleType;
                $_SESSION["destination"] = $destination;
                $_SESSION["partycount"] = 2;
                header("Location: customer-booking-couple.php");
            } else if($Passengers == "Party"){
                $_SESSION["partycount"] = 1;
                header("Location: customer-booking-party.php");
            }
            exit();
        } else {
            echo "Booking Failed";
        }
    }else if (isset($_POST["submit-couple"])){
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $Firstname = $_POST["firstname"];
        $Middlename = $_POST["middlename"];
        $Lastname = $_POST["lastname"];
        $Bookdate = $_POST["bookdate"];
        $Roundtrip = $_POST["return"];
        $Class = $_POST["class2"];
        $username = $_SESSION["username"];
        $vehicleType = $_POST["vehicleType"];
        $_SESSION["controlNo"] = $_POST["controlNo"];
        $destination = $_POST["destination"];
    
        $Suffix = empty($_POST["suffix"]) ? "None" : $_POST["suffix"];
        $ReturnDate = ($Roundtrip == "Yes") ? $_POST["return-date"] : "Invalid";
    
        $sql = "INSERT INTO bookingTable(username, vehicleType, firstname, middleinitial, lastname, suffix, destination, deptDate, returnTrip, returnDate, class) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssss", $username, $vehicleType, $Firstname, $Middlename, $Lastname, $Suffix, $destination, $Bookdate, $Roundtrip, $ReturnDate, $Class);
    
        if($stmt->execute()){
            header("location: payment.php");
        } else {
            echo "Booking Failed";
        }
    } else if (isset($_POST["submit-next"])){
        $Firstname = $_POST["firstname"];
        $Middlename = $_POST["middlename"];
        $Lastname = $_POST["lastname"];
        $Bookdate = $_POST["bookdate"];
        $Roundtrip = $_POST["return"];
        $Class = $_POST["class2"];
        $username = $_SESSION["username"];
        $vehicleType = $_POST["vehicleType"];
        $_SESSION["controlNo"] = $_POST["controlNo"];
        $destination = $_POST["destination"];
    
        $Suffix = empty($_POST["suffix"]) ? "None" : $_POST["suffix"];
        $ReturnDate = ($Roundtrip == "Yes") ? $_POST["return-date"] : "Invalid";
    
        $sql = "INSERT INTO bookingTable(username, vehicleType, firstname, middleinitial, lastname, suffix, destination, deptDate, returnTrip, returnDate, class) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssss", $username, $vehicleType, $Firstname, $Middlename, $Lastname, $Suffix, $destination, $Bookdate, $Roundtrip, $ReturnDate, $Class);
    
        if($stmt->execute()){
            $_SESSION["partycount"]++;
            header("location: customer-booking-party.php");
        } else {
            echo "Booking Failed";
        }
    } else if(isset($_POST["submit-party"])){
        $Firstname = $_POST["firstname"];
        $Middlename = $_POST["middlename"];
        $Lastname = $_POST["lastname"];
        $Bookdate = $_POST["bookdate"];
        $Roundtrip = $_POST["return"];
        $Class = $_POST["class2"];
        $username = $_SESSION["username"];
        $vehicleType = $_POST["vehicleType"];
        $_SESSION["controlNo"] = $_POST["controlNo"];
        $destination = $_POST["destination"];
    
        $Suffix = empty($_POST["suffix"]) ? "None" : $_POST["suffix"];
        $ReturnDate = ($Roundtrip == "Yes") ? $_POST["return-date"] : "Invalid";
    
        $sql = "INSERT INTO bookingTable(username, vehicleType, firstname, middleinitial, lastname, suffix, destination, deptDate, returnTrip, returnDate, class) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssss", $username, $vehicleType, $Firstname, $Middlename, $Lastname, $Suffix, $destination, $Bookdate, $Roundtrip, $ReturnDate, $Class);
    
        if($stmt->execute()){
            $_SESSION["partycount"]++;
            header("location: payment.php");
        } else {
            echo "Booking Failed";
        }
    }
    
}
?>
