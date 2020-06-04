<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />
	
	<title><?php echo $title ?></title>

	<!-- Import CSS -->
		<!-- Font Awesome -->
		<link href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
		<!-- Bootstrap -->
		<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
		<!-- Ionicons -->
		<link href="<?php echo base_url('assets/plugins/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
		<!-- Typicons -->
		<link href="<?php echo base_url('assets/plugins/typicons.font/typicons.css') ?>" rel="stylesheet">
		<!-- Sidebar css -->
		<link href="<?php echo base_url('assets/plugins/sidebar/sidebar.css') ?>" rel="stylesheet">
		<!-- Horizontal-Menu css-->
		<link id="switcher" href="<?php echo base_url('assets/plugins/horizontal-menu/horizontal-menu.css') ?>" rel="stylesheet">
		<!-- lightslider Css -->
		<link href="<?php echo base_url('assets/plugins/lightslider/css/lightslider.min.css') ?>" rel="stylesheet">
		<!-- Custom Scroll bar-->
		<link href="<?php echo base_url('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') ?>" rel="stylesheet"/>
		<!-- Select2 css -->
		<link href="<?php echo base_url('assets/plugins/select2/css/select2.min.css') ?>" rel="stylesheet">
		<!-- morris css -->
		<link href="<?php echo base_url('assets/plugins/morris.js/morris.css') ?>" rel="stylesheet">
		<!--Bootstrap-daterangepicker css-->
		<link href="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet" >
		<!-- Default Style -->
		<link href="<?php echo base_url('assets/css/dashboard-four.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/dashboard-four-dark.css') ?>" rel="stylesheet">

		<!-- Icon Style -->
		<link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet">
		<!--crypto Css -->
		<link href="<?php echo base_url('assets/plugins/cryptofont/css/cryptofont.min.css') ?>" rel="stylesheet">
		<!--Flag Css -->
		<link href="<?php echo base_url('assets/plugins/flag-icon-css/css/flag-icon.min.css') ?>" rel="stylesheet">
<!-- /Import CSS -->	
	</head>
	<body class="main-body">
	
			<!-- Loader -->
		<div id="loading">
			<img src="<?php echo base_url('assets/img/loader4.svg') ?>" class="loader-img" alt="Loader">
		</div>
		
		<!-- main-header -->
		<div class="header-main hor-header">
			<div class="main-header">
				<div class="container">
					<!--logo-->
					<div class="hor-logo">
						<a class="main-logo desktop-logo" href="index.html"><img src="https://www.trimegah.com/frontend/images/logo-trimegah.svg" alt="logo"></a>
						<a class="main-logo mobile-logo" href="index.html"><img src="<?php echo base_url('assets/img/brand/favicon-white.png') ?>" alt="logo"></a>
					</div>
					<!--/logo-->
					<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
					<div class="main-header-right ml-auto">
						<div class="dropdown main-header-search mobile-search">
							<a class="new header-link" href="">
								<i class="header-icons" data-eva="search-outline"></i>
							</a>
							<div class="dropdown-menu">
								<div class="p-2 main-form-search">
									<input class="form-control" placeholder="Search here..." type="search">
									<button class="btn"><i class="fe fe-search"></i></button>
								</div>
							</div>
						</div>

						<div class="main-header-fullscreen fullscreen-button">
							<a href="#" class="header-link">
								<i class="header-icons" data-eva="expand-outline"></i>
							</a>
						</div>


						<div class="dropdown main-profile-menu">
							<a class="main-img-user" href="">
								<img alt="" src="../../../assets/img/users/male/15.jpg">
							</a>
							<div class="dropdown-menu">
								<div class="main-header-profile">
									<h6>Peter Hill</h6>
									<span>Administrator</span>
								</div>
								<a class="dropdown-item" href="#"><i class="si si-user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="si si-envelope-open"></i> Inbox</a>
								<a class="dropdown-item" href="#"><i class="si si-calendar"></i> Activity</a>
								<a class="dropdown-item" href="#"><i class="si si-bubbles"></i> Chat</a>
								<a class="dropdown-item" href="#"><i class="si si-settings"></i> Settings</a>
								<a class="dropdown-item" href="#"><i class="si si-power"></i> Logo Out</a>
							</div>
						</div>
						<div class="main-header-sidebar-notification">
							<a href="#" class="header-link" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="header-icons" data-eva="options-2-outline"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/main-header-->


		<!--Horizontal-main -->
		<div class="sticky">
			<div class="horizontal-main hor-menu clearfix">
				<div class="horizontal-mainwrapper container clearfix">
					<!--Nav-->
					<nav class="horizontalMenu clearfix">
						<ul class="horizontalMenu-list">
							<!--<li aria-haspopup="true"><a href="index.html" class="sub-icon active"><i class="hor-icon" data-eva="monitor-outline"></i> Dashboard</a>	</li>-->
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="hor-icon" data-eva="cube-outline"></i> ECM <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="widgets.html">Widgets</a></li>
									<li aria-haspopup="true"><a href="app-chat.html">Chat</a></li>
									<li aria-haspopup="true"><a href="app-chat2.html">App chat</a></li>
									<li aria-haspopup="true"><a href="app-calendar.html">Calendar</a></li>
									<li aria-haspopup="true"><a href="app-contacts.html">Contacts</a></li>
									<li aria-haspopup="true"><a href="app-rangeslider.html">Range Slider</a></li>
									<li aria-haspopup="true"><a href="app-rating.html">Rating</a></li>
									<li aria-haspopup="true"><a href="app-gallery.html">Light Gallery</a></li>
									<li aria-haspopup="true"><a href="app-dragabble.html">Draggable Cards</a></li>
									<li aria-haspopup="true"><a href="app-image-compare.html">Image Comparision</a></li>
									<li aria-haspopup="true"><a href="app-cookie.html">Cookies</a></li>
									<li aria-haspopup="true"><a href="app-notification.html">Notifications</a></li>
									<li aria-haspopup="true"><a href="app-toast.html">Toast Notification</a></li>
									<li aria-haspopup="true"><a href="app-search.html">Search</a></li>
									<li aria-haspopup="true"><a href="app-sweetalerts.html">Sweet Alerts</a></li>
									<li aria-haspopup="true"><a href="app-treeview.html">Tree View</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="hor-icon" data-eva="bar-chart-2-outline"></i> DCM <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="chart-morris.html">Morris Charts</a></li>
									<li aria-haspopup="true"><a href="chart-flot.html">Flot Charts</a></li>
									<li aria-haspopup="true"><a href="chart-chartjs.html">ChartJS</a></li>
									<li aria-haspopup="true"><a href="chart-sparkline.html">Sparkline</a></li>
									<li aria-haspopup="true"><a href="chart-echart.html">Echarts</a></li>
									<li aria-haspopup="true"><a href="chart-peity.html">Peity</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="hor-icon" data-eva="grid-outline"></i> Support <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<div class="horizontal-megamenu clearfix">
									<div class="container">
										<div class="mega-menubg">
											<div class="row">
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">
													<ul>
														<li aria-haspopup="true"><a href="ui-accordion.html">Accordion</a></li>
														<li aria-haspopup="true"><a href="ui-alerts.html">Alerts</a></li>
														<li aria-haspopup="true"><a href="ui-avatar.html">Avatar</a></li>
														<li aria-haspopup="true"><a href="ui-badge.html">Badge</a></li>
														<li aria-haspopup="true"><a href="ui-breadcrumbs.html">Breadcrumbs</a></li>
														<li aria-haspopup="true"><a href="ui-buttons.html">Buttons</a></li>
														<li aria-haspopup="true"><a href="ui-cards.html">Cards</a></li>
														<li aria-haspopup="true"><a href="ui-carousel.html">Carousel</a></li>
														<li aria-haspopup="true"><a href="ui-collapse.html">Collapse</a></li>
													</ul>
												</div>
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">
													<ul>
														<li aria-haspopup="true"><a href="ui-list-group.html">List Group</a></li>
														<li aria-haspopup="true"><a href="ui-loaders.html">Loaders</a></li>
														<li aria-haspopup="true"><a href="ui-media-object.html">Media Object</a></li>
														<li aria-haspopup="true"><a href="ui-modals.html">Modals</a></li>
														<li aria-haspopup="true"><a href="ui-navigation.html">Navigation</a></li>
														<li aria-haspopup="true"><a href="ui-pagination.html">Pagination</a></li>
														<li aria-haspopup="true"><a href="ui-panels.html">Panels</a></li>
														<li aria-haspopup="true"><a href="ui-popover.html">Popover</a></li>
														<li aria-haspopup="true"><a href="ui-progress.html">Progress</a></li>
													</ul>
												</div>
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">
													<ul>
														<li aria-haspopup="true"><a href="ui-dropdown.html"> Dropdown</a></li>
														<li aria-haspopup="true"><a href="ui-tabs.html">Tabs</a></li>
														<li aria-haspopup="true"><a href="ui-tags.html">Tags</a></li>
														<li aria-haspopup="true"><a href="ui-images.html">Images</a></li>
														<li aria-haspopup="true"><a href="ui-spinners.html">Spinners</a></li>
														<li aria-haspopup="true"><a href="ui-tooltip.html">Tooltip</a></li>
														<li><h3 class="fs-14 font-weight-bold mb-1">Tables</h3></li>
														<li aria-haspopup="true"><a href="table-basic.html">Basic Tables</a></li>
														<li aria-haspopup="true"><a href="table-data.html">Data Tables</a></li>

													</ul>
												</div>
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">
													<ul>
														<li><h3 class="fs-14 font-weight-bold mb-1 mt-3">Maps</h3></li>
														<li aria-haspopup="true"><a href="map-leaflet.html">Leaflet</a></li>
														<li aria-haspopup="true"><a href="map-vector.html">Vector Maps</a></li>
														<li><h3 class="fs-14 font-weight-bold mb-1 mt-3">Subheader</h3></li>
														<li aria-haspopup="true"><a href="page-subheader.html">Sub Header 01</a></li>
														<li aria-haspopup="true"><a href="page-subheader2.html">Sub Header 02</a></li>
														<li aria-haspopup="true"><a href="page-subheader3.html">Sub Header 03</a></li>
														<li aria-haspopup="true"><a href="page-subheader4.html">Sub Header 04</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="hor-icon" data-eva="file-text-outline"></i>IT<i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="form-elements.html">Form Elements</a></li>
									<li aria-haspopup="true"><a href="form-advanced.html">Advanced Forms</a></li>
									<li aria-haspopup="true"><a href="form-layouts.html">Form Layouts</a></li>
									<li aria-haspopup="true"><a href="form-validation.html">Form Validation</a></li>
									<li aria-haspopup="true"><a href="form-wizards.html">Form Wizards</a></li>
									<li aria-haspopup="true"><a href="form-editor.html">WYSIWYG Editor</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="hor-icon" data-eva="stop-circle-outline"></i> HRD <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="ui-icons-one.html">Font Aswesome Icons</a></li>
									<li aria-haspopup="true"><a href="ui-icons-two.html">Simple Line Icons</a></li>
									<li aria-haspopup="true"><a href="ui-icons-three.html">Feather Icons</a></li>
									<li aria-haspopup="true"><a href="ui-icons-four.html">Weather Icons</a></li>
									<li aria-haspopup="true"><a href="ui-icons-five.html">Line Awesome</a></li>
									<li aria-haspopup="true"><a href="ui-icons-six.html">Themify Icons</a></li>
									<li aria-haspopup="true"><a href="ui-icons-seven.html">Pe7 Icons</a></li>
									<li aria-haspopup="true"><a href="ui-icons-eight.html">Typicon Icons</a></li>
								</ul>
							</li>

						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>
		<!--Horizontal-main -->		
		
		
		
		
<!--		<div class="container body">
			<div class="main_container">
				<?php //echo $sidenavs ?>
				<?php //echo $navs ?>
				<!-- Page Content 
				<div class="right_col" role="main">
					<div>
						<div class="page-title">
							<div class="title_left">
								<h3><?php //echo $header ?></h3>
							</div>
							<div class="title_right">
								<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<?php //echo $content ?>
					</div>
				</div>
				<!-- /Page Content -->
				<!-- Footer Content 
				<footer>
					<div class="pull-right">
						Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> || <?php echo $footer; ?>
					</div>
			        <div class="clearfix"></div>
				</footer>
				<!-- /Footer Content 
			</div>
		</div>-->

		<!-- Import Javascript -->
		<!-- JQuery min js -->
		<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/widgets/datepicker.js') ?>"></script>

		<!-- Bootstrap Bundle js -->
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

		<!-- Eva-Icons js -->
		<script src="<?php echo base_url('assets/plugins/web-fonts/eva.min.js') ?>"></script>

		<!-- Ionicons js -->
		<script src="<?php echo base_url('assets/plugins/ionicons/ionicons.js') ?>"></script>

		<!--Chart bundle min js -->
		<script src="<?php echo base_url('assets/plugins/chart.js/Chart.bundle.min.js') ?>"></script>

		<!-- Flot js -->
		<script src="<?php echo base_url('assets/plugins/jquery.flot/jquery.flot.js') ?>"></script>
		<script src="<?php echo base_url('assets/plugins/jquery.flot/jquery.flot.pie.js') ?>"></script>
		<script src="<?php echo base_url('assets/plugins/jquery.flot/jquery.flot.resize.js') ?>"></script>

		<!--Peity Chart js -->
		<script src="<?php echo base_url('assets/plugins/peity/jquery.peity.min.js') ?>"></script>

		<!-- JQuery sparkline js -->
		<script src="<?php echo base_url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>

		<!-- Sampledata js -->
		<script src="<?php echo base_url('assets/js/chart.flot.sampledata.js') ?>"></script>

		<!-- Moment js -->
		<script src="<?php echo base_url('assets/plugins/moment/moment.js') ?>"></script>

		<!-- select2.min js -->
		<script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/select2.js') ?>"></script>

		<!--Bootstrap-daterangepicker js-->
		<script src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

		<!-- Sidebar js -->
		<script src="<?php echo base_url('assets/plugins/sidebar/sidebar.js') ?>"></script>
		<script src="<?php echo base_url('assets/plugins/sidebar/sidebar-custom.js') ?>"></script>

		<!-- Custom Scroll bar Js-->
		<script src="<?php echo base_url('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>

		<!-- Vector map js -->
		<script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.world.js') ?>"></script>

		<!-- Vector map Sampledata js -->
		<script src="<?php echo base_url('assets/js/jquery.vmap.sampledata.js') ?>"></script>

		<!-- Horizontal-Menu JS-->
		<script src="<?php echo base_url('assets/plugins/horizontal-menu/horizontal-menu.js') ?>"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>

		<!-- Index js -->
		<script src="<?php echo base_url('assets/js/index4.js') ?>"></script>

		<!-- Lightslider js -->
		<script src="<?php echo base_url('assets/plugins/lightslider/js/lightslider.min.js') ?>"></script>

		<!-- Custom js -->
		<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/chart.flot.sampledata.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/dashboard.sampledata.js') ?>"></script>

		<!-- Morris js -->
		<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js') ?>"></script>

		<!-- /Import Javascript -->
	</body>
</html>