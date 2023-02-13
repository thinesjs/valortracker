// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 2 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
  ("use strict");

  // -----------------------------------------------------------------------
  // Products performance
  // -----------------------------------------------------------------------

    let m1, m2, m3, m4, m5, m6, m7, m8, m9, m10 = 0;

    if ($('#match0').length > 0) {
        m1 = document.getElementById("match0").value;
    }
    if ($('#match1').length > 0) {
        m2 = document.getElementById("match1").value;
    }
    if ($('#match2').length > 0) {
        m3 = document.getElementById("match2").value;
    }
    if ($('#match3').length > 0) {
        m4 = document.getElementById("match3").value;
    }
    if ($('#match4').length > 0) {
        m5 = document.getElementById("match4").value;
    }
    if ($('#match5').length > 0) {
        m6 = document.getElementById("match5").value;
    }
    if ($('#match6').length > 0) {
        m7 = document.getElementById("match6").value;
    }
    if ($('#match7').length > 0) {
        m8 = document.getElementById("match7").value;
    }
    if ($('#match8').length > 0) {
        m9 = document.getElementById("match8").value;
    }
    if ($('#match9').length > 0) {
        m10 = document.getElementById("match9").value;
    }

    var option_product_performance = {

    series: [
      {
        name: "Result ",
        data: [m10, m9, m8, m7, m6, m5, m4, m3, m2, m1],
      },
    ],

    chart: {
      type: "line",
      height: 265,
      stacked: false,
      toolbar: {
        show: false,
      },
      foreColor: "#adb0bb",
      fontFamily: "DM sans",
      sparkline: {
        enabled: false,
      },
    },
    grid: {
      show: false,
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "50%",
        borderRadius: 9,
      },
    },
    colors: ["#1e4db7"],
    fill: {
      type: "solid",
      opacity: 1,
    },
    dataLabels: {
      enabled: false,
    },
    markers: {
      size: 0,
    },
    legend: {
      show: false,
    },
    xaxis: {
      type: "category",
      categories: ["Match 1", "Match 2", "Match 3", "Match 4", "Match 5", "Match 6", "Match 7", "Match 8", "Match 9", "Latest Match"],
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      show: true,
      min: -50,
      max: 50,
      tickAmount: 3,
    },
    stroke: {
      show: true,
      curve: "smooth",
      width: 5,
      lineCap: "round",
      colors: ["white"],
    },
    tooltip: {
      theme: "dark",
    },
    };

    var chart_product_performance = new ApexCharts(
    document.querySelector("#product-performance"),
    option_product_performance
    );
    chart_product_performance.render();
});
