<!DOCTYPE html>
<html lang="en">
    @include('welcome')
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Managed Tables - Extension Combination</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->

	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->

		<!-- end #header -->



		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->

			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Les vaccination daja fait <small></small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-2 -->

				<!-- end col-2 -->
				<!-- begin col-10 -->
				<div class="col-xl-10">
					<div class="panel panel-inverse">
						<!-- begin panel-heading -->

						<!-- end panel-heading -->
						<!-- begin panel-body -->
						<div class="panel-body">
							<table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
								<thead>
									<tr>
										{{-- <th width="1%"></th> --}}
										{{-- <th width="1%" data-orderable="false"></th> --}}
										<th class="text-nowrap">Nom</th>
										<th class="text-nowrap">Prenom</th>
										<th class="text-nowrap">age</th>
										<th class="text-nowrap">vaccin</th>
										{{-- //<th class="text-nowrap">CSS grade</th> --}}
									</tr>
								</thead>
								<tbody>
                                    @if ($vaccinations && $vaccinations->count() > 0)
                                    @foreach (  $vaccinations as $vaccination )
                                    <tr class="odd gradeX">
                                        {{-- <td width="1%" ></td>
                                        <td width="1%"></td> --}}
                                        <td>{{$vaccination->patient->nom}}</td>
                                        <td> {{$vaccination->patient->prenom}}</td>
                                        <td>{{$vaccination->date}}</td>
                                        <td>{{$vaccination->vaccin->nomvaccin}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
								</tbody>
							</table>
						</div>
						<!-- end panel-body -->
					</div>
				</div>
				<!-- end col-10 -->
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

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-autofill/js/dataTables.autoFill.min.js"></script>
	<script src="../assets/plugins/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
	<script src="../assets/plugins/datatables.net-colreorder-bs4/js/colReorder.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="../assets/plugins/datatables.net-keytable-bs4/js/keyTable.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js"></script>
	<script src="../assets/plugins/datatables.net-rowreorder-bs4/js/rowReorder.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
	<script src="../assets/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="../assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/pdfmake/build/pdfmake.min.js"></script>
	<script src="../assets/plugins/pdfmake/build/vfs_fonts.js"></script>
	<script src="../assets/plugins/jszip/dist/jszip.min.js"></script>
	<script src="../assets/js/demo/table-manage-combine.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>
