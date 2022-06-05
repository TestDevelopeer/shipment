<?php
/* Smarty version 3.1.30, created on 2022-06-05 17:36:14
  from "D:\GitHub\shipment\shipment\views\default\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_629cbf5eabcc08_15215798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefff6151571d74431995356a7560756752a6509' => 
    array (
      0 => 'D:\\GitHub\\shipment\\shipment\\views\\default\\index\\index.tpl',
      1 => 1654439773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cbf5eabcc08_15215798 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />

	<!-- FAVICONS ICON -->
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>Транспортная компания</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- BOOTSTRAP STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/bootstrap.min.css" />
	<!-- FONTAWESOME STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/font-awesome.min.css" />
	<!-- OWL CAROUSEL STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/owl.carousel.min.css">
	<!-- SLICK CAROUSEL STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/slick.min.css">
	<!-- SLICK CAROUSEL STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/slick-theme.css">
	<!-- MAGNIFIC POPUP STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/magnific-popup.min.css">
	<!-- SWIPER SLIDER STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/swiper-bundle.min.css" />
	<!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/style.css">
	<!-- Lc light box popup -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/lc_lightbox.css" />
	<!-- Price Range Slider -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/css/bootstrap-slider.min.css" />


</head>

<body>

	<!-- LOADING AREA START ===== -->
	<div class="loading-area">
		<div class="loading-box"></div>
		<div class="loading-pic">
			<div id="outer-barG">
				<div id="front-barG" class="bar-animationG">
					<div id="barG_1" class="bar-lineG"></div>
					<div id="barG_2" class="bar-lineG"></div>
					<div id="barG_3" class="bar-lineG"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- LOADING AREA  END ====== -->

	<div class="page-wraper">

		<!-- HEADER START -->
		<header class="site-header header-style-3 mobile-sider-drawer-menu">

			<div class="sticky-header main-bar-wraper  navbar-expand-lg">
				<div class="main-bar">

					<div class="container-fluid clearfix">

						<div class="logo-header">
							<div class="logo-header-inner logo-header-one">
								<a href="index.html">

								</a>
							</div>
						</div>

						<!-- NAV Toggle Button -->
						<button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
							class="navbar-toggler collapsed">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar icon-bar-first"></span>
							<span class="icon-bar icon-bar-two"></span>
							<span class="icon-bar icon-bar-three"></span>
						</button>

						<!-- MAIN Vav -->
						<div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

							<ul class=" nav navbar-nav">
								<li><a href="/shipment/">Главная</a></li>
								<li><a href="/shipment/">О нас</a></li>
								<li><a href="/shipment/">Контакты</a></li>
								<li><a href="/shipment/">Оформить доставку</a></li>
							</ul>

						</div>

						<!-- Header Right Section-->
						<div class="extra-nav header-2-nav">

							<div class="extra-cell">
								<div class="header-nav-call-section">


									<div class="detail">
										<span class="title">Звонок бесплатный</span>
										<span><a href="tel:29002344241">8 800 575 23 87</a></span>
									</div>
									<div class="media">
										<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/call.png" alt="#">
									</div>
								</div>
							</div>

						</div>



					</div>


				</div>

				<!-- SITE Search -->
				<div id="search">
					<span class="close"></span>
					<form role="search" id="searchform" action="/search" method="get" class="radius-xl">
						<input class="form-control" value="" name="q" type="search" placeholder="Type to search" />
						<span class="input-group-append">
							<button type="button" class="search-btn">
								<i class="fa fa-paper-plane"></i>
							</button>
						</span>
					</form>
				</div>
			</div>

		</header>
		<!-- HEADER END -->

		<!-- CONTENT START -->
		<div class="page-content">

			<!-- Swiper -->
			<div class="twm-slider2-wrap">

				<!-- Swiper -->
				<div class="swiper twm-slider2">
					<div class="swiper-wrapper">
						<!--Slide One -->
						<div class="swiper-slide bg-cover"
							style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/bg-large.jpg);">
							<div class="h-banner-wrap">
								<div class="h-banner-left">
									<div class="h-bnr-top">
										<h2>
											<span class="title-outline">Вокруг</span>
											Всего Мира
										</h2>
										<p>Мы занимаемся доставкой грузов по всему миру</p>
										<a href="/services/" class="h-bnr-btn">Оформить</a>
									</div>

								</div>

								<div class="cross-line-box left up-down"><img
										src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/cross-line-box.png"
										alt="#"></div>
								<div class="cross-line-box right up-down"><img
										src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/cross-line-box.png"
										alt="#"></div>
								<div class="circle-left-top zoon-in-out"></div>
							</div>
						</div>

						<!--Slide Two -->
						<div class="swiper-slide bg-cover"
							style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/bg-large2.jpg);">
							<div class="h-banner-wrap">
								<div class="h-banner-left">
									<div class="h-bnr-top">
										<h2>
											<span class="title-outline">Из Любой</span>
											Точки планеты
										</h2>
										<p>Укажите откуда и куда доставить груз и мы это сделаем</p>
										<a href="/services/" class="h-bnr-btn">Оформить</a>
									</div>

								</div>

								<div class="cross-line-box left up-down"><img
										src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/cross-line-box.png"
										alt="#"></div>
								<div class="cross-line-box right up-down"><img
										src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/cross-line-box.png"
										alt="#"></div>
								<div class="circle-left-top zoon-in-out"></div>
							</div>
						</div>

						<!--Slide Three -->
						<div class="swiper-slide bg-cover"
							style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/bg-large3.jpg);">
							<div class="h-banner-wrap">
								<div class="h-banner-left">
									<div class="h-bnr-top">
										<h2>
											<span class="title-outline">Всегда</span>
											Готовы
										</h2>
										<p>Наша доставка работает круглосуточно</p>
										<a href="/services/" class="h-bnr-btn">Оформить</a>
									</div>

								</div>

								<div class="cross-line-box left up-down"><img
										src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/cross-line-box.png"
										alt="#"></div>
								<div class="cross-line-box right up-down"><img
										src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/main-slider/slider1/cross-line-box.png"
										alt="#"></div>
								<div class="circle-left-top zoon-in-out"></div>
							</div>
						</div>

					</div>
					<!-- navigation Numbers -->
					<div class="swiper-pagination"></div>
					<!-- navigation Arrow -->
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>

			</div>
			<!-- Swiper -->

			<!-- BOOKING SECTION START -->
			<div class="section-full p-t120 p-b90 site-bg-gray tw-booking-area"
				style="background-image: url(images/booking/bg-map.png);">

				<div class="container">
					<!-- TITLE START-->
					<div class="section-head center wt-small-separator-outer">
						<div class="wt-small-separator site-text-primary">
							<div>Оформить доставку</div>
						</div>
						<p class="section-head-text">Заполните форму ниже, чтобы отправить заявку на модерацию</p>
					</div>
					<!-- TITLE END-->
				</div>

				<div class="container">
					<div class="tw-booking-section">
						<div class="row">


							<div class="col-xl-3 col-lg-3 col-md-12">
								<div class="tw-booking-media">
									<div class="media">
										<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/booking/pic1.png" alt="#">
									</div>
								</div>
							</div>

							<div class="col-xl-9 col-lg-9 col-md-12">
								<div class="tw-booking-form">

									<div class="row booking-tab-container">
										<div class="col-lg-2 col-md-2 booking-tab-menu">
											<div class="list-group">
												<a href="#" class="list-group-item active text-center">
													<div class="media">
														<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/booking/icon1.png"
															alt="">
													</div>
													<span>Оформить доставку</span>
												</a>
												<a href="#" class="list-group-item text-center">
													<div class="media">
														<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/images/booking/icon2.png"
															alt="">
													</div>
													<span>Проверить статус</span>
												</a>

											</div>
										</div>
										<div class="col-lg-10 col-md-10 booking-tab">
											<!-- flight section -->
											<div class="booking-tab-content active">
												<form id="send_ship">

													<div class="row">

														<div class="col-lg-4 col-md-4">
															<div class="mb-3">
																<input name="name_sender" type="text" required
																	class="form-control" placeholder="ФИО отправителя">
															</div>
														</div>
														<div class="col-lg-4 col-md-4">
															<div class="mb-3">
																<input name="email_sender" type="text" required
																	class="form-control"
																	placeholder="Email отправителя">
															</div>
														</div>
														<div class="col-lg-4 col-md-4">
															<div class="mb-3">
																<input name="phone_sender" type="text" required
																	class="form-control"
																	placeholder="Телефон отправителя">
															</div>
														</div>



														<div class="col-lg-6 col-md-6">
															<div class="mb-3">
																<input name="point_departure" type="text" required
																	class="form-control"
																	placeholder="Пункт отправления">
															</div>
														</div>

														<div class="col-lg-6 col-md-6">
															<div class="mb-3">
																<input name="point_destination" type="text" required
																	class="form-control" placeholder="Пункт назначения">
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="mb-3">
																<input name="inn_sender" type="text" required
																	class="form-control" placeholder="ИНН отправителя">
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="mb-3">
																<input name="name_recipient" type="text" required
																	class="form-control" placeholder="ФИО получателя">
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="mb-3">
																<input name="inn_recipient" type="text" required
																	class="form-control" placeholder="ИНН получателя">
															</div>
														</div>
														<div class="col-lg-4 col-md-4">
															<div class="mb-3">
																<input name="phone_recipient" type="text" required
																	class="form-control"
																	placeholder="Телефон получателя">
															</div>
														</div>


														<div class="col-lg-3 col-md-3">
															<div class="mb-3">
																<input name="weight" type="text" required
																	class="form-control" placeholder="Вес груза">
															</div>
														</div>
														<div class="col-lg-3 col-md-3">
															<div class="mb-3">
																<input name="height" type="text" required
																	class="form-control" placeholder="Высота">
															</div>
														</div>
														<div class="col-lg-3 col-md-3">
															<div class="mb-3">
																<input name="width" type="text" required
																	class="form-control" placeholder="Ширина">
															</div>
														</div>
														<div class="col-lg-3 col-md-3">
															<div class="mb-3">
																<input name="length" type="text" required
																	class="form-control" placeholder="Длина">
															</div>
														</div>



														<div class="col-lg-12 col-md-12">
															<div class="tw-booking-footer">
																<div class="tw-booking-footer-btn">
																	<button type="button"
																		class="btn-half site-button send_form">
																		<span>Отправить</span><em></em>
																	</button>
																</div>
																<span class="tw-booking-footer-text">Груз</span>
															</div>

														</div>

													</div>

												</form>
											</div>
											<!-- train section -->
											<div class="booking-tab-content">
												<form class="track-and-trace-form" id="check_ship">

													<div class="row">

														<div class="col-lg-12 col-md-12">
															<div class="mb-3">
																<input name="form_id" type="text" required
																	class="form-control" placeholder="Номер груза">
															</div>
														</div>




														<div class="col-lg-12 col-md-12">
															<div class="tw-booking-footer">
																<div class="tw-booking-footer-btn">
																	<button type="button"
																		class="btn-half site-button check_form">
																		<span>Проверить</span><em></em>
																	</button>
																</div>
																<span class="tw-booking-footer-text">Статус</span>
															</div>

														</div>

													</div>

												</form>
											</div>


										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<!-- BOOKING SECTION END -->


		</div>
		<!-- CONTENT END -->

		<!-- FOOTER START -->
		<footer class="footer-light">



			<div class="ftr-bg">


				<div class="footer-bottom">
					<div class="container">
						<div class="footer-bottom-info">

							<div class="footer-copy-right">
								<span class="copyrights-text">Copyright © 2022 by TestDeveloper.</span>
							</div>

						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- FOOTER END -->

		<!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

	</div>



	<!-- JAVASCRIPT  FILES ========================================= -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
><!-- JQUERY.MIN JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/popper.min.js"><?php echo '</script'; ?>
><!-- POPPER.MIN JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/bootstrap.min.js"><?php echo '</script'; ?>
><!-- BOOTSTRAP.MIN JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/magnific-popup.min.js"><?php echo '</script'; ?>
><!-- MAGNIFIC-POPUP JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/waypoints.min.js"><?php echo '</script'; ?>
><!-- WAYPOINTS JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/counterup.min.js"><?php echo '</script'; ?>
><!-- COUNTERUP JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/waypoints-sticky.min.js"><?php echo '</script'; ?>
><!-- STICKY HEADER -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/isotope.pkgd.min.js"><?php echo '</script'; ?>
><!-- MASONRY  -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/imagesloaded.pkgd.min.js"><?php echo '</script'; ?>
><!-- MASONRY  -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/owl.carousel.min.js"><?php echo '</script'; ?>
><!-- OWL  SLIDER  -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/slick.min.js"><?php echo '</script'; ?>
><!-- SLICK  Slider  -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/theia-sticky-sidebar.js"><?php echo '</script'; ?>
><!-- STICKY SIDEBAR  -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/jquery.bootstrap-touchspin.js"><?php echo '</script'; ?>
><!-- FORM JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/lc_lightbox.lite.js"><?php echo '</script'; ?>
><!-- IMAGE POPUP -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/bootstrap-slider.min.js"><?php echo '</script'; ?>
><!-- Form js -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/swiper-bundle.min.js"><?php echo '</script'; ?>
><!-- Swiper js -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/jquery.bgscroll.js"><?php echo '</script'; ?>
><!-- BACKGROUND SCROLL -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/custom.js"><?php echo '</script'; ?>
><!-- CUSTOM FUCTIONS  -->
	<?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
><!-- CUSTOM FUCTIONS  -->

</body>

</html><?php }
}
