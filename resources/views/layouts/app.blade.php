<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <title>Project | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">

        <div class="header">
            <!-- navbar -->
            <div class="navbar-custom navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <a class="navbar-brand d-block d-md-none" href="index.html">
                        <img src="assets/images/brand/logo/logo-2.svg" alt="Image">
                    </a>



                    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                            class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
                            <path
                                d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg></a>

                    <div class="d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form action="#">


                            <div class="input-group ">
                                <input class="form-control rounded-3" type="search" value="" id="searchInput"
                                    placeholder="Search">
                                <span class="input-group-append">
                                    <button class="btn  ms-n10 rounded-0 rounded-end" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search text-dark">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul
                        class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
                        <a href="#"
                            class="form-check form-switch theme-switch btn btn-ghost btn-icon rounded-circle mb-0 ">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>

                        </a>
                        </li>

                        <li class="dropdown stopevent ms-2">
                            <a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button"
                                id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-xs" data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="dropdownNotification">
                                <div>
                                    <div
                                        class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#!" class="text-muted">
                                            <span>
                                                <i class="me-1 icon-xs" data-feather="settings"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div data-simplebar style="height: 250px;">
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush notification-list-scroll">
                                            <!-- List group item -->
                                            <li class="list-group-item bg-light">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Rishi Chopra</h5>
                                                    <p class="mb-0">
                                                        Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Neha Kannned</h5>
                                                    <p class="mb-0">
                                                        Proin at elit vel est condimentum elementum id in ante. Maecenas
                                                        et sapien metus.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Nirmala Chauhan</h5>
                                                    <p class="mb-0">
                                                        Morbi maximus urna lobortis elit sollicitudin sollicitudieget
                                                        elit vel pretium.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Sina Ray</h5>
                                                    <p class="mb-0">
                                                        Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu
                                                        diam.
                                                    </p>
                                                </a>



                                            </li>
                                        </ul>
                                    </div>
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#!" class="text-inherit ">
                                            View all Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="assets/images/avatar/avatar-11.jpg"
                                        class="rounded-circle">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">


                                    <div class="lh-1 ">
                                        <h5 class="mb-1"> John E. Grainger</h5>
                                        <a href="#!" class="text-inherit fs-6">View my profile</a>
                                    </div>
                                    <div class=" dropdown-divider mt-3 mb-2"></div>
                                </div>

                                <ul class="list-unstyled">

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon"
                                                data-feather="activity"></i>Activity Log
                                        </a>


                                    </li>


                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">

                                            <i class="me-2 icon-xxs dropdown-item-icon"
                                                data-feather="settings"></i>Settings
                                        </a>
                                    </li>
                                    <li>
                                        <form class="dropdown-item p-0" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign
                                                Out
                                            </a>
                                          
                                        </form>
                                        
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- navbar vertical -->
        <div class="app-menu">
            <!-- Sidebar -->

            <div class="navbar-vertical navbar nav-dashboard">
                <div class="h-100" data-simplebar>
                    <!-- Brand logo -->
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/brand/logo/logo-2.svg"
                            alt="dash ui - bootstrap 5 admin dashboard template">
                    </a>
                    <!-- Navbar nav -->
                    <ul class="navbar-nav flex-column" id="sideNavbar">

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                                <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                                Writer
                            </a>

                            <div id="navDashboard" class="collapse" data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow" href="index.html">
                                            Documents </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow" href="pages/dashboard-analytics.html">
                                            Ai Writer </a>
                                    </li>

                                </ul>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navImage" aria-expanded="false" aria-controls="navImage">
                                <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                                Images
                            </a>

                            <div id="navImage" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow" href="index.html">
                                            Ai image </a>
                                    </li>
                                

                                </ul>
                            </div>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navChat" aria-expanded="false" aria-controls="navChat">
                                <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                                Chat
                            </a>

                            <div id="navChat" class="collapse" data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow" href="index.html">
                                            Ai Chat </a>
                                    </li>
                                

                                </ul>
                            </div>

                        </li>

                    </ul>


                </div>
            </div>

        </div>


        <!-- Page content -->
        <div id="app-content">

            <!-- Container fluid -->

            <div class="app-content-area">
                {{ $slot }}
            </div>
        </div>
    </main>

    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/feather-icons/dist/feather.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>




    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/js/vendors/chart.js"></script>




</body>

</html>
