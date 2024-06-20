document.addEventListener("DOMContentLoaded", function () {
  // Get data from HTML data attributes
  const monthlyProfitData = JSON.parse(
    document
      .getElementById("monthlyProfitData")
      .getAttribute("data-monthly-profit")
  );
  const genderDistributionData = JSON.parse(
    document
      .getElementById("genderDistributionData")
      .getAttribute("data-gender-distribution")
  );
  const regionPopulationData = JSON.parse(
    document
      .getElementById("regionPopulationData")
      .getAttribute("data-region-population")
  );

  // Create Monthly Profit Chart
  const monthlyProfitChartCanvas =
    document.getElementById("monthlyProfitChart");
  new Chart(monthlyProfitChartCanvas, {
    type: "bar",
    data: {
      labels: monthlyProfitData.map((item) => item.month),
      datasets: [
        {
          label: "Total Amount",
          data: monthlyProfitData.map((item) => item.total_amount),
          backgroundColor: "rgba(54, 162, 235, 0.2)",
          borderColor: "rgba(54, 162, 235, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  // Create Gender Distribution Chart
  const genderChartCanvas = document.getElementById("genderChart");
  new Chart(genderChartCanvas, {
    type: "bar",
    data: {
      labels: genderDistributionData.map((item) => item.gender),
      datasets: [
        {
          label: "Count",
          data: genderDistributionData.map((item) => item.count),
          backgroundColor: "rgba(255, 99, 132, 0.2)",
          borderColor: "rgba(255, 99, 132, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  // Create Region Population Chart
  const regionChartCanvas = document.getElementById("regionChart");
  new Chart(regionChartCanvas, {
    type: "bar",
    data: {
      labels: regionPopulationData.map((item) => item.region),
      datasets: [
        {
          label: "Population",
          data: regionPopulationData.map((item) => item.population),
          backgroundColor: "rgba(75, 192, 192, 0.2)",
          borderColor: "rgba(75, 192, 192, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});
