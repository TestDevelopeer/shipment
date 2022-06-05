<?php
/* Smarty version 3.1.30, created on 2022-06-05 17:29:07
  from "D:\GitHub\shipment\views\admin\form\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_629cbdb3626667_46200283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca1901a4e8c434f4831f6435d1ce108e0188c72' => 
    array (
      0 => 'D:\\GitHub\\shipment\\views\\admin\\form\\index.tpl',
      1 => 1654439192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cbdb3626667_46200283 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title>Форма заказа</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/images/favicon.ico">

	<!-- preloader css -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/css/preloader.min.css" type="text/css" />

	<!-- Bootstrap Css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
		type="text/css" />
	<!-- Icons Css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
								<img src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/images/logo-sm.svg" alt="" height="24">
							</span>
							<span class="logo-lg">
								<img src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/images/logo-sm.svg" alt="" height="24"> <span
									class="logo-txt">Панель</span>
							</span>
						</a>

						<a href="index.html" class="logo logo-light">
							<span class="logo-sm">
								<img src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/images/logo-sm.svg" alt="" height="24">
							</span>
							<span class="logo-lg">
								<img src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/images/logo-sm.svg" alt="" height="24"> <span
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
							<a href="/panel/">
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

					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box d-sm-flex align-items-center justify-content-between">
								<h4 class="mb-sm-0 font-size-18">Заказ №<?php echo $_smarty_tpl->tpl_vars['form']->value['form_id'];?>
</h4>

								<div class="page-title-right">
									<ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a href="/">Заказы</a></li>
										<li class="breadcrumb-item active">Заказ №<?php echo $_smarty_tpl->tpl_vars['form']->value['form_id'];?>
</li>
									</ol>
								</div>

							</div>
						</div>
					</div>
					<!-- end page title -->

					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="invoice-title">
										<div class="d-flex align-items-start">
											<div class="flex-grow-1">
												<div class="mb-4">
													<img src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/images/logo-sm.svg" alt=""
														height="24"><span class="logo-txt"><?php echo $_smarty_tpl->tpl_vars['form']->value['name_sender'];?>
</span>
												</div>
											</div>

										</div>

										<p class="mb-1"><i class="mdi mdi-email align-middle me-1"></i>
											<?php echo $_smarty_tpl->tpl_vars['form']->value['email_sender'];?>
</p>
										<p><i class="mdi mdi-phone align-middle me-1"></i> <?php echo $_smarty_tpl->tpl_vars['form']->value['phone_sender'];?>
</p>
										<p class="mb-1"><b>ИНН:</b> <?php echo $_smarty_tpl->tpl_vars['form']->value['inn_sender'];?>
</p>
									</div>
									<hr class="my-4">
									<div class="row">
										<div class="col-sm-6">
											<div>
												<h5 class="font-size-15 mb-3">Получатель:</h5>
												<h5 class="font-size-14 mb-2"><?php echo $_smarty_tpl->tpl_vars['form']->value['name_recipient'];?>
</h5>
												<p><i class="mdi mdi-phone align-middle me-1"></i>
													<?php echo $_smarty_tpl->tpl_vars['form']->value['phone_recipient'];?>
</p>
												<p class="mb-1"><b>ИНН:</b> <?php echo $_smarty_tpl->tpl_vars['form']->value['inn_recipient'];?>
</p>

											</div>
										</div>
										<div class="col-sm-6">
											<div>
												<div>
													<h5 class="font-size-15">Пункты:</h5>
													<p>Отправление: <?php echo $_smarty_tpl->tpl_vars['form']->value['point_departure'];?>
</p>
													<p>Получение: <?php echo $_smarty_tpl->tpl_vars['form']->value['point_destination'];?>
</p>
												</div>

												<div class="mt-4">
													<h5 class="font-size-15">Груз:</h5>

													<p>Вес: <?php echo $_smarty_tpl->tpl_vars['form']->value['weight'];?>
</p>
													<p>Высота: <?php echo $_smarty_tpl->tpl_vars['form']->value['height'];?>
</p>
													<p>Ширина: <?php echo $_smarty_tpl->tpl_vars['form']->value['width'];?>
</p>
													<p>Длина: <?php echo $_smarty_tpl->tpl_vars['form']->value['length'];?>
</p>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div>
												<div>
													<h5 class="font-size-15">Статус:</h5>
													<div class="mb-3">
														<input class="form-control" type="text"
															placeholder="Введите статус заказа"
															value="<?php echo $_smarty_tpl->tpl_vars['form']->value['form_status'];?>
" id="status_text"
															data-form="<?php echo $_smarty_tpl->tpl_vars['form']->value['form_id'];?>
">
													</div>
													<button type="button"
														class="btn btn-primary waves-effect waves-light"
														id="save_status">Сохранить статус</button>
													<button type="button"
														class="btn btn-danger waves-effect waves-light"
														id="delete_order">Удалить заказ</button>
												</div>


											</div>
										</div>
									</div>

									<div class="py-2 mt-3">
										<h5 class="font-size-15">Информация о судне:</h5>
									</div>
									<div class="p-4 border rounded">
										<div class="mb-3">
											<label class="form-label">Выберите судно</label>
											<select class="form-select" id="select_ship">
												<option selected disabled>...</option>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipmentOptions']->value, 'ship', false, NULL, 'ship', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ship']->value) {
?>
												<option <?php if ($_smarty_tpl->tpl_vars['form']->value['shipment_options'] == $_smarty_tpl->tpl_vars['ship']->value['option_id']) {?>selected<?php }?>
													value="<?php echo $_smarty_tpl->tpl_vars['ship']->value['option_id'];?>
">
													<?php echo $_smarty_tpl->tpl_vars['ship']->value['option_name'];?>
 |
													<?php echo $_smarty_tpl->tpl_vars['ship']->value['option_regnumber'];?>
</option>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

											</select>
										</div>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['form']->value['shipment_options'] != 0) {?>
									<div class="p-4 border rounded">
										<div class="table-responsive">
											<table class="table table-nowrap align-middle mb-0">
												<thead>
													<tr>
														<th style="width: 70px;">№</th>
														<th>Регистрационный номер</th>
														<th>Название</th>
														<th>Тип</th>
														<th>Год</th>
														<th class="text-end" style="width: 120px;">Капитан</th>
													</tr>
												</thead>
												<tbody id="shipment_option">
													<tr>
														<th scope="row"><?php echo $_smarty_tpl->tpl_vars['formShip']->value['option_id'];?>
</th>
														<td>
															<?php echo $_smarty_tpl->tpl_vars['formShip']->value['option_regnumber'];?>

														</td>
														<td>
															<?php echo $_smarty_tpl->tpl_vars['formShip']->value['option_name'];?>

														</td>
														<td>
															<?php echo $_smarty_tpl->tpl_vars['formShip']->value['option_type'];?>

														</td>
														<td>
															<?php echo $_smarty_tpl->tpl_vars['formShip']->value['option_year'];?>

														</td>
														<td class="text-end"><?php echo $_smarty_tpl->tpl_vars['formShip']->value['option_skipper'];?>
</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<?php }?>
									<div class="d-print-none mt-3">
										<div class="float-end">
											<button type="button" class="btn btn-primary waves-effect waves-light"
												id="save_ship">Сохранить судно</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end row -->
				</div> <!-- container-fluid -->
			</div>
			<!-- End Page-content -->


			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<?php echo '<script'; ?>
>
								document.write(new Date().getFullYear())
							<?php echo '</script'; ?>
> ©
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
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/libs/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/libs/metismenu/metisMenu.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/libs/simplebar/simplebar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/libs/node-waves/waves.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/libs/feather-icons/feather.min.js"><?php echo '</script'; ?>
>
	<!-- pace js -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/libs/pace-js/pace.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/js/app.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateAdminPath']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
