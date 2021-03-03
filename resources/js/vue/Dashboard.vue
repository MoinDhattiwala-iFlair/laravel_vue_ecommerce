<template>
    <div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png">
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-text">Actions</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-file"></i><span class="m-menu__link-text">Create New Post</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Generate Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-chat-1"></i><span class="m-menu__link-text">Customer
															Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-text">Reports</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:1000px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<div class="m-menu__subnav">
												<ul class="m-menu__content">
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca
																		Cola CRM</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																		Airlines Booking Site</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																		Accounting</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																		Website Rewamp</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
																		Mobile App</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury
																		CMS</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">HR Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Salary
																		Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																		Payslips</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Corporate
																		Expenses</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Project
																		Expenses</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Reporting Apps</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Report Adjusments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Sources &amp; Mediums</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Reporting Settings</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Conversions</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Report Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Audit &amp; Logs</span></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-paper-plane"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Apps</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--brand m-badge--wide">new</span></span>
												</span></span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">eCommerce</span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-computer"></i><span class="m-menu__link-text">Audience</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Active Users</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">User Explorer</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-lifebuoy"></i><span class="m-menu__link-text">Users Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Market Segments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">User Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Marketing</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Campaigns</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">3</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-infinity"></i><span class="m-menu__link-text">Cloud Manager</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">File Upload</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">3</span></span> </span></span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-1"></i><span class="m-menu__link-text">File Attributes</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder"></i><span class="m-menu__link-text">Folders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">System Settings</span></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>

							<!-- END: Horizontal Menu -->

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon"><i class="flaticon-search-1"></i></span>
											</a>
											<div class="m-dropdown__wrapper" style="z-index: 101;">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner ">
													<div class="m-dropdown__header">
														<form class="m-list-search__form">
															<div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
																</span>
																<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
															</div>
														</form>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__scrollable m-scrollable m-scroller ps" data-scrollable="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
															<div class="m-dropdown__content">
															</div>
														<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
												<span class="m-nav__link-icon"><i class="flaticon-alarm"></i></span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-title">9 New</span>
														<span class="m-dropdown__header-subtitle">User Notifications</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																		Alerts
																	</a>
																</li>
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
																</li>
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
																</li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																	<div class="m-scrollable m-scroller ps" data-scrollable="true" data-height="250" data-mobile-height="200" style="height: 250px; overflow: hidden;">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																					<span class="m-list-timeline__text">12 new users registered</span>
																					<span class="m-list-timeline__time">Just now</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
																					<span class="m-list-timeline__time">14 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">New invoice received</span>
																					<span class="m-list-timeline__time">20 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
																					<span class="m-list-timeline__time">1 hr</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
																					<span class="m-list-timeline__time">2 hrs</span>
																				</div>
																				<div class="m-list-timeline__item m-list-timeline__item--read">
																					<span class="m-list-timeline__badge"></span>
																					<span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
																					<span class="m-list-timeline__time">7 hrs</span>
																				</div>
																				<div class="m-list-timeline__item m-list-timeline__item--read">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">Production server down</span>
																					<span class="m-list-timeline__time">3 hrs</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">Production server up</span>
																					<span class="m-list-timeline__time">5 hrs</span>
																				</div>
																			</div>
																		</div>
																	<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
																</div>
																<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
																	<div class="m-scrollable m-scroller ps" data-scrollable="true" data-height="250" data-mobile-height="200" style="height: 250px; overflow: hidden;">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																					<a href="" class="m-list-timeline__text">New order received</a>
																					<span class="m-list-timeline__time">Just now</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																					<a href="" class="m-list-timeline__text">New invoice received</a>
																					<span class="m-list-timeline__time">20 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																					<a href="" class="m-list-timeline__text">Production server up</a>
																					<span class="m-list-timeline__time">5 hrs</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">New order received</a>
																					<span class="m-list-timeline__time">7 hrs</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">System shutdown</a>
																					<span class="m-list-timeline__time">11 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">Production server down</a>
																					<span class="m-list-timeline__time">3 hrs</span>
																				</div>
																			</div>
																		</div>
																	<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
																</div>
																<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
																	<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																		<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																			<span class="">All caught up!<br>No new logs.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
												<span class="m-nav__link-icon"><i class="flaticon-share"></i></span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-title">Quick Actions</span>
														<span class="m-dropdown__header-subtitle">Shortcuts</span>
													</div>
													<div class="m-dropdown__body m-dropdown__body--paddingless">
														<div class="m-dropdown__content">
															<div class="data" data="false" data-height="380" data-mobile-height="200">
																<div class="m-nav-grid m-nav-grid--skin-light">
																	<div class="m-nav-grid__row">
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-file"></i>
																			<span class="m-nav-grid__text">Generate Report</span>
																		</a>
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-time"></i>
																			<span class="m-nav-grid__text">Add New Event</span>
																		</a>
																	</div>
																	<div class="m-nav-grid__row">
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-folder"></i>
																			<span class="m-nav-grid__text">Create New Task</span>
																		</a>
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-clipboard"></i>
																			<span class="m-nav-grid__text">Completed Tasks</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-text">
													<img class="m-topbar__language-selected-img" src="assets/app/media/img/flags/020-flag.svg">
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-subtitle">Select your language</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__item m-nav__item--active">
																	<a href="#" class="m-nav__link m-nav__link--active">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/020-flag.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">USA</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/015-china.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">China</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/016-spain.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Spain</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/014-japan.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Japan</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/017-germany.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Germany</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="">
												</span>
												<span class="m-topbar__username m--hide">Nick</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="">

																<!--
						<span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
						-->
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">Mark Andre</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Section</span>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																				<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">Activity</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">FAQ</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">Support</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li id="m_quick_sidebar_toggle" class="m-nav__item">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-scroller ps ps--active-y" m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative; height: 189px; overflow: hidden;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="index.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Components</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">State Colors</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/typography.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typography</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/stack.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Stack</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tables.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tables</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/progress.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Progress</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/modal.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Modal</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/alerts.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Alerts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/popover.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Popover</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tooltip.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tooltip</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/blockui.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Block UI</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/spinners.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Spinners</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/scrollable.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/dropdown.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropdown</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tabs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tabs/bootstrap.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap Tabs</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/base/tabs/line.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Line Tabs</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/accordions.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Accordions</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/navs.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Navs</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/lists.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lists</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/treeview.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tree View</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/bootstrap-notify.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap Notify</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/toastr.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Toastr</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/base/sweetalert2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">SweetAlert2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">Icons</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/flaticon.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/fontawesome5.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome 5</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/lineawesome.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/icons/socicons.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Socicons</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-web"></i><span class="m-menu__link-text">Buttons</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Buttons</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/default.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/square.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Square Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/pill.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pill Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/air.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Air Style</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/group.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Group</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/dropdown.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Dropdown</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Icon</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/icon/lineawesome.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome
																Icons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/icon/fontawesome.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome
																Icons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/icon/flaticon.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon Icons</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">Portlets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Portlets</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/portlets/base.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/portlets/advanced.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/portlets/creative.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Creative Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/portlets/tabbed.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tabbed Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/portlets/draggable.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Draggable Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/portlets/tools.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Portlet Tools</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/portlets/sticky-head.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky Head</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-6"></i><span class="m-menu__link-text">Timeline</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Timeline</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/timeline/timeline-1.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/timeline/timeline-2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Widgets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Widgets</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/widgets/general.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">General Widgets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/widgets/chart.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Chart Widgets</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-calendar"></i><span class="m-menu__link-text">Calendar</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Calendar</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/calendar/basic.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Calendar</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/calendar/list-view.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">List Views</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/calendar/google.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Calendar</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/calendar/external-events.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">External
													Events</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/calendar/background-events.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Background
													Events</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-text">Charts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Charts</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="components/charts/amcharts/charts.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Charts</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/charts/amcharts/stock-charts.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Stock Charts</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="components/charts/amcharts/maps.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts Maps</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/charts/flotcharts.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flot Charts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/charts/google-charts.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Charts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/charts/morris-charts.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Morris Charts</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-placeholder-1"></i><span class="m-menu__link-text">Maps</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Maps</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/maps/google-maps.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Maps</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/maps/jqvmap.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JQVMap</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-signs-2"></i><span class="m-menu__link-text">Utils</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Utils</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/utils/session-timeout.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Session Timeout</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="components/utils/idle-timer.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Idle Timer</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">CRUD</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-7"></i><span class="m-menu__link-text">Forms
										&amp; Controls</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Forms &amp; Controls</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Controls</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/controls/base.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Inputs</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/controls/checkbox-radio.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Checkbox &amp;
																Radio</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/controls/input-group.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input Groups</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/controls/switch.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/controls/option.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Mega Options</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Widgets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-datepicker.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-datetimepicker.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datetimepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-timepicker.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-daterangepicker.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Daterangepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-touchspin.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Touchspin</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-maxlength.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Maxlength</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-switch.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-multipleselectsplitter.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple
																Select Splitter</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-select.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap
																Select</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/select2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/typeahead.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typeahead</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/nouislider.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">noUiSlider</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/form-repeater.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Repeater</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/ion-range-slider.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ion Range
																Slider</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/input-mask.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input Masks</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/summernote.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Summernote
																WYSIWYG</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/bootstrap-markdown.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Markdown
																Editor</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/autosize.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Autosize</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/clipboard.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Clipboard</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/dropzone.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropzone</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/widgets/recaptcha.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google reCaptcha</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Layouts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/layouts/default-forms.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default Forms</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/layouts/multi-column-forms.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multi
																Column Forms</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/layouts/action-bars.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Action
																Bars</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/layouts/sticky-action-bar.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky
																Action Bar</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Validation</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/validation/states.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Validation States</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/validation/form-controls.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form
																Controls</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/forms/validation/form-widgets.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Widgets</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-8"></i><span class="m-menu__link-text">Metronic
										Wizard</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="crud/wizard/wizard-1.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="crud/wizard/wizard-2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 2</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="crud/wizard/wizard-3.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 3</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="crud/wizard/wizard-4.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 4</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="crud/wizard/wizard-5.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 5</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-tabs"></i><span class="m-menu__link-text">Metronic
										Datatable</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Metronic Datatable</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/data-local.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/data-json.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JSON
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/data-ajax.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/html-table.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML
																Table</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/record-selection.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Record
																Selection</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/local-sort.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Sort</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/row-details.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Details</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/column-rendering.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Rendering</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/column-width.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Width</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/responsive-columns.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive
																Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/base/translation.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Translation</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrolling</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/scrolling/vertical.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Vertical
																Scrolling</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/scrolling/horizontal.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Horizontal
																Scrolling</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/scrolling/both.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both
																Scrolling</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Locked Columns</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/locked/left.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Left Locked
																Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/locked/right.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Right
																Locked Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/locked/both.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both Locked
																Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/locked/html-table.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML
																Table</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Child Datatables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/child/data-local.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/child/data-ajax.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Remote
																Data</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">API</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/api/methods.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">API Methods</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/metronic-datatable/api/events.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Events</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-list-3"></i><span class="m-menu__link-text">DataTables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">DataTables</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/basic/basic.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Tables</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/basic/scrollable.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable
																Tables</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/basic/headers.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Complex Headers</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/basic/paginations.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pagination
																Options</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/advanced/column-rendering.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Rendering</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/advanced/multiple-controls.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple
																Controls</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/advanced/column-visibility.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Visibility</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/advanced/row-callback.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Callback</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/advanced/row-grouping.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Grouping</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/advanced/footer-callback.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer
																Callback</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Data sources</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/data-sources/html.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/data-sources/javascript.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Javascript</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/data-sources/ajax-client-side.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Client-side</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/data-sources/ajax-server-side.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Server-side</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Search Options</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/search-options/column-search.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Search</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/search-options/advanced-search.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced
																Search</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Extensions</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/buttons.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Buttons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/colreorder.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">ColReorder</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/keytable.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">KeyTable</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/responsive.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/rowgroup.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowGroup</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/rowreorder.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowReorder</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/scroller.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scroller</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="crud/datatables/extensions/select.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Snippets</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-9"></i><span class="m-menu__link-text">Pricing
										Tables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Pricing Tables</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="snippets/general/pricing-tables/pricing-table-1.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="snippets/general/pricing-tables/pricing-table-2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v2</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="snippets/general/pricing-tables/pricing-table-3.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v3</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="snippets/general/pricing-tables/pricing-table-4.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v4</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-piggy-bank"></i><span class="m-menu__link-text">Invoices</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Invoices</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="snippets/invoices/invoice-1.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="snippets/invoices/invoice-2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-exclamation"></i><span class="m-menu__link-text">FAQS</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">FAQS</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="snippets/faq/faq-1.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">FAQ v1</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">Custom
										Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Custom Pages</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">User Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/user/login-1.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 1</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/user/login-2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/user/login-3.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 3</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/user/login-4.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 4</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/user/login-5.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 5</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/user/login-6.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 6</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/errors/error-1.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																1</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/errors/error-2.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/errors/error-3.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																3</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/errors/error-4.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																4</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/errors/error-5.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																5</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="snippets/pages/errors/error-6.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																6</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 189px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div></div></div>

					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">Dashboard</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title">Today:</span>
										<span class="m-subheader__daterange-date m--font-brand">Mar 2</span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">

						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-4">

								<!--begin:: Widgets/Top Products-->
								<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Trends
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
														All
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">

										<!--begin::Widget5-->
										<div class="m-widget4">
											<div class="m-widget4__chart m-portlet-fit--sides m--margin-top-10 m--margin-top-20" style="height:260px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
												<canvas id="m_chart_trends_stats" width="326" height="260" class="chartjs-render-monitor" style="display: block; width: 326px; height: 260px;"></canvas>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo3.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Phyton
													</span><br>
													<span class="m-widget4__sub">
														A Programming Language
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-danger">+$17</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo1.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														FlyThemes
													</span><br>
													<span class="m-widget4__sub">
														A Let's Fly Fast Again Language
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-danger">+$300</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo2.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														AirApp
													</span><br>
													<span class="m-widget4__sub">
														Awesome App For Project Management
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-danger">+$6700</span>
												</span>
											</div>
										</div>

										<!--end::Widget 5-->
									</div>
								</div>

								<!--end:: Widgets/Top Products-->
							</div>
							<div class="col-xl-4">

								<!--begin:: Widgets/Activity-->
								<div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text m--font-light">
													Activity
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
													<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
														<i class="fa fa-genderless m--font-light"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Quick Actions</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit">
																		</li>
																		<li class="m-nav__item">
																			<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget17">
											<div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
												<div class="m-widget17__chart" style="height:320px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
													<canvas id="m_chart_activities" width="325" height="216" class="chartjs-render-monitor" style="display: block; width: 325px; height: 216px;"></canvas>
												</div>
											</div>
											<div class="m-widget17__stats">
												<div class="m-widget17__items m-widget17__items-col1">
													<div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-truck m--font-brand"></i>
														</span>
														<span class="m-widget17__subtitle">
															Delivered
														</span>
														<span class="m-widget17__desc">
															15 New Paskages
														</span>
													</div>
													<div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-paper-plane m--font-info"></i>
														</span>
														<span class="m-widget17__subtitle">
															Reporeted
														</span>
														<span class="m-widget17__desc">
															72 Support Cases
														</span>
													</div>
												</div>
												<div class="m-widget17__items m-widget17__items-col2">
													<div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-pie-chart m--font-success"></i>
														</span>
														<span class="m-widget17__subtitle">
															Ordered
														</span>
														<span class="m-widget17__desc">
															72 New Items
														</span>
													</div>
													<div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-time m--font-danger"></i>
														</span>
														<span class="m-widget17__subtitle">
															Arrived
														</span>
														<span class="m-widget17__desc">
															34 Upgraded Boxes
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Activity-->
							</div>
							<div class="col-xl-4">

								<!--begin:: Widgets/Blog-->
								<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
									<div class="m-portlet__head m-portlet__head--fit">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-action">
												<button type="button" class="btn btn-sm m-btn--pill  btn-brand">Blog</button>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget19">
											<div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
												<img src="assets/app/media/img//blog/blog1.jpg" alt="">
												<h3 class="m-widget19__title m--font-light">
													Introducing New Feature
												</h3>
												<div class="m-widget19__shadow"></div>
											</div>
											<div class="m-widget19__content">
												<div class="m-widget19__header">
													<div class="m-widget19__user-img">
														<img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg" alt="">
													</div>
													<div class="m-widget19__info">
														<span class="m-widget19__username">
															Anna Krox
														</span><br>
														<span class="m-widget19__time">
															UX/UI Designer, Google
														</span>
													</div>
													<div class="m-widget19__stats">
														<span class="m-widget19__number m--font-brand">
															18
														</span>
														<span class="m-widget19__comment">
															Comments
														</span>
													</div>
												</div>
												<div class="m-widget19__body">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry scrambled it to make text of the printing and typesetting industry scrambled a type specimen book text of the dummy text of the printing printing and typesetting
													industry scrambled dummy text of the printing.
												</div>
											</div>
											<div class="m-widget19__action">
												<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">Read More</button>
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Blog-->
							</div>
						</div>

						<!--End::Section-->

						<!--Begin::Section-->
						<div class="m-portlet">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-4">

										<!--begin:: Widgets/Stats2-1 -->
										<div class="m-widget1">
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">Member Profit</h3>
														<span class="m-widget1__desc">Awerage Weekly Profit</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">+$17,800</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">Orders</h3>
														<span class="m-widget1__desc">Weekly Customer Orders</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">+1,800</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">Issue Reports</h3>
														<span class="m-widget1__desc">System bugs and issues</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-success">-27,49%</span>
													</div>
												</div>
											</div>
										</div>

										<!--end:: Widgets/Stats2-1 -->
									</div>
									<div class="col-xl-4">

										<!--begin:: Widgets/Daily Sales-->
										<div class="m-widget14">
											<div class="m-widget14__header m--margin-bottom-30">
												<h3 class="m-widget14__title">
													Daily Sales
												</h3>
												<span class="m-widget14__desc">
													Check out each collumn for more details
												</span>
											</div>
											<div class="m-widget14__chart" style="height:120px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
												<canvas id="m_chart_daily_sales" width="287" height="120" class="chartjs-render-monitor" style="display: block; width: 287px; height: 120px;"></canvas>
											</div>
										</div>

										<!--end:: Widgets/Daily Sales-->
									</div>
									<div class="col-xl-4">

										<!--begin:: Widgets/Profit Share-->
										<div class="m-widget14">
											<div class="m-widget14__header">
												<h3 class="m-widget14__title">
													Profit Share
												</h3>
												<span class="m-widget14__desc">
													Profit Share between customers
												</span>
											</div>
											<div class="row  align-items-center">
												<div class="col">
													<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
														<div class="m-widget14__stat">45</div>
													<svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series custom"><path d="M110.706,101.728A51.031,51.031,0,0,0,64.531,28.969" class="ct-slice-donut" ct:value="32" ct:meta="{&amp;quot;data&amp;quot;:{&amp;quot;color&amp;quot;:&amp;quot;#716aca&amp;quot;}}" style="stroke-width: 17px;" stroke-dasharray="102.6058120727539px 102.6058120727539px" stroke-dashoffset="-102.6058120727539px" stroke="#716aca"><animate attributeName="stroke-dashoffset" id="anim0" dur="1000ms" from="-102.6058120727539px" to="0px" fill="freeze" stroke="#716aca" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series custom"><path d="M25.211,112.529A51.031,51.031,0,0,0,110.781,101.567" class="ct-slice-donut" ct:value="32" ct:meta="{&amp;quot;data&amp;quot;:{&amp;quot;color&amp;quot;:&amp;quot;#00c5dc&amp;quot;}}" style="stroke-width: 17px;" stroke-dasharray="102.78341674804688px 102.78341674804688px" stroke-dashoffset="-102.78341674804688px" stroke="#00c5dc"><animate attributeName="stroke-dashoffset" id="anim1" dur="1000ms" from="-102.78341674804688px" to="0px" fill="freeze" stroke="#00c5dc" begin="anim0.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series custom"><path d="M64.531,28.969A51.031,51.031,0,0,0,25.325,112.666" class="ct-slice-donut" ct:value="36" ct:meta="{&amp;quot;data&amp;quot;:{&amp;quot;color&amp;quot;:&amp;quot;#ffb822&amp;quot;}}" style="stroke-width: 17px;" stroke-dasharray="115.61079406738281px 115.61079406738281px" stroke-dashoffset="-115.61079406738281px" stroke="#ffb822"><animate attributeName="stroke-dashoffset" id="anim2" dur="1000ms" from="-115.61079406738281px" to="0px" fill="freeze" stroke="#ffb822" begin="anim1.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g></svg></div>
												</div>
												<div class="col">
													<div class="m-widget14__legends">
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-accent"></span>
															<span class="m-widget14__legend-text">37% Sport Tickets</span>
														</div>
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-warning"></span>
															<span class="m-widget14__legend-text">47% Business Events</span>
														</div>
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-brand"></span>
															<span class="m-widget14__legend-text">19% Others</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!--end:: Widgets/Profit Share-->
									</div>
								</div>
							</div>
						</div>

						<!--End::Section-->

						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-4">

								<!--begin:: Widgets/Blog-->
								<div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
									<div class="m-portlet__head m-portlet__head--fit-">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text m--font-light">
													Personal Income
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
														2018
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Orders</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Pending</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Delivered</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">Canceled</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Approved</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget27 m-portlet-fit--sides">
											<div class="m-widget27__pic">
												<img src="assets/app/media/img//bg/bg-4.jpg" alt="">
												<h3 class="m-widget27__title m--font-light">
													<span><span>$</span>256,100</span>
												</h3>
												<div class="m-widget27__btn">
													<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">Inclusive All Earnings</button>
												</div>
											</div>
											<div class="m-widget27__container">

												<!-- begin::Nav pills -->
												<ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
													<li class="m-widget27__nav-item nav-item">
														<a class="nav-link active" data-toggle="pill" href="#m_personal_income_quater_1">Quater 1</a>
													</li>
													<li class="m-widget27__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#m_personal_income_quater_2">Quater 2</a>
													</li>
													<li class="m-widget27__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#m_personal_income_quater_3">Quater 3</a>
													</li>
													<li class="m-widget27__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#m_personal_income_quater_4">Quater 4</a>
													</li>
												</ul>

												<!-- end::Nav pills -->

												<!-- begin::Tab Content -->
												<div class="m-widget27__tab tab-content m-widget27--no-padding">
													<div id="m_personal_income_quater_1" class="tab-pane active">
														<div class="row  align-items-center">
															<div class="col">
																<div id="m_chart_personal_income_quater_1" class="m-widget27__chart" style="height: 160px">
																	<div class="m-widget27__stat">37</div>
																<svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series custom"><path d="M109.843,101.535A50.578,50.578,0,0,0,64.078,29.422" class="ct-slice-donut" ct:value="32" ct:meta="{&amp;quot;data&amp;quot;:{&amp;quot;color&amp;quot;:&amp;quot;#00c5dc&amp;quot;}}" style="stroke-width: 17px;" stroke-dasharray="101.69471740722656px 101.69471740722656px" stroke-dashoffset="-101.69471740722656px" stroke="#00c5dc"><animate attributeName="stroke-dashoffset" id="anim0" dur="1000ms" from="-101.69471740722656px" to="0px" fill="freeze" stroke="#00c5dc" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series custom"><path d="M25.107,112.24A50.578,50.578,0,0,0,109.917,101.375" class="ct-slice-donut" ct:value="32" ct:meta="{&amp;quot;data&amp;quot;:{&amp;quot;color&amp;quot;:&amp;quot;#ffb822&amp;quot;}}" style="stroke-width: 17px;" stroke-dasharray="101.87034606933594px 101.87034606933594px" stroke-dashoffset="-101.87034606933594px" stroke="#ffb822"><animate attributeName="stroke-dashoffset" id="anim1" dur="1000ms" from="-101.87034606933594px" to="0px" fill="freeze" stroke="#ffb822" begin="anim0.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series custom"><path d="M64.078,29.422A50.578,50.578,0,0,0,25.22,112.376" class="ct-slice-donut" ct:value="36" ct:meta="{&amp;quot;data&amp;quot;:{&amp;quot;color&amp;quot;:&amp;quot;#716aca&amp;quot;}}" style="stroke-width: 17px;" stroke-dasharray="114.58447265625px 114.58447265625px" stroke-dashoffset="-114.58447265625px" stroke="#716aca"><animate attributeName="stroke-dashoffset" id="anim2" dur="1000ms" from="-114.58447265625px" to="0px" fill="freeze" stroke="#716aca" begin="anim1.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g></svg></div>
															</div>
															<div class="col">
																<div class="m-widget27__legends">
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-accent"></span>
																		<span class="m-widget27__legend-text">37% Case</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-warning"></span>
																		<span class="m-widget27__legend-text">42% Events</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-brand"></span>
																		<span class="m-widget27__legend-text">19% Others</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id="m_personal_income_quater_2" class="tab-pane fade">
														<div class="row  align-items-center">
															<div class="col">
																<div id="m_chart_personal_income_quater_2" class="m-widget27__chart" style="height: 160px">
																	<div class="m-widget27__stat">70</div>
																</div>
															</div>
															<div class="col">
																<div class="m-widget27__legends">
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-focus"></span>
																		<span class="m-widget27__legend-text">57% Case</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-success"></span>
																		<span class="m-widget27__legend-text">20% Events</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-danger"></span>
																		<span class="m-widget27__legend-text">19% Others</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id="m_personal_income_quater_3" class="tab-pane fade">
														<div class="row  align-items-center">
															<div class="col">
																<div id="m_chart_personal_income_quater_3" class="m-widget27__chart" style="height: 160px">
																	<div class="m-widget27__stat">67</div>
																</div>
															</div>
															<div class="col">
																<div class="m-widget27__legends">
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-info"></span>
																		<span class="m-widget27__legend-text">47% Case</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-danger"></span>
																		<span class="m-widget27__legend-text">55% Events</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-brand"></span>
																		<span class="m-widget27__legend-text">27% Others</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id="m_personal_income_quater_4" class="tab-pane fade">
														<div class="row  align-items-center">
															<div class="col">
																<div id="m_chart_personal_income_quater_4" class="m-widget27__chart" style="height: 160px">
																	<div class="m-widget27__stat">77</div>
																</div>
															</div>
															<div class="col">
																<div class="m-widget27__legends">
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-warning"></span>
																		<span class="m-widget27__legend-text">37% Case</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-primary"></span>
																		<span class="m-widget27__legend-text">65% Events</span>
																	</div>
																	<div class="m-widget27__legend">
																		<span class="m-widget27__legend-bullet m--bg-danger"></span>
																		<span class="m-widget27__legend-text">33% Others</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- end::Tab Content -->
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Blog-->
							</div>
							<div class="col-xl-4">

								<!--begin:: Widgets/Blog-->
								<div class="m-portlet m-portlet--head-overlay m-portlet--full-height   m-portlet--rounded-force">
									<div class="m-portlet__head m-portlet__head--fit">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text m--font-light">
													Finance Stats
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
														2018
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Reports</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget28">
											<div class="m-widget28__pic m-portlet-fit--sides"></div>
											<div class="m-widget28__container">

												<!-- begin::Nav pills -->
												<ul class="m-widget28__nav-items nav nav-pills nav-fill" role="tablist">
													<li class="m-widget28__nav-item nav-item">
														<a class="nav-link active" data-toggle="pill" href="#menu11"><span><i class="fa flaticon-pie-chart"></i></span><span>GMI Taxes</span></a>
													</li>
													<li class="m-widget28__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#menu21"><span><i class="fa flaticon-file-1"></i></span><span>IMT Invoice</span></a>
													</li>
													<li class="m-widget28__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#menu31"><span><i class="fa flaticon-clipboard"></i></span><span>Main Notes</span></a>
													</li>
												</ul>

												<!-- end::Nav pills -->

												<!-- begin::Tab Content -->
												<div class="m-widget28__tab tab-content">
													<div id="menu11" class="m-widget28__tab-container tab-pane active">
														<div class="m-widget28__tab-items">
															<div class="m-widget28__tab-item">
																<span>Company Name</span>
																<span>SLT Back-end Solutions</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>INE Number</span>
																<span>D330-1234562546</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>Total Charges</span>
																<span>USD 1,250.000</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>Project Description</span>
																<span>Creating Back-end Components</span>
															</div>
														</div>
													</div>
													<div id="menu21" class="m-widget28__tab-container tab-pane fade">
														<div class="m-widget28__tab-items">
															<div class="m-widget28__tab-item">
																<span>Project Description</span>
																<span>Back-End Web Architecture</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>Total Charges</span>
																<span>USD 2,170.000</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>INE Number</span>
																<span>D110-1234562546</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>Company Name</span>
																<span>SLT Back-end Solutions</span>
															</div>
														</div>
													</div>
													<div id="menu31" class="m-widget28__tab-container tab-pane fade">
														<div class="m-widget28__tab-items">
															<div class="m-widget28__tab-item">
																<span>Total Charges</span>
																<span>USD 3,450.000</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>Project Description</span>
																<span>Creating Back-end Components</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>Company Name</span>
																<span>SLT Back-end Solutions</span>
															</div>
															<div class="m-widget28__tab-item">
																<span>INE Number</span>
																<span>D510-7431562548</span>
															</div>
														</div>
													</div>
												</div>

												<!-- end::Tab Content -->
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Blog-->
							</div>
							<div class="col-xl-4">

								<!--begin:: Packages-->
								<div class="m-portlet m--bg-warning m-portlet--bordered-semi m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text m--font-light">
													Packages
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
														2018
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Reports</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Export</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">PDF</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Excel</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">CSV</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">

										<!--begin::Widget 29-->
										<div class="m-widget29">
											<div class="m-widget_content">
												<h3 class="m-widget_content-title">Monthly Income</h3>
												<div class="m-widget_content-items">
													<div class="m-widget_content-item">
														<span>Total</span>
														<span class="m--font-accent">$680</span>
													</div>
													<div class="m-widget_content-item">
														<span>Change</span>
														<span class="m--font-brand">+15%</span>
													</div>
													<div class="m-widget_content-item">
														<span>Licenses</span>
														<span>29</span>
													</div>
												</div>
											</div>
											<div class="m-widget_content">
												<h3 class="m-widget_content-title">Taxes info</h3>
												<div class="m-widget_content-items">
													<div class="m-widget_content-item">
														<span>Total</span>
														<span class="m--font-accent">22.50</span>
													</div>
													<div class="m-widget_content-item">
														<span>Change</span>
														<span class="m--font-brand">+15%</span>
													</div>
													<div class="m-widget_content-item">
														<span>Count</span>
														<span>701</span>
													</div>
												</div>
											</div>
											<div class="m-widget_content">
												<h3 class="m-widget_content-title">Partners Sale</h3>
												<div class="m-widget_content-items">
													<div class="m-widget_content-item">
														<span>Total</span>
														<span class="m--font-accent">$680</span>
													</div>
													<div class="m-widget_content-item">
														<span>Change</span>
														<span class="m--font-brand">+15%</span>
													</div>
													<div class="m-widget_content-item">
														<span>Licenses</span>
														<span>29</span>
													</div>
												</div>
											</div>
										</div>

										<!--end::Widget 29-->
									</div>
								</div>

								<!--end:: Packages-->
							</div>
						</div>

						<!--End::Section-->

						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-6">

								<!--begin:: Widgets/Tasks -->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Tasks
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
														Today
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content1" role="tab">
														Week
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab3_content1" role="tab">
														Month
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget2_tab1_content">
												<div class="m-widget2">
													<div class="m-widget2__item m-widget2__item--primary">
														<div class="m-widget2__checkbox">
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</div>
														<div class="m-widget2__desc">
															<span class="m-widget2__text">
																Make Metronic Great Again.Lorem Ipsum Amet
															</span><br>
															<span class="m-widget2__user-name">
																<a href="#" class="m-widget2__link">
																	By Bob
																</a>
															</span>
														</div>
														<div class="m-widget2__actions">
															<div class="m-widget2__actions-nav">
																<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																	<a href="#" class="m-dropdown__toggle">
																		<i class="la la-ellipsis-h"></i>
																	</a>
																	<div class="m-dropdown__wrapper">
																		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																		<div class="m-dropdown__inner">
																			<div class="m-dropdown__body">
																				<div class="m-dropdown__content">
																					<ul class="m-nav">
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-share"></i>
																								<span class="m-nav__link-text">Activity</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-chat-1"></i>
																								<span class="m-nav__link-text">Messages</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-info"></i>
																								<span class="m-nav__link-text">FAQ</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																								<span class="m-nav__link-text">Support</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="m-widget2__item m-widget2__item--warning">
														<div class="m-widget2__checkbox">
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</div>
														<div class="m-widget2__desc">
															<span class="m-widget2__text">
																Prepare Docs For Metting On Monday
															</span><br>
															<span class="m-widget2__user-name">
																<a href="#" class="m-widget2__link">
																	By Sean
																</a>
															</span>
														</div>
														<div class="m-widget2__actions">
															<div class="m-widget2__actions-nav">
																<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																	<a href="#" class="m-dropdown__toggle">
																		<i class="la la-ellipsis-h"></i>
																	</a>
																	<div class="m-dropdown__wrapper">
																		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																		<div class="m-dropdown__inner">
																			<div class="m-dropdown__body">
																				<div class="m-dropdown__content">
																					<ul class="m-nav">
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-share"></i>
																								<span class="m-nav__link-text">Activity</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-chat-1"></i>
																								<span class="m-nav__link-text">Messages</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-info"></i>
																								<span class="m-nav__link-text">FAQ</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																								<span class="m-nav__link-text">Support</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="m-widget2__item m-widget2__item--brand">
														<div class="m-widget2__checkbox">
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</div>
														<div class="m-widget2__desc">
															<span class="m-widget2__text">
																Make Widgets Great Again.Estudiat Communy Elit
															</span><br>
															<span class="m-widget2__user-name">
																<a href="#" class="m-widget2__link">
																	By Aziko
																</a>
															</span>
														</div>
														<div class="m-widget2__actions">
															<div class="m-widget2__actions-nav">
																<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																	<a href="#" class="m-dropdown__toggle">
																		<i class="la la-ellipsis-h"></i>
																	</a>
																	<div class="m-dropdown__wrapper">
																		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																		<div class="m-dropdown__inner">
																			<div class="m-dropdown__body">
																				<div class="m-dropdown__content">
																					<ul class="m-nav">
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-share"></i>
																								<span class="m-nav__link-text">Activity</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-chat-1"></i>
																								<span class="m-nav__link-text">Messages</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-info"></i>
																								<span class="m-nav__link-text">FAQ</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																								<span class="m-nav__link-text">Support</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="m-widget2__item m-widget2__item--success">
														<div class="m-widget2__checkbox">
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</div>
														<div class="m-widget2__desc">
															<span class="m-widget2__text">
																Make Metronic Great Again.Lorem Ipsum
															</span><br>
															<span class="m-widget2__user-name">
																<a href="#" class="m-widget2__link">
																	By James
																</a>
															</span>
														</div>
														<div class="m-widget2__actions">
															<div class="m-widget2__actions-nav">
																<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																	<a href="#" class="m-dropdown__toggle">
																		<i class="la la-ellipsis-h"></i>
																	</a>
																	<div class="m-dropdown__wrapper">
																		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																		<div class="m-dropdown__inner">
																			<div class="m-dropdown__body">
																				<div class="m-dropdown__content">
																					<ul class="m-nav">
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-share"></i>
																								<span class="m-nav__link-text">Activity</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-chat-1"></i>
																								<span class="m-nav__link-text">Messages</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-info"></i>
																								<span class="m-nav__link-text">FAQ</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																								<span class="m-nav__link-text">Support</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="m-widget2__item m-widget2__item--danger">
														<div class="m-widget2__checkbox">
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</div>
														<div class="m-widget2__desc">
															<span class="m-widget2__text">
																Completa Financial Report For Emirates Airlines
															</span><br>
															<span class="m-widget2__user-name">
																<a href="#" class="m-widget2__link">
																	By Bob
																</a>
															</span>
														</div>
														<div class="m-widget2__actions">
															<div class="m-widget2__actions-nav">
																<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																	<a href="#" class="m-dropdown__toggle">
																		<i class="la la-ellipsis-h"></i>
																	</a>
																	<div class="m-dropdown__wrapper">
																		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																		<div class="m-dropdown__inner">
																			<div class="m-dropdown__body">
																				<div class="m-dropdown__content">
																					<ul class="m-nav">
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-share"></i>
																								<span class="m-nav__link-text">Activity</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-chat-1"></i>
																								<span class="m-nav__link-text">Messages</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-info"></i>
																								<span class="m-nav__link-text">FAQ</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																								<span class="m-nav__link-text">Support</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="m-widget2__item m-widget2__item--info">
														<div class="m-widget2__checkbox">
															<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																<input type="checkbox">
																<span></span>
															</label>
														</div>
														<div class="m-widget2__desc">
															<span class="m-widget2__text">
																Completa Financial Report For Emirates Airlines
															</span><br>
															<span class="m-widget2__user-name">
																<a href="#" class="m-widget2__link">
																	By Sean
																</a>
															</span>
														</div>
														<div class="m-widget2__actions">
															<div class="m-widget2__actions-nav">
																<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																	<a href="#" class="m-dropdown__toggle">
																		<i class="la la-ellipsis-h"></i>
																	</a>
																	<div class="m-dropdown__wrapper">
																		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																		<div class="m-dropdown__inner">
																			<div class="m-dropdown__body">
																				<div class="m-dropdown__content">
																					<ul class="m-nav">
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-share"></i>
																								<span class="m-nav__link-text">Activity</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-chat-1"></i>
																								<span class="m-nav__link-text">Messages</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-info"></i>
																								<span class="m-nav__link-text">FAQ</span>
																							</a>
																						</li>
																						<li class="m-nav__item">
																							<a href="" class="m-nav__link">
																								<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																								<span class="m-nav__link-text">Support</span>
																							</a>
																						</li>
																					</ul>
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
											<div class="tab-pane" id="m_widget2_tab2_content">
											</div>
											<div class="tab-pane" id="m_widget2_tab3_content">
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Tasks -->
							</div>
							<div class="col-xl-6">

								<!--begin:: Widgets/Support Tickets -->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Support Tickets
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
														<i class="la la-ellipsis-h m--font-brand"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget3">
											<div class="m-widget3__item">
												<div class="m-widget3__header">
													<div class="m-widget3__user-img">
														<img class="m-widget3__img" src="assets/app/media/img/users/user1.jpg" alt="">
													</div>
													<div class="m-widget3__info">
														<span class="m-widget3__username">
															Melania Trump
														</span><br>
														<span class="m-widget3__time">
															2 day ago
														</span>
													</div>
													<span class="m-widget3__status m--font-info">
														Pending
													</span>
												</div>
												<div class="m-widget3__body">
													<p class="m-widget3__text">
														Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
													</p>
												</div>
											</div>
											<div class="m-widget3__item">
												<div class="m-widget3__header">
													<div class="m-widget3__user-img">
														<img class="m-widget3__img" src="assets/app/media/img/users/user4.jpg" alt="">
													</div>
													<div class="m-widget3__info">
														<span class="m-widget3__username">
															Lebron King James
														</span><br>
														<span class="m-widget3__time">
															1 day ago
														</span>
													</div>
													<span class="m-widget3__status m--font-brand">
														Open
													</span>
												</div>
												<div class="m-widget3__body">
													<p class="m-widget3__text">
														Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
													</p>
												</div>
											</div>
											<div class="m-widget3__item">
												<div class="m-widget3__header">
													<div class="m-widget3__user-img">
														<img class="m-widget3__img" src="assets/app/media/img/users/user5.jpg" alt="">
													</div>
													<div class="m-widget3__info">
														<span class="m-widget3__username">
															Deb Gibson
														</span><br>
														<span class="m-widget3__time">
															3 weeks ago
														</span>
													</div>
													<span class="m-widget3__status m--font-success">
														Closed
													</span>
												</div>
												<div class="m-widget3__body">
													<p class="m-widget3__text">
														Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Support Tickets -->
							</div>
						</div>

						<!--End::Section-->

						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-6 col-lg-12">

								<!--Begin::Portlet-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Recent Activities
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
														<i class="la la-ellipsis-h m--font-brand"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Quick Actions</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit">
																		</li>
																		<li class="m-nav__item">
																			<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" data-height="380" data-mobile-height="300" style="height: 380px; overflow: hidden;">

											<!--Begin::Timeline 2 -->
											<div class="m-timeline-2">
												<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
													<div class="m-timeline-2__item">
														<span class="m-timeline-2__item-time">10:00</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-danger"></i>
														</div>
														<div class="m-timeline-2__item-text  m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">12:45</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-success"></i>
														</div>
														<div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
															AEOL Meeting With
														</div>
														<div class="m-list-pics m-list-pics--sm m--padding-left-20">
															<a href="#"><img src="assets/app/media/img/users/100_4.jpg" title=""></a>
															<a href="#"><img src="assets/app/media/img/users/100_13.jpg" title=""></a>
															<a href="#"><img src="assets/app/media/img/users/100_11.jpg" title=""></a>
															<a href="#"><img src="assets/app/media/img/users/100_14.jpg" title=""></a>
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">14:00</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-brand"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Make Deposit <a href="#" class="m-link m-link--brand m--font-bolder">USD 700</a> To ESL.
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">16:00</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-warning"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">17:00</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-info"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Placed a new order in <a href="#" class="m-link m-link--brand m--font-bolder">SIGNATURE MOBILE</a> marketplace.
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">16:00</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-brand"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">17:00</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-danger"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Received a new feedback on <a href="#" class="m-link m-link--brand m--font-bolder">FinancePro App</a> product.
														</div>
													</div>
												</div>
											</div>

											<!--End::Timeline 2 -->
										<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 380px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 234px;"></div></div></div>
									</div>
								</div>

								<!--End::Portlet-->
							</div>
							<div class="col-xl-6 col-lg-12">

								<!--Begin::Portlet-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Recent Notifications
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
														Today
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
														Month
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget2_tab1_content">

												<!--Begin::Timeline 3 -->
												<div class="m-timeline-3">
													<div class="m-timeline-3__items">
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">09:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Bob
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time">10:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Sean
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">11:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit eiusmdd tempor
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time">12:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time">14:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit,consectetur eiusmdd
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Derrick
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">15:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit,consectetur
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Iman
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">17:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit consectetur eiusmdd tempor
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Aziko
																	</a>
																</span>
															</div>
														</div>
													</div>
												</div>

												<!--End::Timeline 3 -->
											</div>
											<div class="tab-pane" id="m_widget2_tab2_content">

												<!--Begin::Timeline 3 -->
												<div class="m-timeline-3">
													<div class="m-timeline-3__items">
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-focus">09:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Bob
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time m--font-warning">10:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	There are many variations of passages of Lorem Ipsum available.
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Sean
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-primary">11:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time m--font-success">12:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time m--font-warning">14:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Latin words, combined with a handful of model sentence structures.
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Derrick
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-info">15:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Iman
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-danger">17:00</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem Ipsum is therefore always free from repetition, injected humour.
																</span><br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Aziko
																	</a>
																</span>
															</div>
														</div>
													</div>
												</div>

												<!--End::Timeline 3 -->
											</div>
										</div>
									</div>
								</div>

								<!--End::Portlet-->
							</div>
						</div>

						<!--End::Section-->

						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-8">
								<div class="m-portlet m-portlet--mobile ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Exclusive Datatable Plugin
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item">
													<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
														<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
															<i class="la la-ellipsis-h m--font-brand"></i>
														</a>
														<div class="m-dropdown__wrapper">
															<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
															<div class="m-dropdown__inner">
																<div class="m-dropdown__body">
																	<div class="m-dropdown__content">
																		<ul class="m-nav">
																			<li class="m-nav__section m-nav__section--first">
																				<span class="m-nav__section-text">Quick Actions</span>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-share"></i>
																					<span class="m-nav__link-text">Create Post</span>
																				</a>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-chat-1"></i>
																					<span class="m-nav__link-text">Send Messages</span>
																				</a>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																					<span class="m-nav__link-text">Upload File</span>
																				</a>
																			</li>
																			<li class="m-nav__section">
																				<span class="m-nav__section-text">Useful Links</span>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-info"></i>
																					<span class="m-nav__link-text">FAQ</span>
																				</a>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																					<span class="m-nav__link-text">Support</span>
																				</a>
																			</li>
																			<li class="m-nav__separator m-nav__separator--fit m--hide">
																			</li>
																			<li class="m-nav__item m--hide">
																				<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">

										<!--begin: Datatable -->
										<div class="m_datatable m-datatable m-datatable--default m-datatable--loaded m-datatable--scroll" id="m_datatable_latest_orders" style=""><table class="m-datatable__table" style="display: block; min-height: 300px; max-height: 380px;"><thead class="m-datatable__head"><tr class="m-datatable__row" style="left: 0px;"><th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--all m-checkbox--solid m-checkbox--brand"><input type="checkbox">&nbsp;<span></span></label></span></th><th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort" data-sort="asc"><span style="width: 150px;">Order ID<i class="la la-arrow-up"></i></span></th><th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Ship Name</span></th><th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Ship Date</span></th><th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Status</span></th><th data-field="Type" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Type</span></th><th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Actions</span></th></tr></thead><tbody class="m-datatable__body ps ps--active-x ps--active-y" style="max-height: 329px;"><tr data-row="0" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="200">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0004-0800 - PH</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Steuber-Simonis</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">3/3/2017</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--info m-badge--wide">Info</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="1" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="155">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0019-9450 - PT</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Boyle-Lemke</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">4/25/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="2" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="318">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0031-8724 - PH</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Pagac, Jenkins and Kozey</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">8/22/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="3" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="103">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0032-1212 - PT</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Daniel-Simonis</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">2/2/2017</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="4" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="18">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0054-0080 - IS</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Reichert-Kirlin</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">7/6/2017</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-accent">Direct</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="5" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="22">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0069-0181 - CZ</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Goldner, Kuhlman and Shanahan</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">6/24/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="6" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="136">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0069-3030 - PH</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Hoeger and Sons</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">12/25/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-accent">Direct</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="7" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="77">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0078-0509 - JP</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Raynor, Brekke and Powlowski</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">1/16/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--primary m-badge--wide">Canceled</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-accent">Direct</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="8" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="41">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0078-0614 - RU</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Connelly, Beahan and Schmidt</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">11/26/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--info m-badge--wide">Info</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-accent">Direct</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="100">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0093-3045 - IL</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Nader, Reynolds and Schinner</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">5/24/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--brand m-badge--wide">Pending</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><div class="ps__rail-x" style="width: 623px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 431px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 329px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 188px;"></div></div></tbody></table><div class="m-datatable__pager m-datatable--paging-loaded clearfix"><ul class="m-datatable__pager-nav"><li><a title="First" class="m-datatable__pager-link m-datatable__pager-link--first m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-double-left"></i></a></li><li><a title="Previous" class="m-datatable__pager-link m-datatable__pager-link--prev m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-left"></i></a></li><li style="display: none;"><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-prev" data-page="1"><i class="la la-ellipsis-h"></i></a></li><li style="display: none;"><input type="text" class="m-pager-input form-control" title="Page number"></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--active" data-page="1" title="1">1</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="2" title="2">2</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="3" title="3">3</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="4" title="4">4</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="5" title="5">5</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="6" title="6">6</a></li><li><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-next" data-page="7"><i class="la la-ellipsis-h"></i></a></li><li><a title="Next" class="m-datatable__pager-link m-datatable__pager-link--next" data-page="2"><i class="la la-angle-right"></i></a></li><li><a title="Last" class="m-datatable__pager-link m-datatable__pager-link--last" data-page="35"><i class="la la-angle-double-right"></i></a></li></ul><div class="m-datatable__pager-info"><div class="dropdown bootstrap-select m-datatable__pager-size" style="width: 70px;"><select class="selectpicker m-datatable__pager-size" title="Select page size" data-width="70px" data-selected="10" tabindex="-98"><option class="bs-title-option" value="">Select page size</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Select page size"><div class="filter-option"><div class="filter-option-inner">10</div></div>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div><span class="m-datatable__pager-detail">Displaying 1 - 10 of 350 records</span></div></div></div>

										<!--end: Datatable -->
									</div>
								</div>
							</div>
							<div class="col-xl-4">

								<!--begin:: Widgets/Audit Log-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Audit Log
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
														Today
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
														Week
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
														Month
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget4_tab1_content">
												<div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
													<div class="m-list-timeline m-list-timeline--skin-light">
														<div class="m-list-timeline__items">
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span class="m-list-timeline__text">12 new users registered</span>
																<span class="m-list-timeline__time">Just now</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
																<span class="m-list-timeline__time">14 mins</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																<span class="m-list-timeline__text">New invoice received</span>
																<span class="m-list-timeline__time">20 mins</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																<span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
																<span class="m-list-timeline__time">1 hr</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																<span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
																<span class="m-list-timeline__time">2 hrs</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																<span class="m-list-timeline__text">Production server down</span>
																<span class="m-list-timeline__time">3 hrs</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">Production server up</span>
																<span class="m-list-timeline__time">5 hrs</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
																<span class="m-list-timeline__time">7 hrs</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span class="m-list-timeline__text">12 new users registered</span>
																<span class="m-list-timeline__time">Just now</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
																<span class="m-list-timeline__time">14 mins</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																<span class="m-list-timeline__text">New invoice received</span>
																<span class="m-list-timeline__time">20 mins</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																<span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
																<span class="m-list-timeline__time">1 hr</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																<span class="m-list-timeline__text">New invoice received</span>
																<span class="m-list-timeline__time">20 mins</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																<span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
																<span class="m-list-timeline__time">1 hr</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																<span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
																<span class="m-list-timeline__time">2 hrs</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																<span class="m-list-timeline__text">Production server down</span>
																<span class="m-list-timeline__time">3 hrs</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																<span class="m-list-timeline__text">Production server up</span>
																<span class="m-list-timeline__time">5 hrs</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																<span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
																<span class="m-list-timeline__time">7 hrs</span>
															</div>
														</div>
													</div>
												<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 203px;"></div></div></div>
											</div>
											<div class="tab-pane" id="m_widget4_tab2_content">
											</div>
											<div class="tab-pane" id="m_widget4_tab3_content">
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Audit Log-->
							</div>
						</div>

						<!--End::Section-->

						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-8">

								<!--begin:: Widgets/Best Sellers-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Best Sellers
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
														Last Month
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
														last Year
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
														All time
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">

										<!--begin::Content-->
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">

												<!--begin::m-widget5-->
												<div class="m-widget5">
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Great Logo Designn
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-label">
																		author:
																	</span>
																	<span class="m-widget5__info-author-name">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">19,200</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">1046</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Branding Mockup
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">24,583</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">3809</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Awesome Mobile App
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">10,054</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">1103</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
												</div>

												<!--end::m-widget5-->
											</div>
											<div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">

												<!--begin::m-widget5-->
												<div class="m-widget5">
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Branding Mockup
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">24,583</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">3809</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Great Logo Designn
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">19,200</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">1046</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Awesome Mobile App
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">10,054</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">1103</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
												</div>

												<!--end::m-widget5-->
											</div>
											<div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">

												<!--begin::m-widget5-->
												<div class="m-widget5">
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Branding Mockup
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">10.054</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">1103</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Great Logo Designn
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">24,583</span><br>
																<span class="m-widget5__sales">sales</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">3809</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
													<div class="m-widget5__item">
														<div class="m-widget5__content">
															<div class="m-widget5__pic">
																<img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
															</div>
															<div class="m-widget5__section">
																<h4 class="m-widget5__title">
																	Awesome Mobile App
																</h4>
																<span class="m-widget5__desc">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</span>
																<div class="m-widget5__info">
																	<span class="m-widget5__author">
																		Author:
																	</span>
																	<span class="m-widget5__info-author m--font-info">
																		Fly themes
																	</span>
																	<span class="m-widget5__info-label">
																		Released:
																	</span>
																	<span class="m-widget5__info-date m--font-info">
																		23.08.17
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget5__content">
															<div class="m-widget5__stats1">
																<span class="m-widget5__number">19,200</span><br>
																<span class="m-widget5__sales">1046</span>
															</div>
															<div class="m-widget5__stats2">
																<span class="m-widget5__number">1046</span><br>
																<span class="m-widget5__votes">votes</span>
															</div>
														</div>
													</div>
												</div>

												<!--end::m-widget5-->
											</div>
										</div>

										<!--end::Content-->
									</div>
								</div>

								<!--end:: Widgets/Best Sellers-->
							</div>
							<div class="col-xl-4">

								<!--begin:: Widgets/Authors Profit-->
								<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Authors Profit
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
														All
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">Quick Actions</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit">
																		</li>
																		<li class="m-nav__item">
																			<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget4">
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo5.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Trump Themes
													</span><br>
													<span class="m-widget4__sub">
														Make Metronic Great Again
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">+$2500</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo4.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														StarBucks
													</span><br>
													<span class="m-widget4__sub">
														Good Coffee &amp; Snacks
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">-$290</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo3.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Phyton
													</span><br>
													<span class="m-widget4__sub">
														A Programming Language
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">+$17</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo2.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														GreenMakers
													</span><br>
													<span class="m-widget4__sub">
														Make Green Great Again
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">-$2.50</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo1.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														FlyThemes
													</span><br>
													<span class="m-widget4__sub">
														A Let's Fly Fast Again Language
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">+$200</span>
												</span>
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Authors Profit-->
							</div>
						</div>

						<!--End::Section-->
					</div>
				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 © Metronic theme by <a href="https://keenthemes.com" class="m-link">Keenthemes</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">About</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Privacy</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">T&amp;C</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Purchase</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="" data-placement="left" data-original-title="Support Center">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>
</template>

<script>
export default {  
  computed: {
    authUser(){
      let authUser = this.$store.getters['authUser/authUser'];    
        if (authUser == null) {
          this.$router.push('/')
        }
        return authUser;
    }
  },  
  methods: {
    logout(){
      this.$toasted.success("Goodbye " + this.authUser.name).goAway(1000);
      setTimeout(() => {
        this.$store.dispatch("authUser/logout");
        this.$router.push('/');  
      }, 900);
      
    }
  },
}
</script>