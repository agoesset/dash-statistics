<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Massuswono.com</title>

    <link rel="shortcut icon" href="{{asset('assets/compiled/svg/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/compiled/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/compiled/css/iconly.css')}}">

    <style>
        #app,
        #main {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .page-content {
            padding: 20px !important;
            /* Memberikan padding di sekitar konten */
        }

        .col-12 {
            max-width: 100% !important;
        }

        .card {
            margin-bottom: 20px !important;
            /* Memberikan jarak antar kartu */
        }

        .page-heading {
            text-align: center !important;
            margin-bottom: 0px !important;
            /* Memberikan jarak antara heading dan konten */
        }

        .footer {
            padding: 10px 20px !important;
            /* Memberikan padding pada footer agar terlihat lebih rapi */
        }

        .d-flex {
            gap: 10px !important;
            /* Memberikan jarak antar elemen di dalam kontainer flex */
        }

        #current-date {
            font-weight: bold !important;
            color: #00e396 !important;
        }

        .profile-title {
            font-weight: 700 !important;
            color: #435ebe !important;
        }

        #countdown {
            font-weight: bold !important;
        }

        .row.mb-4 {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
            border-bottom: 1px solid #ddd !important;
        }
    </style>

</head>

<body>
    <script src="{{asset('assets/static/js/initTheme.js')}}"></script>

    <div id="app">

        <div id="main" class="layout-horizontal">

            <header>
                <nav class="bg-primary">
                    <div class="container d-flex justify-content-center">
                        <div class="logo">
                            <span class="small">Menuju Pemilu:</span>
                            <span id="countdown" class="small"></span>
                        </div>
                    </div>
                </nav>


                <div class="header-top">
                    <div class="container d-flex justify-content-center">
                        <div class="logo">
                            <h3 class="text-center">RIDO Menang Jakarta</h3>
                        </div>
                    </div>
                </div>

            </header>

            <div class="page-content">
                <!-- Tanggal sekarang, profile statistics, dan countdown -->
                <div class="row mb-2">
                    <!-- Kolom untuk menampilkan tanggal saat ini -->
                    <div class="container d-flex justify-content-center">
                        <h4 class="text-center">Dashboard Instagram Per Hari Ini :&nbsp;<span id="current-date"></span></h4>
                    </div>
                </div>


                <div class="container">
                    <script src="https://static.elfsight.com/platform/platform.js" async></script>
                    <div class="elfsight-app-cebc6f5c-25af-4a6a-ab18-fcbb2455f8b3" data-elfsight-app-lazy></div>
                </div>

                <!-- <h4 id="date-output" class="font-extrabold text-center my-3"></h4> -->

                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Demografi Jangkauan DKI Jakarta</h6>
                                        <h6 class="font-extrabold mb-0" id="total-semua-kota"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Reach/Viewers</h6>
                                        <h6 class="font-extrabold mb-0" id="total-reach"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Like</h6>
                                        <h6 class="font-extrabold mb-0" id="total-like"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Kunjungan Profil</h6>
                                        <h6 class="font-extrabold mb-0" id="total-kunjungan"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h4 class="mb-0">Jangkauan Perkota</h4>
                                </div>
                            </div>

                            <!-- Row 1: 3 Jakarta Regions -->
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Jakarta Pusat :</h5>
                                        <h5 class="mb-0" id="total-jakpus"></h5>
                                    </div>
                                    <div id="chart-jakpus"></div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Jakarta Barat :</h5>
                                        <h5 class="mb-0" id="total-jakbar"></h5>
                                    </div>
                                    <div id="chart-jakbar"></div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Jakarta Timur :</h5>
                                        <h5 class="mb-0" id="total-jaktim"></h5>
                                    </div>
                                    <div id="chart-jaktim"></div>
                                </div>
                            </div>

                            <!-- Row 2: 3 More Jakarta Regions -->
                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Jakarta Selatan :</h5>
                                        <h5 class="mb-0" id="total-jaksel"></h5>
                                    </div>
                                    <div id="chart-jaksel"></div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Jakarta Utara :</h5>
                                        <h5 class="mb-0" id="total-jakut"></h5>
                                    </div>
                                    <div id="chart-jakut"></div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Kepulauan Seribu :</h5>
                                        <h5 class="mb-0" id="total-kepser"></h5>
                                    </div>
                                    <div id="chart-kepser"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Profile Visit -->
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Reach/Viewers</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Visitors Profile & Generational Profile dalam satu card -->
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Reach By Gender & Age</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Visitors Profile Chart -->
                                    <div class="col-6">
                                        <div id="chart-visitors-profile"></div>
                                    </div>
                                    <!-- Generational Profile Chart -->
                                    <div class="col-6">
                                        <div id="chart-generational-profile"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Interaksi</h4>
                            </div>
                            <div class="card-body">
                                <div id="area"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; Massuswono.com</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                            by <a href="https://api.whatsapp.com/send?phone=6282279388762&text=Halo%20kak%2C%20mau%20juga%20dong%20dibikinin%20dashboard%20kayak%20gini%20https%3A%2F%2Fdash.massuswono.com%20%F0%9F%98%81">iklanindulu.com</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <script src="{{asset('assets/static/js/pages/horizontal-layout.js')}}"></script>
    <script src="{{asset('assets/compiled/js/app.js')}}"></script>


    <!-- Need: Apexcharts -->
    <script src="{{asset('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{asset('assets/extensions/dayjs/dayjs.min.js')}}"></script>
    <script src="{{asset('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/static/js/pages/dashboard.js')}}"></script>

    <script>
        // Menampilkan tanggal sekarang
        function updateCurrentDate() {
            const currentDateElement = document.getElementById('current-date');
            const today = new Date();
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            currentDateElement.innerHTML = today.toLocaleDateString('id-ID', options);
        }

        updateCurrentDate(); // Panggil fungsi untuk menampilkan tanggal sekarang

        // Countdown menuju Pemilu 2024
        function startCountdown() {
            const pemiluDate = new Date('November 24, 2024 00:00:00').getTime();
            const countdownElement = document.getElementById('countdown');

            const interval = setInterval(function() {
                const now = new Date().getTime();
                const distance = pemiluDate - now;

                // Menghitung waktu yang tersisa
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Menampilkan hasil countdown
                countdownElement.innerHTML = `${days} Hari ${hours} Jam ${minutes}Menit ${seconds} Detik`;

                // Jika countdown sudah selesai
                if (distance < 0) {
                    clearInterval(interval);
                    countdownElement.innerHTML = "Pemilu 2024 telah tiba!";
                }
            }, 1000);
        }

        startCountdown(); // Panggil fungsi untuk memulai countdown
    </script>

    <script>
        // Tanggal hari ini
        const today = new Date();
        const daysArray = [];

        // Loop untuk mendapatkan 7 hari terakhir
        for (let i = 0; i < 7; i++) {
            const currentDate = new Date();
            currentDate.setDate(today.getDate() - i); // Set tanggal mundur per hari
            daysArray.push(currentDate); // Simpan ke array
        }

        // Ambil tanggal pertama dan terakhir dari array
        const firstDay = daysArray[daysArray.length - 1];
        const lastDay = daysArray[0];

        // Format tanggal untuk output
        const options = {
            day: 'numeric',
            month: 'long'
        };
        const firstDayFormatted = firstDay.toLocaleDateString('id-ID', options); // Format bahasa Indonesia
        const lastDayFormatted = lastDay.toLocaleDateString('id-ID', options); // Format bahasa Indonesia

        // Output dalam format 'Data dari tanggal 1-7 Oktober'
        const output = `Data dari tanggal ${firstDayFormatted} - ${lastDayFormatted}`;

        // Menampilkan output ke elemen dengan id 'date-output'
        document.getElementById('date-output').textContent = output;
    </script>

    <script>
        const jangkauan = @json($jangkauan);

        function sumValuesForRegion(region) {
            return jangkauan.reduce((total, item) => total + item[region], 0);
        }

        // Hitung total values untuk masing-masing kota
        const totalJakpus = sumValuesForRegion('jakpus');
        const totalJakbar = sumValuesForRegion('jakbar');
        const totalJaktim = sumValuesForRegion('jaktim');
        const totalJaksel = sumValuesForRegion('jaksel');
        const totalJakut = sumValuesForRegion('jakut');
        const totalKepser = sumValuesForRegion('kepser');

        // Hitung total keseluruhan dari semua kota
        const totalValuesKeseluruhan = totalJakpus + totalJakbar + totalJaktim + totalJaksel + totalJakut + totalKepser;

        // Tampilkan total per kota di HTML
        document.getElementById('total-jakpus').innerText = totalJakpus;
        document.getElementById('total-jakbar').innerText = totalJakbar;
        document.getElementById('total-jaktim').innerText = totalJaktim;
        document.getElementById('total-jaksel').innerText = totalJaksel;
        document.getElementById('total-jakut').innerText = totalJakut;
        document.getElementById('total-kepser').innerText = totalKepser;
        document.getElementById('total-semua-kota').innerText = totalValuesKeseluruhan;

        // Membuat chart sederhana untuk setiap kota (berdasarkan hari)
        function createChartOptions(data, color) {
            return {
                series: [{
                    name: "Akun yang dijangkau",
                    data: data,
                }],
                chart: {
                    height: 80,
                    type: "area",
                    toolbar: {
                        show: false
                    },
                },
                colors: [color],
                stroke: {
                    width: 2
                },
                grid: {
                    show: false
                },
                dataLabels: {
                    enabled: false,
                },
                xaxis: {
                    categories: jangkauan.map(item => item.hari),
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
                        show: false
                    }
                },
            };
        }

        // Render chart untuk masing-masing kota
        new ApexCharts(document.querySelector("#chart-jakpus"), createChartOptions(jangkauan.map(item => item.jakpus), "#00e396")).render();
        new ApexCharts(document.querySelector("#chart-jakbar"), createChartOptions(jangkauan.map(item => item.jakbar), "#5350e9")).render();
        new ApexCharts(document.querySelector("#chart-jaktim"), createChartOptions(jangkauan.map(item => item.jaktim), "#feb019")).render();
        new ApexCharts(document.querySelector("#chart-jaksel"), createChartOptions(jangkauan.map(item => item.jaksel), "#85f9ff")).render();
        new ApexCharts(document.querySelector("#chart-jakut"), createChartOptions(jangkauan.map(item => item.jakut), "#f46a6a")).render();
        new ApexCharts(document.querySelector("#chart-kepser"), createChartOptions(jangkauan.map(item => item.kepser), "#7c341d")).render();
    </script>

    <script>
        // Ambil data dari controller untuk reach
        const reachData = @json($reachData);

        // Ekstrak hari dan value dari reachData
        const days = reachData.map(item => item.hari); // Hari dalam data reach
        const values = reachData.map(item => item.value); // Value reach

        // Hitung total value dari reachData
        const totalValue = values.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
        document.getElementById('total-reach').innerText = totalValue;


        // Opsi untuk chart reach
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
            series: [{
                name: "Jumlah viewers",
                data: values,
            }, ],
            colors: "#435ebe",
            xaxis: {
                categories: days,
            },
        };

        var chartProfileVisit = new ApexCharts(
            document.querySelector("#chart-profile-visit"),
            optionsProfileVisit
        );

        chartProfileVisit.render();
    </script>

    <script>
        // Data mentah dari server (PHP ke JS)
        const likeData = @json($likeData);

        // Menghitung total like
        const totalLikes = Number(likeData.like_male) +
            Number(likeData.like_female) +
            Number(likeData.like_gen_alpha) +
            Number(likeData.like_gen_z) +
            Number(likeData.like_gen_millenial) +
            Number(likeData.like_baby_boomer);

        document.getElementById('total-like').innerText = totalLikes;

        // Data untuk diagram gender (Male vs Female)
        const optionsVisitorsProfile = {
            series: [Number(likeData.like_male), Number(likeData.like_female)], // Persentase gender
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

        // Data untuk diagram generasi
        const optionsGenerationalProfile = {
            series: [Number(likeData.like_gen_alpha), Number(likeData.like_gen_z), Number(likeData.like_gen_millenial), Number(likeData.like_baby_boomer)], // Persentase generasi
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

        // Render chart
        var chartVisitorsProfile = new ApexCharts(
            document.getElementById("chart-visitors-profile"),
            optionsVisitorsProfile
        );
        var chartGenerationalProfile = new ApexCharts(
            document.querySelector("#chart-generational-profile"),
            optionsGenerationalProfile
        );

        chartVisitorsProfile.render();
        chartGenerationalProfile.render();
    </script>

    <script>
        const kunjungan = @json($kunjungan);

        // Ekstrak data "like_male" dan "like_female" dari data kunjungan
        const likeMaleData = kunjungan.map(item => item.like_male);
        const likeFemaleData = kunjungan.map(item => item.like_female);

        // Ekstrak data hari untuk digunakan di x-axis
        const hari = kunjungan.map(item => item.hari);

        // Menghitung total like_male dan like_female
        const totalLikeMale = likeMaleData.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
        const totalLikeFemale = likeFemaleData.reduce((accumulator, currentValue) => accumulator + currentValue, 0);

        // Menghitung total semua kunjungan (like_male + like_female)
        const totalKunjungan = totalLikeMale + totalLikeFemale;
        document.getElementById('total-kunjungan').innerText = totalKunjungan;


        var areaOptions = {
            series: [{
                    name: "Male",
                    data: likeMaleData, // Data "Male" dari database
                },
                {
                    name: "Female",
                    data: likeFemaleData, // Data "Female" dari database
                },
            ],
            chart: {
                height: 350,
                type: "area",
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                categories: hari, // Gunakan data hari dari database
            },
        };

        var area = new ApexCharts(document.querySelector("#area"), areaOptions);

        area.render();
    </script>

</body>

</html>
