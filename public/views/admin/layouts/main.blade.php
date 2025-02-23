<!doctype html>
<html lang="tr">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="robots" content="noindex, nofollow">

	<!-- Title -->
	<title>Yönetim Paneli</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset_url('admin/img/fav.png') }}">

	<!-- *************
		************ Common Css Files *************
	************ -->
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{ asset_url('admin/css/bootstrap.min.css') }}">

	<!-- Icomoon Font Icons css -->
	<link rel="stylesheet" href="{{ asset_url('admin/fonts/style.css') }}">

	<!-- Main css -->
	<link rel="stylesheet" href="{{ asset_url('admin/css/main.css') }}">

	<!-- Custom css -->
	<link rel="stylesheet" href="{{ asset_url('admin/css/custom.css') }}">

	<!-- *************
		************ Vendor Css Files *************
	************ -->
	<!-- Mega Menu -->
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/megamenu/css/megamenu.css') }}">

	<!-- Search Filter JS -->
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/search-filter/search-filter.css') }}">
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/search-filter/custom-search-filter.css') }}">

	<script>
		const API_URL = '{{ site_url('api') }}';
	</script>

	@yield('styles')
</head>
<body>

	<!-- Loading wrapper start -->
	<div id="loading-wrapper">
		<div class="spinner-border"></div>
		Yükleniyor...
	</div>
	<!-- Loading wrapper end -->

	<!-- Page wrapper start -->
	<div class="page-wrapper">

		<!-- Sidebar wrapper start -->
		<nav class="sidebar-wrapper">

			<!-- Sidebar content start -->
			<div class="sidebar-tabs">

				<!-- Tabs nav start -->
				<div class="nav" role="tablist" aria-orientation="vertical">
					<a href="{{ site_url('admin/dashboard') }}" class="logo">
						<img src="{{ asset_url('admin/img/logo.svg') }}" alt="Yönetim Paneli">
					</a>
					<!--<a href="#tab-home" class="nav-link {{ segments(1) == 'dashboard' ? 'active' : null }}" id="home-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-home" aria-selected="{{ segments(1) == 'dashboard' ? 'true' : 'false' }}">
						<i class="icon-home2"></i>
						<span class="nav-link-text">Anasayfa</span>
					</a>-->
					<a href="#tab-product" class="nav-link {{ segments(1) == 'products' ? 'active' : null }}" id="product-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-product" aria-selected="{{ segments(1) == 'products' ? 'true' : 'false' }}">
						<i class="icon-layers2"></i>
						<span class="nav-link-text">Ürünler</span>
					</a>
					<!--<a href="#tab-pages" class="nav-link" id="pages-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-pages" aria-selected="false">
						<i class="icon-book-open"></i>
						<span class="nav-link-text">Sayfalar</span>
					</a>
					<a href="#tab-forms" class="nav-link" id="forms-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-forms" aria-selected="false">
						<i class="icon-edit1"></i>
						<span class="nav-link-text">Formlar</span>
					</a>
					<a href="#tab-components" class="nav-link" id="components-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-components" aria-selected="false">
						<i class="icon-box"></i>
						<span class="nav-link-text">Komponentler</span>
					</a>
					<a href="#tab-graphs" class="nav-link" id="graphs-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-graphs" aria-selected="false">
						<i class="icon-pie-chart1"></i>
						<span class="nav-link-text">Grafikler</span>
					</a>
					<a href="#tab-authentication" class="nav-link" id="authentication-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-authentication" aria-selected="false">
						<i class="icon-unlock"></i>
						<span class="nav-link-text">Oturum</span>
					</a>
					<a href="#tab-settings" class="nav-link settings" id="settings-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-authentication" aria-selected="false">
						<i class="icon-settings1"></i>
						<span class="nav-link-text">Ayarlar</span>
					</a>-->
				</div>
				<!-- Tabs nav end -->

				<!-- Tabs content start -->
				<div class="tab-content">

					<!-- Home tab -->
					<div class="tab-pane fade {{ segments(1) == 'dashboard' ? 'show active' : null }}" id="tab-home" role="tabpanel" aria-labelledby="home-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Anasayfa
						</div>
						<!-- Tab content header end -->

						<!-- Sidebar menu starts -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-menu">
								<ul>
									<li>
										<a href="{{ site_url('admin/dashboard') }}" class="{{ segments(1) == 'dashboard' ? 'current-page' : null }}">
											Genel Bakış
										</a>
									</li>
								</ul>
								<ul>
									<li class="list-heading">
										Layouts
									</li>
									<li>
										<a href="starter-page.html">
											Starter Page
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Sidebar menu ends -->

						<!-- Sidebar actions starts -->
						<div class="sidebar-actions">
							<a href="orders.html" class="red">
								<div class="bg-avatar">
									12
								</div>
								<h5>
									New Orders
								</h5>
							</a>
							<a href="invoices-list.html" class="blue">
								<div class="bg-avatar">
									24
								</div>
								<h5>
									Bills Pending
								</h5>
							</a>
						</div>
						<!-- Sidebar actions ends -->

					</div>

					<!-- Products tab -->
					<div class="tab-pane fade {{ segments(1) == 'products' ? 'show active' : null }}" id="tab-product" role="tabpanel" aria-labelledby="product-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Ürünler
						</div>
						<!-- Tab content header end -->

						<!-- Sidebar menu starts -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-menu">
								<ul>
									<li>
										<a href="{{ site_url('admin/products/approved') }}" class="{{ segments(1) == 'products' && segments(2) == 'approved' ? 'current-page' : null }}">
											Aktif Ürünler
										</a>
									</li>
									<li>
										<a href="{{ site_url('admin/products/create') }}" class="{{ segments(1) == 'products' && segments(2) == 'create' ? 'current-page' : null }}">
											Ürün Ekle
										</a>
									</li>
									<li>
										<a href="{{ site_url('admin/products/unapproved') }}" class="{{ segments(1) == 'products' && segments(2) == 'unapproved' ? 'current-page' : null }}">
											Çöp Kutusu
										</a>
									</li>
								</ul>
								<!--<ul>
									<li class="list-heading">
										Suplyco
									</li>
									<li>
										<a href="calendar-daygrid-view.html">
											Daygrid View
										</a>
									</li>
								</ul>-->
							</div>
						</div>
						<!-- Sidebar menu ends -->

						<!-- Sidebar actions starts -->
						<!--<div class="sidebar-actions">
							<div class="support-tile">
								<i class="icon-headphones"></i>
								7/24 Destek
							</div>
						</div>-->
						<!-- Sidebar actions ends -->

					</div>

					<!-- Pages tab -->
					<div class="tab-pane fade" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Pages
						</div>
						<!-- Tab content header end -->

						<!-- Sidebar menu starts -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-menu">
								<ul>
									<li>
										<a href="chat.html">
											Chat
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Sidebar menu ends -->

						<!-- Sidebar actions starts -->
						<div class="sidebar-actions">
							<div class="support-tile green">
								<i class="icon-pie-chart1"></i>
								5GB Free Space
							</div>
						</div>
						<!-- Sidebar actions ends -->

					</div>

					<!-- Forms tab -->
					<div class="tab-pane fade" id="tab-forms" role="tabpanel" aria-labelledby="forms-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Forms
						</div>
						<!-- Tab content header end -->

						<!-- Sidebar menu starts -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-menu">
								<ul>
									<li class="list-heading">
										Form Layouts
									</li>
									<li>
										<a href="forms-layout-one.html">
											Default Layout
										</a>
									</li>
								</ul>
								<ul>
									<li class="list-heading">
										Form Fields
									</li>
									<li>
										<a href="forms-inputs.html">
											Form Inputs
										</a>
									</li>
								</ul>
								<ul>
									<li class="list-heading">
										Plugins
									</li>
									<li>
										<a href="forms-dropzone.html">
											Dropzone
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Sidebar menu ends -->

						<!-- Sidebar actions starts -->
						<div class="sidebar-actions">
							<div class="support-tile red">
								<i class="icon-mail"></i>
								Inbox Full
							</div>
						</div>
						<!-- Sidebar actions ends -->

					</div>

					<!-- Components tab -->
					<div class="tab-pane fade" id="tab-components" role="tabpanel" aria-labelledby="components-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Components
						</div>
						<!-- Tab content header end -->

						<!-- Sidebar menu starts -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-menu">
								<ul>
									<li>
										<a href="accordions.html">
											Accordions
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Sidebar menu ends -->

						<!-- Sidebar actions starts -->
						<div class="sidebar-actions">
							<div class="support-tile yellow">
								<i class="icon-arrow-down-circle"></i>
								<a href="#">
									Download Reports
								</a>
							</div>
						</div>
						<!-- Sidebar actions ends -->

					</div>

					<!-- Graphs tab -->
					<div class="tab-pane fade" id="tab-graphs" role="tabpanel" aria-labelledby="graphs-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Graphs & Tables
						</div>
						<!-- Tab content header end -->

						<!-- Sidebar menu starts -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-menu">
								<ul>
									<li class="list-heading">
										Graphs
									</li>
									<li>
										<a href="apex-graphs.html">
											Apex Graphs
										</a>
									</li>
								</ul>

								<ul>
									<li class="list-heading">
										Tables
									</li>
									<li>
										<a href="bootstrap-tables.html">
											Bootstrap Tables
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Sidebar menu ends -->

						<!-- Sidebar actions starts -->
						<div class="sidebar-actions">
							<div class="support-tile pink">
								<i class="icon-align-right1"></i>
								RTL Support
							</div>
						</div>
						<!-- Sidebar actions ends -->

					</div>

					<!-- Authentication tab -->
					<div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Authentication
						</div>
						<!-- Tab content header end -->

						<!-- Sidebar menu starts -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-menu">
								<ul>
									<li>
										<a href="login.html">
											Login
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Sidebar menu ends -->

						<!-- Sidebar actions starts -->
						<div class="sidebar-actions">
							<div class="support-tile blue">
								<a href="pricing.html" class="btn btn-light m-auto">
									Upgrade Account
								</a>
							</div>
						</div>
						<!-- Sidebar actions ends -->

					</div>

					<!-- Settings tab -->
					<div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">

						<!-- Tab content header start -->
						<div class="tab-pane-header">
							Settings
						</div>
						<!-- Tab content header end -->

						<!-- Settings start -->
						<div class="sidebarMenuScroll">
							<div class="sidebar-settings">
								<div class="accordion" id="settingsAccordion">
									<div class="accordion-item">
										<h2 class="accordion-header" id="genInfo">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genCollapse" aria-expanded="true" aria-controls="genCollapse">
												General Info
											</button>
										</h2>
										<div id="genCollapse" class="accordion-collapse collapse show" aria-labelledby="genInfo" data-bs-parent="#settingsAccordion">
											<div class="accordion-body">
												<div class="field-wrapper">
													<input type="text" value="Jeivxezer Lopexz" />
													<div class="field-placeholder">
														Full Name
													</div>
												</div>

												<div class="field-wrapper">
													<input type="email" value="jeivxezer-lopexz@email.com" />
													<div class="field-placeholder">
														Email
													</div>
												</div>

												<div class="field-wrapper">
													<input type="text" value="0 0000 00000" />
													<div class="field-placeholder">
														Contact
													</div>
												</div>
												<div class="field-wrapper m-0">
													<button class="btn btn-primary stripes-btn">
														Save
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="chngPwd">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chngPwdCollapse" aria-expanded="false" aria-controls="chngPwdCollapse">
												Change Password
											</button>
										</h2>
										<div id="chngPwdCollapse" class="accordion-collapse collapse" aria-labelledby="chngPwd" data-bs-parent="#settingsAccordion">
											<div class="accordion-body">
												<div class="field-wrapper">
													<input type="text" value="">
													<div class="field-placeholder">
														Current Password
													</div>
												</div>
												<div class="field-wrapper">
													<input type="password" value="">
													<div class="field-placeholder">
														New Password
													</div>
												</div>
												<div class="field-wrapper">
													<input type="password" value="">
													<div class="field-placeholder">
														Confirm Password
													</div>
												</div>
												<div class="field-wrapper m-0">
													<button class="btn btn-primary stripes-btn">
														Save
													</button>
												</div>

											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="sidebarNotifications">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#notiCollapse" aria-expanded="false" aria-controls="notiCollapse">
												Notifications
											</button>
										</h2>
										<div id="notiCollapse" class="accordion-collapse collapse" aria-labelledby="sidebarNotifications" data-bs-parent="#settingsAccordion">
											<div class="accordion-body">
												<div class="list-group m-0">
													<div class="noti-container">
														<div class="noti-block">
															<div>
																Alerts
															</div>
															<div class="form-switch">
																<input class="form-check-input" type="checkbox" id="showAlertss" checked>
																<label class="form-check-label" for="showAlertss"></label>
															</div>
														</div>
														<div class="noti-block">
															<div>
																Enable Sound
															</div>
															<div class="form-switch">
																<input class="form-check-input" type="checkbox" id="soundEnable">
																<label class="form-check-label" for="soundEnable"></label>
															</div>
														</div>
														<div class="noti-block">
															<div>
																Allow Chat
															</div>
															<div class="form-switch">
																<input class="form-check-input" type="checkbox" id="allowChat">
																<label class="form-check-label" for="allowChat"></label>
															</div>
														</div>
														<div class="noti-block">
															<div>
																Desktop Messages
															</div>
															<div class="form-switch">
																<input class="form-check-input" type="checkbox" id="desktopMessages">
																<label class="form-check-label" for="desktopMessages"></label>
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
						<!-- Settings end -->

						<!-- Sidebar actions starts -->
						<div class="sidebar-actions">
							<div class="support-tile blue">
								<a href="account-settings.html" class="btn btn-light m-auto">
									Advanced Settings
								</a>
							</div>
						</div>
						<!-- Sidebar actions ends -->
					</div>

				</div>
				<!-- Tabs content end -->

			</div>
			<!-- Sidebar content end -->

		</nav>
		<!-- Sidebar wrapper end -->

		<!-- *************
			************ Main container start *************
		************* -->
		<div class="main-container">

			<!-- Page header starts -->
			<div class="page-header">

				<!-- Row start -->
				<div class="row gutters">
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

						<!-- Search container start -->
						<div class="search-container">

							<!-- Toggle sidebar start -->
							<div class="toggle-sidebar" id="toggle-sidebar">
								<i class="icon-menu"></i>
							</div>
							<!-- Toggle sidebar end -->

							<!-- Mega Menu Start -->
							<!--<div class="cd-dropdown-wrapper">
								<a class="cd-dropdown-trigger" href="#0">
									<i class="icon-menu menu-icon"></i>
									<span class="menu-text">Menü</span>
								</a>
								<nav class="cd-dropdown">

									<ul class="cd-dropdown-content">

										<li class="has-children">
											<a href="#">Main Pages</a>
											<ul class="cd-secondary-dropdown is-hidden">
												<li class="has-children">
													<a href="#">Dashboards</a>
													<ul class="is-hidden">
														<li>
															<a href="reports.html">Reports</a>
														</li>
														<li>
															<a href="saas.html">Saas</a>
														</li>
														<li>
															<a href="sales.html">Sales</a>
														</li>
														<li>
															<a href="index.html">Admin</a>
														</li>
														<li>
															<a href="analytics.html">Analytics</a>
														</li>
														<li>
															<a href="crm.html">CRM</a>
														</li>
														<li>
															<a href="consulting.html">Consulting</a>
														</li>
													</ul>
												</li>
												<li class="has-children">
													<a href="#">Layouts</a>
													<ul class="is-hidden">
														<li>
															<a href="starter-page.html">Starter Page</a>
														</li>
														<li>
															<a href="layout-full-screen.html">Full Screen</a>
														</li>
														<li>
															<a href="layout-search.html">Global Search</a>
														</li>
														<li>
															<a href="layout-megamenu.html">Megamenu</a>
														</li>
														<li>
															<a href="layout-bradcrumb.html">Breadcrumbs</a>
														</li>
														<li>
															<a href="layout-scroll-cards.html">Scroll Cards</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>

										<li class="has-children">
											<a href="#">Product &amp; Calendars</a>

											<ul class="cd-secondary-dropdown is-hidden">
												<li class="has-children">
													<a href="#">Product</a>
													<ul class="is-hidden">
														<li>
															<a href="products.html">Products Grid</a>
														</li>
														<li>
															<a href="products-list.html">Products List</a>
														</li>
														<li>
															<a href="add-product.html">Add Product</a>
														</li>
														<li>
															<a href="orders.html">Orders</a>
														</li>
														<li>
															<a href="customers-list.html">Customers</a>
														</li>
														<li>
															<a href="products-reviews.html">Reviews</a>
														</li>
													</ul>
												</li>

												<li class="has-children">
													<a href="#">Calendars</a>
													<ul class="is-hidden">
														<li>
															<a href="calendar-daygrid-view.html">Daygrid View</a>
														</li>
														<li>
															<a href="calendar-list-view.html">List View</a>
														</li>
														<li>
															<a href="calendar-external-dragging.html">Draggable</a>
														</li>
														<li>
															<a href="calendar-google-view.html">Google View</a>
														</li>
														<li>
															<a href="calendar-selectable.html">Selectable</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>

										<li class="has-children">
											<a href="#">Forms</a>

											<ul class="cd-secondary-dropdown is-hidden">

												<li class="has-children">
													<a href="#">Form Layouts</a>
													<ul class="is-hidden">
														<li>
															<a href="forms-layout-one.html">Default Layout</a>
														</li>
														<li>
															<a href="forms-layout-two.html">Layout Sections</a>
														</li>
														<li>
															<a href="forms-layout-three.html">Simple Form Layout</a>
														</li>
														<li>
															<a href="forms-layout-four.html">Select 2 Tags and Mask</a>
														</li>
														<li>
															<a href="forms-layout-five.html">Horizontal Form Layout</a>
														</li>
														<li>
															<a href="forms-layout-six.html">Layout Six with Tabs</a>
														</li>
													</ul>
												</li>

												<li class="has-children">
													<a href="#">Forms</a>
													<ul class="is-hidden">
														<li>
															<a href="forms-inputs.html">Form Inputs</a>
														</li>
														<li>
															<a href="forms-input-groups.html">Input Groups</a>
														</li>
														<li>
															<a href="forms-checkbox-radio.html">Checkbox &amp; Radios</a>
														</li>
														<li>
															<a href="forms-validation.html">Form Validation</a>
														</li>
														<li>
															<a href="forms-dropzone.html">Dropzone</a>
														</li>
														<li>
															<a href="forms-bs-select.html">Select 2 Dropdowns</a>
														</li>
														<li>
															<a href="forms-date-time-picker.html">Date Time Picker</a>
														</li>
														<li>
															<a href="forms-input-mask.html">Input Mask</a>
														</li>
														<li>
															<a href="forms-input-range.html">Input Range</a>
														</li>
														<li>
															<a href="forms-editor.html">WYSIWYG Editor</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>

										<li class="has-children">
											<a href="#">Pages &amp; Components</a>

											<ul class="cd-secondary-dropdown is-hidden">

												<li class="has-children">
													<a href="#">Pages</a>
													<ul class="is-hidden">
														<li>
															<a href="chat.html">Chat</a>
														</li>
														<li>
															<a href="tasks.html">Tasks</a>
														</li>
														<li>
															<a href="create-invoice.html">Create Invoice</a>
														</li>
														<li>
															<a href="view-invoice.html">View Invoice</a>
														</li>
														<li>
															<a href="documents.html">Documents</a>
														</li>
														<li>
															<a href="faq.html">Faq's</a>
														</li>
														<li>
															<a href="contacts.html">Contacts</a>
														</li>
														<li>
															<a href="pricing.html">Pricing</a>
														</li>
														<li>
															<a href="gallery-tiles.html">Gallery Tiles</a>
														</li>
														<li>
															<a href="gallery.html">Gallery</a>
														</li>
														<li>
															<a href="icons.html">Icons</a>
														</li>
														<li>
															<a href="timeline.html">Timeline</a>
														</li>
														<li>
															<a href="search-results.html">Search Results</a>
														</li>
														<li>
															<a href="account-settings.html">Account Settings</a>
														</li>
														<li>
															<a href="user-profile.html">User Profile</a>
														</li>
													</ul>
												</li>

												<li class="has-children">
													<a href="#">Components</a>
													<ul class="is-hidden">
														<li>
															<a href="accordions.html">Accordions</a>
														</li>
														<li>
															<a href="alerts.html">Alerts</a>
														</li>
														<li>
															<a href="buttons.html">Buttons</a>
														</li>
														<li>
															<a href="badges.html">Badges</a>
														</li>
														<li>
															<a href="cards.html">Cards</a>
														</li>
														<li>
															<a href="carousel.html">Carousel</a>
														</li>
														<li>
															<a href="list-group.html">List group</a>
														</li>
														<li>
															<a href="modals.html">Modal</a>
														</li>
														<li>
															<a href="paginations.html">Paginations</a>
														</li>
														<li>
															<a href="popovers.html">Popovers</a>
														</li>
														<li>
															<a href="progress.html">Progress</a>
														</li>
														<li>
															<a href="spinners.html">Spinners</a>
														</li>
														<li>
															<a href="tabs.html">Tabs</a>
														</li>
														<li>
															<a href="toasts.html">Toasts</a>
														</li>
														<li>
															<a href="tooltips.html">Tooltips</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>

										<li class="has-children">
											<a href="#">Graphs &amp; Tables</a>

											<ul class="cd-secondary-dropdown is-hidden">

												<li class="has-children">
													<a href="#">Graphs</a>
													<ul class="is-hidden">
														<li>
															<a href="apex-graphs.html">Apex Graphs</a>
														</li>
														<li>
															<a href="morris-graphs.html">Morris Graphs</a>
														</li>
														<li>
															<a href="vector-maps.html">Vector Maps</a>
														</li>
													</ul>
												</li>

												<li class="has-children">
													<a href="#">Tables</a>
													<ul class="is-hidden">
														<li>
															<a href="bootstrap-tables.html">Bootstrap Tables</a>
														</li>
														<li>
															<a href="custom-tables.html">Custom Tables</a>
														</li>
														<li>
															<a href="data-tables.html">Data Tables</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>

										<li>
											<a href="account-settings.html">Account Settings</a>
										</li>
										<li>
											<a href="login.html">Logout</a>
										</li>
										<li>
											<a href="error-option2.html">Error</a>
										</li>
									</ul>

								</nav>
							</div>-->
							<!-- Mega Menu End -->

							<!-- Search input group start -->
							<!--<div class="ui fluid category search">
								<div class="ui icon input">
									<input type="text" name="search" placeholder="Ara" class="prompt">
									<i class="search icon icon-search1"></i>
								</div>
								<div class="results"></div>
							</div>-->
							<!-- Search input group end -->

						</div>

					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

						<!-- Header actions start -->
						<ul class="header-actions">
							<!--<li class="dropdown">
								<a href="#" id="taskss" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-check-square"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="taskss">
									<div class="dropdown-menu-header">
										Tasks (7/10)
									</div>
									<div class="customScroll">
										<ul class="activity">
											<li class="activity-list">
												<div class="detail-info">
													<p class="date">Today</p>
													<p class="info">Messages accepted with attachments</p>
												</div>
											</li>
											<li class="activity-list danger">
												<div class="detail-info">
													<p class="date">Today</p>
													<p class="info">Send email notifications of subscriptions and deletions to list owner</p>
												</div>
											</li>
											<li class="activity-list success">
												<div class="detail-info">
													<p class="date">Yesterday</p>
													<p class="info">Required change logs activity reports</p>
												</div>
											</li>
											<li class="activity-list warning">
												<div class="detail-info">
												<p class="date">2 Days Ago</p>
													<p class="info">Strategic partnership plan</p>
												</div>
											</li>
											<li class="activity-list">
												<div class="detail-info">
													<p class="date">2 days ago</p>
													<p class="info">Send email notifications of subscriptions and deletions to list owner</p>
												</div>
											</li>
											<li class="activity-list danger">
												<div class="detail-info">
													<p class="date">3 days ago</p>
													<p class="info">Required change logs activity reports</p>
												</div>
											</li>
											<li class="activity-list success">
												<div class="detail-info">
												<p class="date">7 days ago</p>
													<p class="info">Strategic partnership plan</p>
												</div>
											</li>
											<li class="activity-list">
												<div class="detail-info">
													<p class="date">2 weeks ago</p>
													<p class="info">Required change logs activity reports</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-alert-triangle"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (7)
									</div>
									<div class="customScroll">
										<ul class="header-notifications">
											<li>
												<a href="#">
													<div class="user-img online">
														<img src="{{ asset_url('admin/img/user6.png') }}" alt="User">
													</div>
													<div class="details">
														<div class="user-title">Larkyn</div>
														<div class="noti-details">Check out every table in detail.</div>
														<div class="noti-date">April 25, 04:00 pm</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="user-img busy">
														<img src="{{ asset_url('admin/img/user10.png') }}" alt="User">
													</div>
													<div class="details">
														<div class="user-title">Braxten</div>
														<div class="noti-details">Approved new design.</div>
														<div class="noti-date">April 10, 12:00 am</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="user-img away">
														<img src="{{ asset_url('admin/img/user21.png') }}" alt="User">
													</div>
													<div class="details">
														<div class="user-title">Maria</div>
														<div class="noti-details">Membership has been ended.</div>
														<div class="noti-date">March 20, 07:30 pm</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="user-img busy">
														<img src="{{ asset_url('admin/img/user15.png') }}" alt="User">
													</div>
													<div class="details">
														<div class="user-title">Alex</div>
														<div class="noti-details">Design Review.</div>
														<div class="noti-date">April 18, 09:30 am</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="user-img online">
														<img src="{{ asset_url('admin/img/user5.png') }}" alt="User">
													</div>
													<div class="details">
														<div class="user-title">Sunny</div>
														<div class="noti-details">UI Discussion</div>
														<div class="noti-date">April 21, 05:00 pm</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>-->
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="avatar">
										<img src="{{ asset_url('admin/img/user.svg') }}" alt="User Avatar">
										<!--<span class="status busy"></span>-->
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<!--<a href="#">
											<i class="icon-user1"></i>
											Hesabım
										</a>
										<a href="#">
											<i class="icon-settings1"></i>
											Ayarlar
										</a>-->
										<a href="{{ site_url('admin/logout') }}">
											<i class="icon-log-out1"></i>
											Çıkış Yap
										</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->

					</div>
				</div>
				<!-- Row end -->

			</div>
			<!-- Page header ends -->

			<!-- Content wrapper scroll start -->
			<div class="content-wrapper-scroll">

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					@yield('content')

				</div>
				<!-- Content wrapper end -->

				<!-- App footer start -->
				<div class="app-footer">
					&copy; Five Ajans {{ date('Y') }}
				</div>
				<!-- App footer end -->

			</div>
			<!-- Content wrapper scroll end -->

		</div>
		<!-- *************
			************ Main container end *************
		************* -->

	</div>
	<!-- Page wrapper end -->

	<!-- *************
		************ Required JavaScript Files *************
	************* -->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="{{ asset_url('admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset_url('admin/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset_url('admin/js/modernizr.js') }}"></script>
	<script src="{{ asset_url('admin/js/moment.js') }}"></script>

	<!-- *************
		************ Vendor Js Files *************
	************* -->
	<!-- Megamenu JS -->
	<script src="{{ asset_url('admin/vendor/megamenu/js/megamenu.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/megamenu/js/custom.js') }}"></script>

	<!-- Slimscroll JS -->
	<script src="{{ asset_url('admin/vendor/slimscroll/slimscroll.min.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/slimscroll/custom-scrollbar.js') }}"></script>

	<!-- Search Filter JS -->
	<script src="{{ asset_url('admin/vendor/search-filter/search-filter.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/search-filter/custom-search-filter.js') }}"></script>

	<!-- SweetAlert2 -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	@yield('scripts')

	<!-- Main Js Required -->
	<script src="{{ asset_url('admin/js/main.js') }}"></script>
</body>
</html>
