<?php
// Include the database connection file
include '../connect.php';

// Fetch data from the database
$sql = "SELECT Month, SUM(amount) AS MONTH FROM profitTable GROUP BY Month";
$result = $conn->query($sql);

// Store the data in an array
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
?>