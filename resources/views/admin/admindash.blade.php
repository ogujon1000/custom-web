<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Icon Tab --}}
    <link rel="icon" href="/img/logo.png">

    <title>Smart Parking</title>
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/d4492f0e4d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    {{-- BoxIcons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- jQuery 3.6.0 --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

    {{-- jQuery UI 1.12.1 --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    {{-- Bootstrap 4.4 --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!--Nav-->
    <nav class="navbar navbar-light navbar-expand-lg custom-nav">
        <span class="image">
            <a href="#">
                <img src="{{ asset('img/logo.png') }}" id="image-text">
            </a>
        </span>
        <a class="navbar-brand" href="#" id="custom-park">Smart Parking System</a>
        {{-- <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#nav-elements"
            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <span id="nav-logout" class="ml-auto">
            {{-- <i class='bx bx-log-out ml-auto'> --}}
            <a href="#" class="ml-auto">Logout</a>
            </i>
        </span>
        {{-- <div class="collapse navbar-collapse" id="nav-elements">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing') }}">
                        <i class="fa-solid fa-home icon"></i>
                        Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa fa-users"></i>
                        <span class="text nav-text">About Us</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-sharp fa-solid fa-phone icon"></i>
                        <span class="text nav-text">Contact Us</span>
                    </a>
                </li>
            </ul>
        </div> --}}
    </nav>

    <div class="d-flex" id="wrapper">
        <!--Sidebar Nav-->
        <div class="sidebar">
            <i class='bx bx-menu' id="btn"></i>
            <ul class="nav-list">
                <li>
                    <a href="{{ route('admindash') }}" class="active-dashboard">
                        <i class='bx bxs-bar-chart-square' data-toggle="tooltip" data-placement="right" title="Dashboard"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right" title="Dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('manage') }}">
                        <i class='bx bxs-cog' data-toggle="tooltip" data-placement="right" title="Parking"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right" title="Parking">Manage
                            Parking</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('category') }}">
                        <i class='bx bxs-category' data-toggle="tooltip" data-placement="right"
                            title="Vehicle Category"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Vehicle Category">Vehicle Category</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('parkslot') }}">
                        <i class='bx bxs-car-garage' data-toggle="tooltip" data-placement="right"
                            title="Parking Slot"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Parking Slot">Parking
                            Slot</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Sidebar Nav Ends-->

        <div class="home-content">

            <div class="text">Dashboard</div>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white dash-card d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Total Vehicles Parked</p>
                            </div>
                            <i class="fa fa-car" id="icon-1"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white dash-card d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Users</p>
                            </div>
                            <i class="fa fa-user-circle" id="icon-2"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white dash-card d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">{{ $parkslots }}</h3>
                                <p class="fs-5">Available Slots</p>
                            </div>
                            <i class="fa fa-map-marker" id="icon-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white dash-card d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Parking Done Within 24 HRS</p>
                            </div>
                            <i class="fa fa-clock-o" id="icon-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            //Dashboard Toggler
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");

            btn.onclick = function() {
                sidebar.classList.toggle("active");

            } //Dashboard Toggler
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
</body>

</html>
