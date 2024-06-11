<?php
if(isset($_SERVER["REQUEST_METHOD"]) == "POST"){
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require 'connect.php';
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM userTable WHERE email = ? AND userpass = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION["username"] = $row["username"];
                $temp = $row["userrole"];
            }

            echo $_SESSION["username"];
            if($temp == 1){
                header("location: /web/php/administrator/administrator-homepage.php");
            }else{
                header("location: /web/php/homepage/customer-homepage.php");
            }

            echo "Login Sucessful";
        } else {
            echo "User does not exist";
        }
    }else{
        echo "test";
    }
}

?>