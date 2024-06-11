<?php
session_start();
require "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fetch monthly profit data
$getMonthlyProfit = $conn->query("SELECT MONTHNAME(transactiondate) AS month, SUM(amount) AS total_amount FROM profitTable GROUP BY MONTH");
$monthlyProfitData = [];
while ($row = $getMonthlyProfit->fetch_assoc()) {
    $monthlyProfitData[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Graphs with Chart.js and Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Monthly Profit</h3>
                <canvas id="monthlyProfitChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Table for Monthly Profit -->
    <div class="container mt-5">
        <div class="row">
            <h3 class="fs-4 mb-3 d-flex justify-content-between align-items-center">Monthly Profit</h3>
            <div class="col">
                <div class="table-responsive">
                    <table class="table bg-white rounded shadow-sm table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col" width="300">Month</th>
                                <th scope="col">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($monthlyProfitData as $row) {
                                echo "<tr><td>{$row['month']}</td><td>{$row['total_amount']}</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get data from PHP and parse it
            const monthlyProfitData = <?php echo json_encode($monthlyProfitData); ?>;

            // Transform monthly profit data for Chart.js
            const monthlyLabels = monthlyProfitData.map(item => item.month);
            const monthlyValues = monthlyProfitData.map(item => item.total_amount);

            // Data for Monthly Profit
            const monthlyProfitChartData = {
                labels: monthlyLabels,
                datasets: [{
                    label: "Total Amount",
                    data: monthlyValues,
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1
                }]
            };

            // Config for Monthly Profit
            const monthlyProfitChartConfig = {
                type: "bar",
                data: monthlyProfitChartData,
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // Create Monthly Profit Chart
            const monthlyProfitChart = new Chart(
                document.getElementById("monthlyProfitChart"),
                monthlyProfitChartConfig
            );
        });
    </script>
</body>
</html>
