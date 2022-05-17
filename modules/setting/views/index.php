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
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
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
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Aktivitas Pegawai</h1>
								</div>
							</div>
						</div>
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-xxl">
								<div class="d-flex flex-column">
									<div class="card mb-5">
                                        <div class="card-body py-3">
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                    <thead>
                                                        <tr class="fw-bolder text-muted">
                                                            <th class="w-25px">No</th>
                                                            <th class="min-w-150px text-center">Waktu</th>
                                                            <th class="min-w-140px text-center">Nama Pegawai</th>
                                                            <th class="min-w-120px text-center">Log Kegiatan</th>
                                                            <th class="min-w-100px text-end">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <span class="text-dark fw-bolder fs-6">1</span>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <div class="d-flex justify-content-center flex-column">
                                                                        <span class="text-dark fw-bolder text-hover-primary fs-6">Selasa, 17 - 05 - 2022</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder text-hover-primary fs-6">Sidatata Al Jennar</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder text-hover-primary fs-6">Memasak</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <i class="fa-duotone fa-eye fs-5"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <i class="fa-duotone fa-trash fs-5"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modalTambahUser" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<div class="modal-content">
					<div class="modal-header pb-0 border-0 justify-content-end">
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
						</div>
					</div>
					<div class="modal-body mx-5 pt-0 pb-15">
						<div class="text-center mb-13">
							<h1 class="mb-3">Tambah User</h1>
						</div>
						<div class="row mb-6">
                            <label class="col-form-label required fw-bold fs-6">Nama Pegawai</label>
                            <div class="col-lg-12">
                                <input type="text" name="" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Isikan nama pegawai" value="" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <div class="col-6">
								<label class="col-from-label required fw-bold fs-6">Role</label>
								<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Role">
									<option></option>
									<option value="1">Admin</option>
									<option value="2">Operator</option>
									<option value="2">Pegawai</option>
									<option value="2">Pelanggan</option>
								</select>
							</div>
                
                            <div class="col-6">
								<label class="col-from-label required fw-bold fs-6">Status</label>
								<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Status">
									<option></option>
									<option value="1">Online</option>
									<option value="2">Offline</option>
								</select>
							</div>
                        </div>
                        <div class="d-flex mt-10 justify-content-end">
                            <button type="submit" class="btn btn-sm btn-danger" data-kt-menu-dismiss="true">Simpan</button>
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