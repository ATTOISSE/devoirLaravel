@extends('default')

@section('content')
<link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
<link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="assets/css/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="assets/images/favicon.png" />
<div class="scroller">
    <!-- partial:partials/_sidebar.html -->
    <div class="row">
        <nav class="sidebar sidebar-offcanvas col-md-3" id="sidebar">
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="assets/images/faces/phto.jpg" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">ATTOISSE Mohamed</h5>
                                <span>Gold Member</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('dashbord')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Formulaire</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('medecins.create')}}">Ajouter
                                    Medecin</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('vaccins.create')}}">Ajouter
                                    Vaccin</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <button class="nav-link bg-dark" href="" id="btnListe">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Listes Element</span>
                    </button>
                </li>

            </ul>

        </nav>
        <div class="col-md-8 mt-5">
            <div class=" container row" style="background-color: #001A13;">
                <div class="col-md-3">
                    <img src="assets/images/faces/statistic.png" width="200" height="100" alt="">
                </div>
                <div class="col-md-7 mt-2 text-center">
                    <h2>Statistique de notre site</h2>
                    <p class="text-secondary">de suivi de vaccination</p>
                </div>
                <div class="col-md-2 mt-4">
                    <button class="btn btn-outline-primary" id="btnSavoirPlus">En Savoir Plus</button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card border border-bottom" style="background-color: #01031A;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0 text-center mx-4">{{$nombre_doctor}}</h3>

                                        <div class="icon icon-box-success ">
                                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Doctor Number</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border border-bottom" style="background-color: #01031A;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0 text-center mx-4">{{$nombre_vaccin}}</h3>

                                        <div class="icon icon-box-danger ">
                                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Vaccin Number</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border border-bottom" style="background-color: #01031A;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0 text-center mx-4">{{$nombre_patient}}</h3>

                                        <div class="icon icon-box-light ">
                                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Patient Number</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border border-bottom" style="background-color: #01031A;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0 text-center mx-4">{{$nombre_vaccination}}</h3>

                                        <div class="icon icon-box-light ">
                                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">vaccinate Nber</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="liste" style="margin-top: -150px;">
            <div class="container col-md-8 offset-3">
                <div class="card-header text-white" style="background-color: #001A13;">
                    <h3 class="text-center">Liste des Medecins</h3>
                </div>
                <table class="table table-responsive">
                    <thead>
                        <th>N°</th>
                        <th>Nom </th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($medecins as $medecin)
                        <tr>
                            <td>{{$medecin->id}}</td>
                            <td>{{$medecin->nom}}</td>
                            <td>{{$medecin->prenom}}</td>
                            <td>{{$medecin->email}}</td>
                            <td>{{$medecin->telephone}}</td>
                            <td>
                                <div class="d-flex gap-2">

                                    {!! Form::open(['method' => 'DELETE','route' => ['medecins.destroy',
                                    $medecin->id]])
                                    !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="container col-md-8 offset-3 mt-5">
                <div class="card-header text-white" style="background-color: #001A13;">
                    <h3 class="text-center">Liste des Vaccins</h3>
                </div>
                <table class="table table-responsive">
                    <thead>
                        <th>N°</th>
                        <th>Nom </th>
                        <th>Dose</th>
                        <th>Lot</th>
                        <th>Date de Creation</th>
                        <th>Date d'Expiration</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($vaccins as $vaccin)
                        <tr>
                            <td>{{$vaccin->id}}</td>
                            <td>{{$vaccin->nom}}</td>
                            <td>{{$vaccin->dose}}</td>
                            <td>{{$vaccin->lot}}</td>
                            <td>{{$vaccin->dateCreation}}</td>
                            <td>{{$vaccin->dateExpiration}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('vaccins.edit', [$vaccin->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['vaccins.destroy', $vaccin->id]])
                                    !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-4 f-s-10">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?= $chaine_sexe ?>
            ]);

            var options = {
                title: 'Repartition par Sexe'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
        </script>

        <body>
            <div id="piechart" class="container graph col-md-4 " hidden>
            </div>
        </body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.com/highcharts.js"></script>
        <script src="https://cdnjs.com/libraries/Chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>


        <script src="asset/js/app.js"></script>
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/dashboard.js"></script>

        @stop