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
    plotOptions: {},
    series: [
        {
            name: "sales",
            data: [9, 20, 30, 20, 10, 20, 30],
        },
    ],
    colors: "#435ebe",
    xaxis: {
        categories: [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ],
    },
};

// Konfigurasi untuk Generational Profile
let optionsGenerationalProfile = {
    series: [25, 35, 25, 15], // Persentase untuk tiap generasi
    labels: ["Gen Alpha", "Gen Z", "Millennial", "Baby Boomer"],
    colors: ["#FF4560", "#00E396", "#008FFB", "#775DD0"],
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

var optionsJakpus = {
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

let optionsJakbar = {
    ...optionsJakpus,
    colors: ["#008b75"],
};
let optionsJaktim = {
    ...optionsJakpus,
    colors: ["#dc3545"],
};
let optionsJaksel = {
    ...optionsJakpus,
    colors: ["#f39c12"], // Warna berbeda untuk Jaksel
};

let optionsJakut = {
    ...optionsJakpus,
    colors: ["#3498db"], // Warna berbeda untuk Jakut
};

let optionsKepser = {
    ...optionsJakpus,
    colors: ["#9b59b6"], // Warna berbeda untuk Kepulauan Seribu
};

var chartProfileVisit = new ApexCharts(
    document.querySelector("#chart-profile-visit"),
    optionsProfileVisit
);
var chartVisitorsProfile = new ApexCharts(
    document.getElementById("chart-visitors-profile"),
    optionsVisitorsProfile
);
var chartGenerationalProfile = new ApexCharts(
    document.querySelector("#chart-generational-profile"),
    optionsGenerationalProfile
);
var chartJakpus = new ApexCharts(
    document.querySelector("#chart-jakpus"),
    optionsJakpus
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
var chartJakut = new ApexCharts(
    document.querySelector("#chart-jakut"),
    optionsJakut
);
var chartKepser = new ApexCharts(
    document.querySelector("#chart-kepser"),
    optionsKepser
);

chartJaktim.render();
chartJakbar.render();
chartJakpus.render();
chartJaksel.render();
chartJakut.render();
chartKepser.render();
chartProfileVisit.render();
chartVisitorsProfile.render();
chartGenerationalProfile.render();
