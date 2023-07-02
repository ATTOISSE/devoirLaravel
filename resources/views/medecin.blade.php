@include('welcome')
{{-- <!DOCTYPE html>
<html lang="en"> --}}
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Search Results</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->

		<!-- end #header -->

		<!-- begin #sidebar -->

		<div ></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Extra</a></li>
				<li class="breadcrumb-item active">Search Results</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Search Results <small>3 results found</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-12 -->
				<div class="col-md-12">
					<!-- begin result-container -->
					<div class="result-container">
						<!-- begin input-group -->
						<div class="input-group input-group-lg mb-3">
							<input type="text" class="form-control input-white" placeholder="Enter keywords here..." />
							<div class="input-group-append">
								<div class="dropdown-menu dropdown-menu-right">
									<a href="javascript:;" class="dropdown-item">Action</a>
									<a href="javascript:;" class="dropdown-item">Another action</a>
									<a href="javascript:;" class="dropdown-item">Something else here</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Separated link</a>
								</div>
								<button type="button" class="btn btn-primary"><i class="fa fa-search fa-fw"></i> Search</button>
								<button type="button" class="btn btn-primary dropdown-toggle no-caret" data-toggle="dropdown">
									<i class="fa fa-cog fa-fw"></i>
								</button>
							</div>
						</div>
						<!-- end input-group -->
						<div class="d-block d-md-flex align-items-center mb-3">
							<!-- begin filter -->
							<div class="d-flex">
								<!-- begin dropdown -->
								<div class="dropdown mr-2">
									<a href="#" class="btn btn-white btn-white-without-border dropdown-toggle" data-toggle="dropdown">
										Filters by <b class="caret"></b>
									</a>
									<div class="dropdown-menu" role="menu">
										<a href="javascript:;" class="dropdown-item">Posted Date</a>
										<a href="javascript:;" class="dropdown-item">View Count</a>
										<a href="javascript:;" class="dropdown-item">Total View</a>
										<div class="dropdown-divider"></div>
										<a href="javascript:;" class="dropdown-item">Location</a>
									</div>
								</div>
								<!-- end dropdown -->
								<!-- begin btn-group -->
								<div class="btn-group">
									<a href="javascript:;" class="btn btn-white btn-white-without-border"><i class="fa fa-list"></i></a>
									<a href="javascript:;" class="btn btn-white btn-white-without-border"><i class="fa fa-th"></i></a>
									<a href="javascript:;" class="btn btn-white btn-white-without-border"><i class="fa fa-th-large"></i></a>
								</div>
								<!-- end btn-group -->
							</div>
							<!-- end filter -->
							<!-- begin pagination -->
							<div class="ml-auto d-none d-lg-block">
								<ul class="pagination mb-0">
									<li class="page-item disabled"><a href="javascript:;" class="page-link">«</a></li>
									<li class="page-item active"><a href="javascript:;" class="page-link">1</a></li>
									<li class="page-item"><a href="javascript:;" class="page-link">2</a></li>
									<li class="page-item"><a href="javascript:;" class="page-link">3</a></li>
									<li class="page-item"><a href="javascript:;" class="page-link">4</a></li>
									<li class="page-item"><a href="javascript:;" class="page-link">5</a></li>
									<li class="page-item"><a href="javascript:;" class="page-link">6</a></li>
									<li class="page-item"><a href="javascript:;" class="page-link">7</a></li>
									<li class="page-item"><a href="javascript:;" class="page-link">»</a></li>
								</ul>
							</div>
							<!-- end pagination -->
						</div>
						<!-- begin result-list -->
						<ul class="result-list">
                            @if ($vaccinations && $vaccinations->count() > 0)
                          @foreach (  $vaccinations as $vaccination )

							<li>
								{{-- <a href="#" class="result-image" style="background-image: url(../assets/img/gallery/gallery-55.jpg)"></a> --}}
								<div class="result-info">
									<h1 >nom patient:{{$vaccination->patient->nom}} {{$vaccination->patient->prenom}} </h1>
									<h2 class="location">pour le vaccinde:  {{$vaccination->vaccin->nomvaccin}}</h2>
									<h2 class="desc">
                                  date:{{$vaccination->date}}
                                    </h2>
									<div class="btn-row">
										<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Analytics"><i class="fa fa-fw fa-chart-bar"></i></a>
										<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Tasks"><i class="fa fa-fw fa-tasks"></i></a>
										<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Configuration"><i class="fa fa-fw fa-cog"></i></a>
										<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Performance"><i class="fa fa-fw fa-tachometer-alt"></i></a>
										<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Users"><i class="fa fa-fw fa-user"></i></a>
									</div>
								</div>
								<div class="result-price">
                                    <form action="{{ route('confirmerVaccination', ['id' => $vaccination->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')

									<button class="btn btn-yellow btn-block">confirmer</button>

                                </form>
								</div>
							</li>
                            @endforeach
                            @endif
						</ul>
						<!-- end result-list -->
						<!-- begin pagination -->
						<div class="d-flex m-t-20">
							<ul class="pagination ml-auto mr-auto mr-lg-0">
								<li class="page-item disabled"><a href="javascript:;" class="page-link">«</a></li>
								<li class="page-item active"><a href="javascript:;" class="page-link">1</a></li>
								<li class="page-item"><a href="javascript:;" class="page-link">2</a></li>
								<li class="page-item"><a href="javascript:;" class="page-link">3</a></li>
								<li class="page-item"><a href="javascript:;" class="page-link">4</a></li>
								<li class="page-item"><a href="javascript:;" class="page-link">5</a></li>
								<li class="page-item"><a href="javascript:;" class="page-link">6</a></li>
								<li class="page-item"><a href="javascript:;" class="page-link">7</a></li>
								<li class="page-item"><a href="javascript:;" class="page-link">»</a></li>
							</ul>
						</div>
						<!-- end pagination -->
					</div>
					<!-- end result-container -->
				</div>
				<!-- end col-12 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		<!-- begin theme-panel -->

		<!-- end theme-panel -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/js/app.min.js"></script>
	<script src="../assets/js/theme/default.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>
