// Definisi Options
var optionsProfileVisit = {
  annotations: {
    position: "back",
  },
  dataLabels: {
    enabled: false,
  },
  chart: {
    type: "bar",
    height: 300,
  },
  fill: {
    opacity: 1,
  },
  series: [
    {
      name: "sales",
      data: [9, 20, 30, 20, 10, 20, 30, 20, 10, 20, 30, 20],
    },
  ],
  colors: "#435ebe",
  xaxis: {
    categories: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"],
  },
};

let optionsVisitorsProfile = {
  series: [70, 30],
  labels: ["Male", "Female"],
  colors: ["#435ebe", "#55c6e8"],
  chart: {
    type: "donut",
    width: "100%",
    height: "350px",
  },
  legend: {
    position: "bottom",
  },
  plotOptions: {
    pie: {
      donut: {
        size: "30%",
      },
    },
  },
};

// Definisi untuk Jakarta Barat, Timur, Selatan
var optionsJakbar = {
  series: [
    {
      name: "series1",
      data: [310, 800, 600, 430, 540, 340, 605, 805, 430, 540, 340, 605],
    },
  ],
  chart: {
    height: 80,
    type: "area",
    toolbar: {
      show: false,
    },
  },
  colors: ["#5350e9"],
  stroke: {
    width: 2,
  },
  grid: {
    show: false,
  },
  dataLabels: {
    enabled: false,
  },
  xaxis: {
    type: "datetime",
    categories: [
      "2018-09-19T00:00:00.000Z",
      "2018-09-19T01:30:00.000Z",
      "2018-09-19T02:30:00.000Z",
      "2018-09-19T03:30:00.000Z",
      "2018-09-19T04:30:00.000Z",
      "2018-09-19T05:30:00.000Z",
      "2018-09-19T06:30:00.000Z",
      "2018-09-19T07:30:00.000Z",
      "2018-09-19T08:30:00.000Z",
      "2018-09-19T09:30:00.000Z",
      "2018-09-19T10:30:00.000Z",
      "2018-09-19T11:30:00.000Z",
    ],
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
    },
  },
  show: false,
  yaxis: {
    labels: {
      show: false,
    },
  },
  tooltip: {
    x: {
      format: "dd/MM/yy HH:mm",
    },
  },
};

// Duplikat untuk Jakarta Timur dan Jakarta Selatan
let optionsJaktim = {
  ...optionsJakbar,
  colors: ["#008b75"],
};
let optionsJaksel = {
  ...optionsJakbar,
  colors: ["#dc3545"],
};

// Tambahkan Definisi untuk Jakarta Pusat, Utara, dan Kepulauan Seribu
let optionsJakpus = {
  ...optionsJakbar,
  colors: ["#ffc107"],
};
let optionsJakut = {
  ...optionsJakbar,
  colors: ["#007bff"],
};
let optionsKepser = {
  ...optionsJakbar,
  colors: ["#17a2b8"],
};

// Inisialisasi dan Render Chart
var chartProfileVisit = new ApexCharts(
  document.querySelector("#chart-profile-visit"),
  optionsProfileVisit
);
var chartVisitorsProfile = new ApexCharts(
  document.getElementById("chart-visitors-profile"),
  optionsVisitorsProfile
);
var chartJakbar = new ApexCharts(
  document.querySelector("#chart-jakbar"),
  optionsJakbar
);
var chartJaktim = new ApexCharts(
  document.querySelector("#chart-jaktim"),
  optionsJaktim
);
var chartJaksel = new ApexCharts(
  document.querySelector("#chart-jaksel"),
  optionsJaksel
);
var chartJakpus = new ApexCharts(
  document.querySelector("#chart-jakpus"),
  optionsJakpus
);
var chartJakut = new ApexCharts(
  document.querySelector("#chart-jakut"),
  optionsJakut
);
var chartKepser = new ApexCharts(
  document.querySelector("#chart-kepser"),
  optionsKepser
);

// Render Semua Chart
chartJaksel.render();
chartJaktim.render();
chartJakbar.render();
chartJakpus.render();
chartJakut.render();
chartKepser.render();
chartProfileVisit.render();
chartVisitorsProfile.render();
