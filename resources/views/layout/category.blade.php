<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Icon Tab --}}
    <link rel="icon" href="/img/logo.png">

    <title>Smart Parking</title>

    <link rel="icon" type="image/png" href="/img/favicon.ico" sizes="16x16">
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
    <nav class="navbar navbar-light navbar-expand-lg justify-content-md-center custom-nav">
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
        </div>
    </nav>

    <div class="d-flex" id="wrapper">
        <!--Sidebar Nav-->
        <div class="sidebar">
            <i class='bx bx-menu' id="btn"></i>
            <ul class="nav-list">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class='bx bxs-dashboard' data-toggle="tooltip" data-placement="right" title="Dashboard"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category') }}" class="active-category">
                        <i class='bx bx-user' data-toggle="tooltip" data-placement="right" title="Vehicle Category"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Vehicle Category">Vehicle
                            Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('slot') }}">
                        <i class='bx bxs-car-garage' data-toggle="tooltip" data-placement="right"
                            title="Parking Slot"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Parking Slot">Parking
                            Slot</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-parking' data-toggle="tooltip" data-placement="right" title="Dashboard"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Dashboard">Parking</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-data' data-toggle="tooltip" data-placement="right" title="Dashboard"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Dashboard">Transaction</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="log-out">
                        <i class='bx bx-log-out' data-toggle="tooltip" data-placement="right" title="Logout"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Logout">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Sidebar Nav Ends-->

        {{-- Home Contents --}}
        <div class="home-content">

            <div class="text">Vehicle Categories
                <button type="button" class="btn btn-outline-info btn-sm font-weight-bold" data-toggle="modal"
                    data-target="#form">
                    Add Vehicle Category
            </div>

            {{-- Modal Properties --}}
            <div class="modal fade" id="form" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add New Vehicle Category
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="brand">Select Brand Name:</label>
                                    <select class="form-control" id="brand">
                                        <option value="" disabled selected>Select here</option>
                                        <option>Toyota</option>
                                        <option>Suzuki</option>
                                        <option>Kia Motors</option>
                                        <option>Mitsubishi Motors</option>
                                        <option>Hyundai</option>
                                        <option>Others</option>
                                    </select>
                                    <br>
                                    <label for="type">Vehicle Type:</label>
                                    <select class="form-control" id="type">
                                        <option value="" disabled selected>Select here</option>
                                        <option>Bicycle</option>
                                        <option>Motorcycle</option>
                                        <option>Motor Scooter</option>
                                        <option>Micro</option>
                                        <option>Sedan</option>
                                        <option>VAN</option>
                                        <option>SUV</option>
                                        <option>Truck</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End of Modal Properties --}}


            {{-- Menu Contents --}}
            <div class="card custom-card">
                <p class="custom-text">Manage Category</p>
                <div class="card-body">

                    {{-- Table Contents --}}
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Vehicle Type</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kawasaki Itchigo</td>
                                <td>Motorcycle</td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        data-toggle="tooltip" data-placement="right" title="Edit">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                        data-toggle="tooltip" data-placement="right" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- End of Table Contents --}}

                </div>
            </div>
            {{-- End of Menu Contents! --}}

        </div>
        {{-- End of Home Contents --}}



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
