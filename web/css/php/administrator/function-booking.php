<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require '../connect.php';
        if(isset($_POST["bookpost"])){
            $destination = $_POST["Destination"];
            $price = $_POST["Price"];
            $class = $_POST["class"];
            $time = $_POST["Time"];
            $startDate = $_POST["start_date"];
            $endDate = $_POST["end_date"];
            $deptDetails = $_POST["deptDetails"];
            $arvDetails = $_POST["arrivalDetails"];
            $FlightNo = $_POST["FlightNos"];
            $is_promo = $_POST["promo"];
            $seats = $_POST["totalSeats"];
            
            if(strpos($price, ",") !== false){
                $priceArray = explode(",", $price);
                $price = serialize($priceArray);
            }

            if(strpos($FlightNo, ",") !== false){
                $FlightNoArray = explode(",", $FlightNo);
                $FlightNo = serialize($FlightNoArray);
            }

            if(strpos($time,",") !== false){
                $timeArray = explode(",", $time);
                $time = serialize($timeArray);
            }

            $class = serialize($class);

            $vehicleType = $_SESSION["vehicleType"];
            $type = $_SESSION["type"];

            $sql = "INSERT INTO postTable(destination, vehicleType, is_promo, price, class, traveltime, startDate, endDate, deptDetails, arrivalDetails, flightNo, total_seats) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssissssssssi", $destination, $vehicleType, $is_promo, $price, $class, $time, $startDate, $endDate, $deptDetails, $arvDetails, $FlightNo, $seats);

            if($stmt->execute()){
                if($vehicleType == "Air"){
                    $remove = "Air";
                    $key = array_search($remove, $type);
                    if($key !== false){
                        array_splice($type, $key, 1);
                    }
                    $_SESSION["type"] = $type;
                    if(empty($type)){
                        header("location: administrator-homepage.php");
                    } else {
                        if(in_array("Sea", $type)){
                            $_SESSION["vehicleType"] = "Sea";
                            header("location: administrator-booking-Sea.php");
                        } else if(in_array("Land", $type)){
                            $_SESSION["vehicleType"] = "Land";
                            header("location: administrator-booking-Land.php");
                        }
                    }
                } else if($vehicleType == "Sea"){
                    $remove = "Sea";
                    $key = array_search($remove, $type);
                    if($key !== false){
                        array_splice($type, $key, 1);
                    }
                    $_SESSION["type"] = $type;
                    if(empty($type)){
                        header("location: administrator-homepage.php");
                    } else {
                        if(in_array("Land", $type)){
                            $_SESSION["vehicleType"] = "Land";
                            header("location: administrator-booking-Land.php");
                        }
                    }
                } else if ($vehicleType == "Land"){
                    $remove = "Land";
                    $key = array_search($remove, $type);
                    if($key !== false){
                        array_splice($type, $key, 1);
                    }
                    $_SESSION["type"] = $type;

                    header("Location: administrator-homepage.php");
                }
            }
        } else if(isset($_POST["type_submit"])){
            $type = $_POST["type"];
            $_SESSION["type"] = $type;
            if(in_array("Air", $type)){
                $_SESSION["vehicleType"] = "Air";
                header("location: administrator-booking.php");
            }else if(in_array("Sea", $type)){
                $_SESSION["vehicleType"] = "Sea";
                header("location: administrator-booking-Sea.php");
            } else if(in_array("Land", $type)){
                $_SESSION["vehicleType"] = "Land";
                header("location: administrator-booking-Land.php");
            }
        }
    }
?>