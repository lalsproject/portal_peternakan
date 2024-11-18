<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>ltr/assets/images/favicon.png?<?= date('YmdHis') ?>">
	<title>Portal Pemetaan Zonasi Peternakan Di Kota Tomohon</title>
	<!-- Custom CSS -->
	<script src="<?php echo base_url() ?>ltr/assets/vendor/datatables/jquery-3.5.1.js"></script>
	<link href="<?php echo base_url() ?>ltr/assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>ltr/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>ltr/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>ltr/assets/libs/jquery-steps/steps.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>ltr/dist/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>ltr/assets/offline/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>ltr/assets/offline/buttons.bootstrap4.min.css">

	<link
	  rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
	/>
	<link href="<?= base_url()?>ltr/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>ltr/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>ltr/assets/vendor/datatables/responsive.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>ltr/assets/offline/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
	
	<script src="<?php echo base_url() ?>ltr/assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- apps -->
	<script src="<?php echo base_url() ?>ltr/dist/js/app.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/dist/js/app.init.js"></script>
	<script src="<?php echo base_url() ?>ltr/dist/js/app-style-switcher.js"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="<?php echo base_url() ?>ltr/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/extra-libs/sparkline/sparkline.js"></script>
	<!--Wave Effects -->
	<script src="<?php echo base_url() ?>ltr/dist/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="<?php echo base_url() ?>ltr/dist/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="<?php echo base_url() ?>ltr/dist/js/custom.js"></script>
	<!--This page JavaScript -->
	<script src="<?php echo base_url() ?>ltr/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/vendor/datatables/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/vendor/datatables/responsive.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/offline/select2.min.js"></script>
	
	<script src="<?= base_url() ?>ltr/assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/buttons.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/vfs_fonts.js"></script>
	
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/buttons.colVis.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>ltr/assets/offline/table2excel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script>
		$(document).ready(function() {
			
		});
	</script>
	<style type="text/css" media="screen">
		html, body{
		  /*font-size: 100%;*/
/*		 font-family: 'Courier', sans-serif;*/
		  scroll-behavior: smooth;
		}
		th{
			font-weight: 900 !important;
		}
		body{
			font-size:0.800rem;
		}
		.btn-flat{
			border-radius: 0px;
		}
		.bg-dark{
			color: white;
		}
		.btn-primary {
			background-color: #035f9f!important;
			border-color: #035f9f!important;
		}
		.bg-primary{
			background-color: #035f9f!important;
			color: white;
			border-bottom: 3px solid #ffc107;
		}
		.bg-dark{
			background-color: #035f9f!important;
			color: white;
			border-bottom: 3px solid #ffc107;
		}
		.page-item.active .page-link{
			background-color: #035f9f!important;
			border-color:#035f9f!important;
		}

		#main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin1], #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin1], #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin1], #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin1]{
			background:#035f9f!important;
		}
		#main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6], #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6]{
			background:#035f9f!important;
		}
		#main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] .nav-toggler, #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] .topbartoggler, #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] .nav-toggler, #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] .topbartoggler{
			color: white;
		}
		.input-group-text{
			background-color:#e9ecef;
		}
	   /* #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6], #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul, #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6], #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul{
			background: #414755;
		}*/
		.dataTables_processing{
			background: #2424246b;
			color: white;
		}
		.bg-icon{
			padding: 10px;
		}

	</style>

	<script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
	<script src="<?php echo base_url() ?>ltr/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<!-- This is for the sidebar toggle which is visible on mobile only -->
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" onclick="return false"><i class="ti-menu ti-close"></i></a>
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand" href="">
						<!-- Logo icon -->
						<div class="row">
							<div class="col-md-10 logo-icon">
								
								<h4 style="font-size: 16px;"><center> Portal Pemetaan Zonasi<br>Peternakan Di Kota Tomohon</center></h4>
							</div>
						</div>
						<b class="logo-icon">
							<!-- <center><img src="<?php echo base_url() ?>ltr/assets/images/logo-text.png?<?= rand(1,77777777) ?>" style="width: 100%;" alt="homepage" class="dark-logo" /></center> -->
						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
						</span>
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- Toggle which is visible on mobile only -->
					<!-- ============================================================== -->
					<a class="topbartoggler d-block d-md-none waves-effect waves-light" onclick="return false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-left mr-auto">
						<li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" onclick="return false" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
					</ul>
						
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar" data-sidebarbg="skin5">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<!-- User Profile-->
						<li>
							<!-- User Profile-->
							<div class="user-profile d-flex no-block dropdown mt-3">
								<div class="user-pic"><img src="<?php echo base_url() ?>ltr/assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
								<div class="user-content hide-menu ml-2">
									<a onclick="return false" class="" id="Userdd" role="button" aria-haspopup="true" aria-expanded="false">
										<h5 class="mb-0 user-name font-medium"><?php echo $this->session->userdata('username'); ?>
									</a>
								</div>
							</div>
							<!-- End User Profile-->
						</li>
						<!-- User Profile-->
						
						<li class="sidebar-item"><a href="<?php echo site_url('dashboard')?>" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Home</span></a></li>
						<li class="sidebar-item"><a href="<?= site_url('peternakan') ?>" class="sidebar-link"><i class="mdi mdi-table"></i><span class="hide-menu"> Data Peternakan</span></a></li>
						<li class="sidebar-item"><a href="<?= site_url('logout') ?>" class="sidebar-link"><i class="mdi mdi-logout"></i><span class="hide-menu"> Keluar</span></a></li>

						
					
						
						
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb" style="display: none;">
				<div class="row">
					<div class="col-12 align-self-center">
						<!-- <h4 class="page-title"><?php echo $title ?></h4> -->
						<?php echo $this->session->flashdata('notif'); ?>
					</div>

				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<!-- ============================================================== -->
				<!-- User Data, Visits -->
				<!-- ============================================================== -->
				<div class="row">
					<!-- column -->
					
					<?php $this->load->view($content); ?>
				</div>
				<!-- ============================================================== -->
				<!-- Locations -->
				<!-- ============================================================== -->
			   
				<!-- ============================================================== -->
				<!-- Activity, Referrals -->
				<!-- ============================================================== -->
				
				<!-- ============================================================== -->
				<!-- Task, Feeds -->
				<!-- ============================================================== -->
				
			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<footer class="footer text-center">
				   Designed and Developed use <a href="#;">💜</a>  - Page rendered in <strong>{elapsed_time}</strong> seconds..
			</footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	
	<script>
		

		
		$("button[data-toggle='modal']").attr({'data-backdrop':'static', 'data-keyboard':'false'});
		$("a[data-toggle='modal']").attr({'data-backdrop':'static', 'data-keyboard':'false'});
	</script>		
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- customizer Panel -->
	<!-- ============================================================== -->
	<?php echo $this->session->flashdata('call'); ?>
	<!-- <div class="chat-windows"></div> -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script>
		
		



		$(document).ready(function() {
			
			$('aside[class="left-sidebar"]').removeAttr('data-sidebarbg');
		$('aside[class="left-sidebar"]').attr('data-sidebarbg', 'skin5');
		});
		// $('.modal').modal({
		//     backdrop: 'static',
		//     keyboard: true, 
		//     show: true
		// }); 

		function compressImage(from_element,to_element)
		{
		// var inputFile = document.getElementById("input-file");
		var inputFile = from_element;
		var reader = new FileReader();
		reader.onload = function()
		{
			var img = new Image();
			img.src = reader.result;
			img.onload = function()
			{
				var canvas = document.createElement("canvas");
				var ctx = canvas.getContext("2d");
				ctx.drawImage(img, 0, 0);

				var MAX_WIDTH = 3000;
				var MAX_HEIGHT = 2000;
				var width = img.width;
				var height = img.height;

				if (width > height)
				{
					if (width > MAX_WIDTH)
					{
						height *= MAX_WIDTH / width;
						width = MAX_WIDTH;
					}
				}
				else
				{
					if (height > MAX_HEIGHT)
					{
						width *= MAX_HEIGHT / height;
						height = MAX_HEIGHT;
					}
				}
				canvas.width = width;
				canvas.height = height;
				ctx = canvas.getContext("2d");
				ctx.drawImage(img, 0, 0, width, height);

				var compressedImage = canvas.toDataURL("image/jpeg", 0.5);
				$(to_element).val(compressedImage);
				// console.log(compressedImage);
				// kirimkan compressedImage ke server melalui form
			};
		};

		reader.readAsDataURL(inputFile.files[0]);
		}



		
	</script>
	<script>
	$('.fancybox__button--close').click(function () {
		return false;
	});
	
</script>
<script>
	$('[data-toggle="popover"]').popover()
	$("button[data-toggle='modal']").attr({'data-backdrop':'static', 'data-keyboard':'false'});
	 /** add active class and stay opened when selected */
	var url = window.location;

	// for sidebar menu entirely but not cover treeview
	$('ul>li.nav-item a').filter(function() {
	   return this.href == url;
	}).parent().addClass('active');

	// $('li.dropdown>.dropdown-menu').filter(function() {
	//    return this.href == url;
	// }).parent().addClass('tes');

	// for treeview
	$('div.dropdown-menu>a.dropdown-item').filter(function() {
	   return this.href == url;
	}).parentsUntil().addClass('active');

	$('div.dropdown-menu>a.dropdown-item').filter(function() {
	   return this.href == url;
	}).parent().addClass('active');
	
	//$('.dt').DataTable();

	$(document).ready(function() {
		var table = $('.dt').DataTable({
			responsive: true,
			"language": {
             "url": "<?php echo base_url() ?>assets/vendor/datatables/id.json?date=<?= date('YmdHis'); ?>"
         },
         pagingType: 'numbers'
		});

		//new $.fn.dataTable.FixedHeader(table);
	});

	
</script>    
<script>
  // Mencetak teks dengan ukuran dan animasi
  console.log("%cTidak Ada Apa Apa Disini 🤪", "font-size: 36px; animation: blink 1s infinite; color:red;");
  // console.log("%cIni adalah teks berukuran kecil dan berkedip", "font-size: 12px; animation: blink 1s infinite;");
</script>    
</body>

</html>