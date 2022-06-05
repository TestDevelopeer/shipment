<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title>Панель управления менеджера</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="{$templateAdminPath}assets/images/favicon.ico">

	<!-- plugin css -->
	<link href="{$templateAdminPath}assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
		rel="stylesheet" type="text/css" />

	<!-- preloader css -->
	<link rel="stylesheet" href="{$templateAdminPath}assets/css/preloader.min.css" type="text/css" />

	<!-- Bootstrap Css -->
	<link href="{$templateAdminPath}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
		type="text/css" />
	<!-- Icons Css -->
	<link href="{$templateAdminPath}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="{$templateAdminPath}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

	<!-- <body data-layout="horizontal"> -->

	<!-- Begin page -->
	<div id="layout-wrapper">


		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<!-- LOGO -->
					<div class="navbar-brand-box">
						<a href="index.html" class="logo logo-dark">
							<span class="logo-sm">
								<img src="{$templateAdminPath}assets/images/logo-sm.svg" alt="" height="24">
							</span>
							<span class="logo-lg">
								<img src="{$templateAdminPath}assets/images/logo-sm.svg" alt="" height="24"> <span
									class="logo-txt">Панель</span>
							</span>
						</a>

						<a href="index.html" class="logo logo-light">
							<span class="logo-sm">
								<img src="{$templateAdminPath}assets/images/logo-sm.svg" alt="" height="24">
							</span>
							<span class="logo-lg">
								<img src="{$templateAdminPath}assets/images/logo-sm.svg" alt="" height="24"> <span
									class="logo-txt">Панель</span>
							</span>
						</a>
					</div>

					<button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
						<i class="fa fa-fw fa-bars"></i>
					</button>


				</div>


			</div>
		</header>

		<!-- ========== Left Sidebar Start ========== -->
		<div class="vertical-menu">

			<div data-simplebar class="h-100">

				<!--- Sidemenu -->
				<div id="sidebar-menu">
					<!-- Left Menu Start -->
					<ul class="metismenu list-unstyled" id="side-menu">
						<li class="menu-title" data-key="t-menu">Меню</li>

						<li>
							<a href="/shipment/panel/">
								<i data-feather="home"></i>
								<span data-key="t-dashboard">Заказы</span>
							</a>
						</li>
					</ul>

				</div>
				<!-- Sidebar -->
			</div>
		</div>
		<!-- Left Sidebar End -->



		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="main-content">

			<div class="page-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Заказы на отправку</h4>

								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">

											<thead class="table-light">
												<tr>
													<th>#ID</th>
													<th>Имя отправителя</th>
													<th>Email отправителя</th>
													<th>Телефон отправителя</th>
													<th>Пункт отправления</th>
													<th>Пункт получения</th>
													<th>Статус</th>
												</tr>
											</thead>
											<tbody>
												{foreach $forms as $form name = form}
												<tr>
													<th scope="row"><a
															href="/shipment/panel/form/{$form['form_id']}/">{$form['form_id']}</a>
													</th>
													<td><a
															href="/shipment/panel/form/{$form['form_id']}/">{$form['name_sender']}</a>
													</td>
													<td>{$form['email_sender']}</td>
													<td>{$form['phone_sender']}</td>
													<td>{$form['point_departure']}</td>
													<td>{$form['point_destination']}</td>
													<td>{$form['form_status']}</td>
												</tr>
												{/foreach}
											</tbody>
										</table>
									</div>
								</div>
								<!-- end card body -->
							</div>
							<!-- end card -->
						</div>
						<!-- end col -->


					</div>
					<!-- end row -->
				</div>
			</div>


			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<script>
								document.write(new Date().getFullYear())
							</script> ©
						</div>
						<div class="col-sm-6">
							<div class="text-sm-end d-none d-sm-block">
								Design & Develop by <a href="#!" class="text-decoration-underline">TestDeveloper</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- end main content-->

	</div>
	<!-- END layout-wrapper -->


	<!-- Right Sidebar -->
	<div class="right-bar">
		<div data-simplebar class="h-100">
			<div class="rightbar-title d-flex align-items-center p-3">

				<h5 class="m-0 me-2">Theme Customizer</h5>

				<a href="javascript:void(0);" class="right-bar-toggle ms-auto">
					<i class="mdi mdi-close noti-icon"></i>
				</a>
			</div>

			<!-- Settings -->
			<hr class="m-0" />

			<div class="p-4">
				<h6 class="mb-3">Layout</h6>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
					<label class="form-check-label" for="layout-vertical">Vertical</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
						value="horizontal">
					<label class="form-check-label" for="layout-horizontal">Horizontal</label>
				</div>

				<h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
						value="light">
					<label class="form-check-label" for="layout-mode-light">Light</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
					<label class="form-check-label" for="layout-mode-dark">Dark</label>
				</div>

				<h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
						value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
					<label class="form-check-label" for="layout-width-fuild">Fluid</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
						value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
					<label class="form-check-label" for="layout-width-boxed">Boxed</label>
				</div>

				<h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed"
						value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
					<label class="form-check-label" for="layout-position-fixed">Fixed</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable"
						value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
					<label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
				</div>

				<h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
						value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
					<label class="form-check-label" for="topbar-color-light">Light</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
						onchange="document.body.setAttribute('data-topbar', 'dark')">
					<label class="form-check-label" for="topbar-color-dark">Dark</label>
				</div>

				<h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

				<div class="form-check sidebar-setting">
					<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
						value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
					<label class="form-check-label" for="sidebar-size-default">Default</label>
				</div>
				<div class="form-check sidebar-setting">
					<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
						value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
					<label class="form-check-label" for="sidebar-size-compact">Compact</label>
				</div>
				<div class="form-check sidebar-setting">
					<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
						value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
					<label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
				</div>

				<h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

				<div class="form-check sidebar-setting">
					<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
						value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
					<label class="form-check-label" for="sidebar-color-light">Light</label>
				</div>
				<div class="form-check sidebar-setting">
					<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
						value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
					<label class="form-check-label" for="sidebar-color-dark">Dark</label>
				</div>
				<div class="form-check sidebar-setting">
					<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
						value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
					<label class="form-check-label" for="sidebar-color-brand">Brand</label>
				</div>

				<h6 class="mt-4 mb-3 pt-2">Direction</h6>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
						value="ltr">
					<label class="form-check-label" for="layout-direction-ltr">LTR</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
						value="rtl">
					<label class="form-check-label" for="layout-direction-rtl">RTL</label>
				</div>

			</div>

		</div> <!-- end slimscroll-menu-->
	</div>
	<!-- /Right-bar -->

	<!-- Right bar overlay-->
	<div class="rightbar-overlay"></div>

	<!-- JAVASCRIPT -->
	<script src="{$templateAdminPath}assets/libs/jquery/jquery.min.js"></script>
	<script src="{$templateAdminPath}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{$templateAdminPath}assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="{$templateAdminPath}assets/libs/simplebar/simplebar.min.js"></script>
	<script src="{$templateAdminPath}assets/libs/node-waves/waves.min.js"></script>
	<script src="{$templateAdminPath}assets/libs/feather-icons/feather.min.js"></script>
	<!-- pace js -->
	<script src="{$templateAdminPath}assets/libs/pace-js/pace.min.js"></script>

	<!-- apexcharts -->
	<script src="{$templateAdminPath}assets/libs/apexcharts/apexcharts.min.js"></script>

	<!-- Plugins js-->
	<script src="{$templateAdminPath}assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
	</script>
	<script
		src="{$templateAdminPath}assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
	</script>
	<!-- dashboard init -->
	<script src="{$templateAdminPath}assets/js/pages/dashboard.init.js"></script>

	<script src="{$templateAdminPath}assets/js/app.js"></script>

</body>

</html>