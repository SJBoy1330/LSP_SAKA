<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		<title>Dashboard</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/icons/logo-grafika.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<script src="https://kit.fontawesome.com/a2309adc07.js" crossorigin="anonymous"></script>
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<h2 class="text-white mt-2">LSP PWPB</h2>
					</div>
					<div class="aside-menu flex-column-fluid">
						<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								
                            <div class="menu-item">
									<div class="menu-content pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link active" href="<?= base_url('user')?>">
										<span class="menu-icon">
											<i class="fa-duotone fa-users fs-3"></i>
										</span>
										<span class="menu-title">Menu User</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="<?= base_url('menu');?>">
										<span class="menu-icon">
											<i class="fa-solid fa-fork-knife fs-3"></i>
										</span>
										<span class="menu-title">Menu Makanan</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="<?= base_url('setting');?>">
										<span class="menu-icon">
											<i class="fa-duotone fa-square-person-confined fs-3"></i>
										</span>
										<span class="menu-title">Aktifitas Pegawai</span>
									</a>
								</div>

								<div class="menu-item">
									<div class="menu-content pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Kasir</span>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="<?= base_url('transaksi')?>">
										<span class="menu-icon">
											<i class="fa-duotone fa-cash-register fs-3"></i>
										</span>
										<span class="menu-title">Kasir</span>
									</a>
								</div>

								<div class="menu-item">
									<div class="menu-content pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Laporan</span>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="<?= base_url('laporan')?>">
										<span class="menu-icon">
											<i class="fa-duotone fa-money-from-bracket fs-3"></i>
										</span>
										<span class="menu-title">Laporan Transaksi</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="<?= base_url('laporan/pendapatan')?>">
										<span class="menu-icon">
											<i class="fa-duotone fa-file-invoice-dollar fs-3"></i>
										</span>
										<span class="menu-title">Laporan Pendapatan</span>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<div id="kt_header" style="" class="header align-items-stretch">
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
									<i class="bi bi-list fs-1"></i>
								</div>
							</div>
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../demo13/dist/index.html" class="d-lg-none">
									<img alt="Logo" src="assets/media/logos/logo-demo13-compact.svg" class="h-25px" />
								</a>
							</div>
						</div>
					</div>
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div  class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Kasir</h1>
								</div>
							</div>
						</div>
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-xxl">
								<div class="card">
                                    <div class="card-body mx-lg-15">
                                        <form id="" class="form" action="#">
                                            <div class="mb-13 text-center">
                                                <h1 class="mb-3">Pemesanan</h1>
                                            </div>
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Nama Pelanggan</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Isikan nama pemesanan" name="" />
                                            </div>

                                            <label class="col-form-label required fw-bold fs-6">Pencarian Makanan</label>
                                            <div class="card">
                                                <div class="card-body shadow-sm">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="d-flex align-items-center">
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name=""/>
                                                                </label>
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                                </div>
                                                                <div class="ms-5">
                                                                    <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                                    <div class="fw-bold text-muted">Rp. 20.000</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="number" class="form-control form-control-solid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center position-relative mb-3">
                                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                    <i class="fa-duotone fa-magnifying-glass fs-3"></i>
                                                </span>
                                                <input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid ps-15" style="width: 100%;" placeholder="Pencarian" />
                                            </div>

                                            <div class="mh-300px scroll-y me-n7 pe-7 mb-5">
                                                <a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name=""/>
                                                        </label>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <div class="ms-5">
                                                            <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                            <div class="fw-bold text-muted">Rp. 150.000</div>
                                                        </div>
                                                    </div>
                                                </a>
                
                                                <a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name=""/>
                                                        </label>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <div class="ms-5">
                                                            <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                            <div class="fw-bold text-muted">Rp. 150.000</div>
                                                        </div>
                                                    </div>
                                                </a>
                
                                                <a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name=""/>
                                                        </label>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <div class="ms-5">
                                                            <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                            <div class="fw-bold text-muted">Rp. 150.000</div>
                                                        </div>
                                                    </div>
                                                </a>
                
                                                <a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name=""/>
                                                        </label>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <div class="ms-5">
                                                            <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                            <div class="fw-bold text-muted">Rp. 150.000</div>
                                                        </div>
                                                    </div>
                                                </a>
                
                                                <a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name=""/>
                                                        </label>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <div class="ms-5">
                                                            <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                            <div class="fw-bold text-muted">Rp. 150.000</div>
                                                        </div>
                                                    </div>
                                                </a>
                
                                                <a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name=""/>
                                                        </label>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <div class="ms-5">
                                                            <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                            <div class="fw-bold text-muted">Rp. 150.000</div>
                                                        </div>
                                                    </div>
                                                </a>
                
                                                <a href="#" class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name=""/>
                                                        </label>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <div class="ms-5">
                                                            <span href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Nasi Goreng</span>
                                                            <div class="fw-bold text-muted">Rp. 150.000</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-center mt-3">
                                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-danger">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
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
		<script>var hostUrl = "assets/";</script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/users-search.js"></script>
	</body>
</html>