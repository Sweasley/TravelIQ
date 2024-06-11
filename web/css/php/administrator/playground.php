<?php
// Include the database connection file
include '../connect.php';

// Fetch data from the database
$sql = "SELECT gender AS gender, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY gender ORDER BY count desc";
$result = $conn->query($sql);

$region = "SELECT region AS region, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY region ORDER BY count desc";
$getRegion=$conn->query($region);

$showProvince = "SELECT province AS province, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY province ORDER BY count DESC";
$getProvince=$conn->query($showProvince);

$showCity = "SELECT city AS city, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY city ORDER BY count DESC";
$getCity=$conn->query($showCity);

// Store the data in an array
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$regiondata = array();
if ($getRegion->num_rows > 0) {
    while($row = $getRegion->fetch_assoc()) {
        $regiondata[] = $row;
    }
}

$provincedata = array();
if ($getProvince->num_rows > 0) {
    while($row = $getProvince->fetch_assoc()) {
        $provincedata[] = $row;
    }
}

$citydata = array();
if ($getCity->num_rows > 0) {
    while($row = $getCity->fetch_assoc()) {
        $citydata[] = $row;
    }
}
// Convert the data array to JSON format
$jsonData = json_encode($data, JSON_NUMERIC_CHECK);
$jsonData1 = json_encode($regiondata, JSON_NUMERIC_CHECK);
$jsonData2 = json_encode($provincedata, JSON_NUMERIC_CHECK);
$jsonData3 = json_encode($citydata, JSON_NUMERIC_CHECK);

// Output the JSON data
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<canvas id="myChart" width="300" height="300" style="max-width: 100%; max-height: 100%; height: auto;"></canvas>
<canvas id="regionChart" width="300" height="300" style="max-width: 100%; max-height: 100%; height: auto;"></canvas>
<!-- <canvas id="provinceChart" width="300" height="300" style="max-width: 100%; max-height: 100%; height: auto;"></canvas>
<canvas id="cityChart" width="300" height="300" style="max-width: 100%; max-height: 100%; height: auto;"></canvas> -->
    <script>
        // Parse the JSON data
        var data = <?php echo $jsonData; ?>;

        // Create the pie chart
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.map(function(item) { return item.gender; }),
                datasets: [{
                    data: data.map(function(item) { return item.count; }),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Parse the JSON data
        var data1 = <?php echo $jsonData; ?>;

        // Create the pie chart
        var ctx = document.getElementById('regionChart').getContext('2d');
        var myChart1 = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data1.map(function(item) { return item.region; }),
                datasets: [{
                    data: data1.map(function(item) { return item.count; }),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>