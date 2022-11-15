<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Parking System</title>
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
    <nav class="navbar navbar-light navbar-expand-lg bg-light  justify-content-md-center custom-nav">
        <span class="image">
            <a href="#">
                <img src="{{ asset('img/logo.png') }}" id="image-text">
            </a>
        </span>
        <a class="navbar-brand" href="#" id="custom-park">Smart Parking System</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#nav-elements"
            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-elements">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
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
        </div>
    </nav>

    {{-- <nav class="navbar navbar-light navbar-expand-md bg-light justify-content-md-center justify-content-end">
        <a class="navbar-brand d-md-none d-inline" href="">Brand</a>
        <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="navbar-nav mx-auto text-md-center text-left">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item my-auto">
                    <a class="nav-link navbar-brand mx-0 d-none d-md-inline" href="">Brand</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
                <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-facebook mr-1"></i></a> </li>
                <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-twitter"></i></a> </li>
            </ul>
        </div>
    </nav> --}}

    <div class="d-flex" id="wrapper">
        <!--Sidebar Nav-->
        <div class="sidebar">
            <i class='bx bx-menu' id="btn"></i>
            <ul class="nav-list">
                <li>
                    <a href="#" class="active-dashboard">
                        <i class='bx bxs-dashboard'></i>
                        <span class="links-name">Dashboard</span>
                    </a>
                    {{-- <span class="tooltip">Dashboard</span> --}}
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="links-name">Users</span>
                    </a>
                    {{-- <span class="tooltip">Dashboard</span> --}}
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-car-garage'></i>
                        <span class="links-name">Parking Slot</span>
                    </a>
                    {{-- <span class="tooltip">Dashboard</span> --}}
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-parking'></i>
                        <span class="links-name">Parking</span>
                    </a>
                    {{-- <span class="tooltip">Dashboard</span> --}}
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-data'></i>
                        <span class="links-name">Transaction</span>
                    </a>
                    {{-- <span class="tooltip">Dashboard</span> --}}
                </li>
                <li>
                    <a href="{{ route('logout') }}" id="log-out">
                        <i class='bx bx-log-out'></i>
                        <span class="links-name">Logout</span>
                    </a>
                    {{-- <span class="tooltip">Dashboard</span> --}}
                </li>
            </ul>
        </div>
        <!--Sidebar Nav Ends-->
        <div class="home-content">
            <div class="text">Dashboard</div>
            {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In voluptate asperiores ipsam eius animi
                dolorem sit! Assumenda ipsum beatae facere ipsam eos totam qui nesciunt cum explicabo facilis, culpa
                expedita illum eum provident accusantium sed possimus, odit reiciendis cumque repellendus iste commodi
                iure consequatur nostrum. Sequi nostrum natus, blanditiis harum rerum aperiam autem voluptates sunt
                consectetur doloribus? Deserunt porro officiis quod et molestias corrupti ipsa quo libero magni numquam
                sed id sequi corporis aliquid doloribus, asperiores voluptatibus sit perferendis iusto explicabo
                cupiditate molestiae. Aliquid, quasi alias? Nostrum, dicta. Nisi vel neque ut architecto natus iure
                quasi, dolore consectetur quaerat libero.</p> --}}
        </div>
    </div>



    <script>
        //Dashboard Toggler
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
            sidebar.classList.toggle("active");

        } //Dashboard Toggler
    </script>
</body>

</html>
