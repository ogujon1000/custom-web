<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- DataTables --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.js">
    </script>
    {{-- DataTables --}}

    {{-- Icon Tab --}}
    <link rel="icon" href="/img/logo.png">

    <title>Smart Parking</title>
    {{-- Ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
        <span id="nav-logout" class="ml-auto">
            {{-- <i class='bx bx-log-out ml-auto'> --}}
            <a href="#" class="ml-auto">Logout</a>
            </i>
        </span>
    </nav>

    <div class="d-flex" id="wrapper">
        <!--Sidebar Nav-->
        <div class="sidebar">
            <i class='bx bx-menu' id="btn"></i>
            <ul class="nav-list">
                <li>
                    <a href="{{ route('admindash') }}">
                        <i class='bx bxs-bar-chart-square' data-toggle="tooltip" data-placement="right"
                            title="Dashboard"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('manage') }}">
                        <i class='bx bxs-cog' data-toggle="tooltip" data-placement="right" title="Manage Parking"></i>
                        <span class="links-name" data-toggle="tooltip" data-placement="right"
                            title="Manage Parking">Manage
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
                    <a href="{{ route('parkslot') }}" class="active-slot">
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

        {{-- Home Contents --}}
        <div class="home-content">

            <div class="text">Manage Slot
                <button type="button" class="btn btn-outline-danger btn-sm font-weight-bold" data-toggle="modal"
                    data-target="#form">
                    Add Slot
            </div>

            {{-- Modal Properties --}}
            <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Slot</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form method="post" action="{{ url('insert-slot') }}">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="slotNumber">Slot Number:</label>
                                    <input class="form-control" name="slotNumber">
                                </div>
                                <div class="form-group">
                                    <label for="slotName">Slot Name:</label>
                                    <input class="form-control" name="slotName">
                                </div>
                                <div class="form-group">
                                    <label for="parkRate">Parking Rate:</label>
                                    <input class="form-control" name="parkRate">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select class="form-control" name="parkStatus">
                                        <option value="" disabled selected>Select Status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End of Modal Properties --}}

            {{-- Menu Card --}}
            <div class="card custom-card">
                <p class="custom-text">Manage Slot</p>

                <div class="card-body">
                    @if (Session('success'))
                        <div class="alert alert-success">
                            {{ Session('success') }}
                        </div>
                    @endif
                    {{-- Table Contents --}}
                    <table class="table table-bordered" id="park_table">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 15%">ID</th>
                                <th style="width: 15%">Slot Name</th>
                                <th style="width: 15%">Rates</th>
                                <th style="width: 15%">Status</th>
                                <th style="width: 15%">Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($parkslots as $item)
                                <tr>
                                    <th>{{ $item->slotNumber }}</th>
                                    <td>{{ $item->slotName }}</td>
                                    <td>{{ $item->parkRate }}</td>
                                    <td class="font-weight-bold text-success">{{ $item->parkStatus }}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                    {{-- End of Table Contents --}}



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
