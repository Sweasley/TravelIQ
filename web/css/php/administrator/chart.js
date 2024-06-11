document.addEventListener("DOMContentLoaded", function () {
  // Fetch data from MySQL
  fetch('linegraphdata.php')
    .then(response => response.json())
    .then(data => {
      const monthlySalesData = {
        labels: data.map(entry => new Date(entry.time * 1000)), // Convert Unix timestamp to JavaScript Date
        datasets: [
          {
            label: "Temperature",
            data: data.map(entry => entry.wstemp),
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            borderWidth: 1,
          },
        ],
      };

      // Configuration options for the chart
      const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [
            {
              type: 'time',
              time: {
                unit: 'minute',
                displayFormats: {
                  minute: 'HH:mm'
                }
              }
            }
          ],
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      };

  // Create the chart
  const monthlySalesChart = new Chart(ctx, {
    type: "line",
    data: monthlySalesData,
    options: chartOptions,
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Data for Gender Distribution
  const genderData = {
    labels: ["Male", "Female"],
    datasets: [
      {
        label: "Number of People",
        data: [120, 130],
        backgroundColor: ["#007bff", "#dc3545"],
        borderColor: ["#0056b3", "#b21f2d"],
        borderWidth: 1,
      },
    ],
  };

  // Config for Gender Distribution
  const genderConfig = {
    type: "bar",
    data: genderData,
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  };

  // Create Gender Chart
  const genderChart = new Chart(
    document.getElementById("genderChart"),
    genderConfig
  );

  // Data for Population by Region in the Philippines
  const regionData = {
    labels: [
      "NCR",
      "CAR",
      "Region I",
      "Region II",
      "Region III",
      "Region IV-A",
      "Region IV-B",
      "Region V",
      "Region VI",
      "Region VII",
      "Region VIII",
      "Region IX",
      "Region X",
      "Region XI",
      "Region XII",
      "Region XIII",
      "BARMM",
    ],
    datasets: [
      {
        label: "Population (in millions)",
        data: [
          13.48, 1.8, 5.03, 3.45, 11.22, 16.19, 3.04, 5.8, 7.94, 6.4, 4.45, 3.8,
          4.99, 5.24, 4.97, 2.85, 4.92,
        ],
        backgroundColor: "#28a745",
        borderColor: "#1e7e34",
        borderWidth: 1,
      },
    ],
  };

  // Config for Population by Region
  const regionConfig = {
    type: "bar",
    data: regionData,
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  };

  // Create Region Chart
  const regionChart = new Chart(
    document.getElementById("regionChart"),
    regionConfig
  );
});
