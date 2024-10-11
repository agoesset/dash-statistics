<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>



    <link rel="shortcut icon" href="{{asset('assets/compiled/svg/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">



    <link rel="stylesheet" href="{{asset('assets/compiled/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/compiled/css/iconly.css')}}">

    <style>
        #app,
        #main {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .page-content {
            padding: 20px;
            /* Memberikan padding di sekitar konten */
        }

        .col-12 {
            max-width: 100%;
        }

        .card {
            margin-bottom: 20px;
            /* Memberikan jarak antar kartu */
        }

        header.mb-3 {
            margin-bottom: 20px;
            /* Memberikan jarak antara header dan konten */
        }

        .page-heading {
            text-align: center;
            margin-bottom: 0px;
            /* Memberikan jarak antara heading dan konten */
        }

        .footer {
            padding: 10px 20px;
            /* Memberikan padding pada footer agar terlihat lebih rapi */
        }

        .d-flex {
            gap: 10px;
            /* Memberikan jarak antar elemen di dalam kontainer flex */
        }
    </style>

</head>

<body>
    <script src="{{asset('assets/static/js/initTheme.js')}}"></script>
    <div id="app">

        <div id="main">
            <header class="mb-3" style="margin-top: 20px;">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading ">
                <h3>Profile Statistics <a href="">@pak_suswono</a></h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="d-flex align-items-center">
                                            <div class="stats-icon purple mb-2">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                            <div class="ms-3 flex-grow-1">
                                                <h4 class="text-primary font-extrabold mb-0">Jangkauan Akun</h4>
                                            </div>
                                            <h4 class="font-extrabold text-primary mb-0">112.000</h4>
                                        </div>

                                        <div class="row">
                                            <!-- Kolom Kiri -->
                                            <div class="col-md-6">
                                                <div class="row mt-5">
                                                    <div class="col-7">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                                <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Jakarta Pusat</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <h5 class="mb-0 text-end">862</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-jakpus"></div>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-7">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                                <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Jakarta Barat</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <h5 class="mb-0 text-end">862</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-jakbar"></div>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-7">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                                <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Jakarta Timur</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <h5 class="mb-0 text-end">862</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-jaktim"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Kolom Kanan -->
                                            <div class="col-md-6">
                                                <div class="row mt-5">
                                                    <div class="col-7">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                                <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Jakarta Selatan</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <h5 class="mb-0 text-end">862</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-jaksel"></div>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-7">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                                <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Jakarta Utara</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <h5 class="mb-0 text-end">862</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-jakut"></div>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-7">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                                <use xlink:href="{{asset('assets/static/images/bootstrap-icons.svg#circle-fill')}}" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Kepulauan Seribu</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <h5 class="mb-0 text-end">862</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-kepser"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-12">

                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                            by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>


    <script src="{{asset('assets/compiled/js/app.js')}}"></script>



    <!-- Need: Apexcharts -->
    <script src="{{asset('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/static/js/pages/dashboard.js')}}"></script>

</body>

</html>