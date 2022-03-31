<!DOCTYPE html>
<!-- saved from url=(0089)https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html -->
<html lang="en">
	<!-- begin::Head -->
	<head>
        <?php include('head.php');?>
        <link href="<?= base_url('resource/agroxa/plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('resource/agroxa/plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />

	</head>
	<!-- end::Head -->
	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-scrolltop--on" style="">
		<!-- begin:: Page -->
		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="https://keenthemes.com/metronic/preview/demo1/index.html">
				<img alt="Logo" src="./file/logo-light.png">
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>
		<!-- end:: Header Mobile -->	
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<!-- begin:: Aside -->
                <?php include('aside.php');?>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <?php include('nav.php');?>
                    <!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Summary                            
									</h3>
									<!-- <span class="kt-subheader__separator kt-hidden"></span> -->
									<!-- <div class="kt-subheader__breadcrumbs">
										<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
										<span class="kt-subheader__breadcrumbs-separator"></span>
										<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html" class="kt-subheader__breadcrumbs-link">
										Crud                        </a>
										<span class="kt-subheader__breadcrumbs-separator"></span>
										<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html" class="kt-subheader__breadcrumbs-link">
										KTDatatable                        </a>
										<span class="kt-subheader__breadcrumbs-separator"></span>
										<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html" class="kt-subheader__breadcrumbs-link">
										Advanced                        </a>
										<span class="kt-subheader__breadcrumbs-separator"></span>
										<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html" class="kt-subheader__breadcrumbs-link">
										Modal Examples                        </a>
									</div> -->
								</div>
							</div>
						</div>
						<!-- end:: Subheader -->
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									<?php if($type=='transactions' || $type=='accounts'){?>	
										Here are All Your Transactions , From Payments Send to Your Account By The Travel Square , TravPAY or Any Agent / Travel Company Associated With Us.
									<?php }?>
									<?php if($type=='travpay'){?>	
										Here are All Your Travpay Transactions Associated With Us.
									<?php }?>
									<?php if($type=='invoice'){?>	
										Auto Generated Invoice of successfull transactions.
									<?php }?>
								</div>
							</div>
							<!-- remote datatable modal -->
							<div id="kt_modal_KTDatatable_remote" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content" style="min-height: 590px;">
										<div class="modal-header">
											<h5 class="modal-title">
												Datatable
												<small>remote data source</small>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">
											<!--begin: Search Form -->
											<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
												<div class="row align-items-center">
													<div class="col-xl-8 order-2 order-xl-1">
														<div class="row align-items-center">
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-input-icon kt-input-icon--left">
																	<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																	<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																	</span>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Status:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Pending</option>
																				<option value="2">Delivered</option>
																				<option value="3">Canceled</option>
																				<option value="4">Success</option>
																				<option value="5">Info</option>
																				<option value="6">Danger</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Type:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Online</option>
																				<option value="2">Retail</option>
																				<option value="3">Direct</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-default kt-hidden">
														<i class="la la-cart-plus"></i> New Order
														</a>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
													</div>
												</div>
											</div>
											<!--end: Search Form -->
										</div>
										<div class="modal-body modal-body-fit">
											<!--begin: Datatable -->
											<div id="modal_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" style="display: none;">
												<table class="kt-datatable__table" style="display: block; min-height: 400px; max-height: 400px;">
													<thead class="kt-datatable__head">
														<tr class="kt-datatable__row" style="left: 0px;">
															<th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort kt-datatable__cell--sorted" data-sort="asc"><span style="width: 110px;">#<i class="flaticon2-arrow-up"></i></span></th>
															<th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Profile Picture</span></th>
															<th data-field="CompanyAgent" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Name</span></th>
															<th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Ship Date</span></th>
															<th data-field="ShipCountry" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Ship Country</span></th>
															<th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Status</span></th>
															<th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Type</span></th>
															<th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Actions</span></th>
														</tr>
													</thead>
													<tbody class="kt-datatable__body ps" style="max-height: 398px;">
														<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">1</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">
																			<div class="kt-badge kt-badge--xl kt-badge--brand">N</div>
																		</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Nixie Sailor</a>								<span class="kt-user-card-v2__desc">Developer</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Nixie Sailor</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">2/12/2018</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CN</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">2</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">
																			<div class="kt-badge kt-badge--xl kt-badge--primary">E</div>
																		</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Emelita Giraldez</a>								<span class="kt-user-card-v2__desc">Architect</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Emelita Giraldez</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">8/6/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">ID</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="2" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">3</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_6.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Ula Luckin</a>								<span class="kt-user-card-v2__desc">Architect</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Ula Luckin</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">5/26/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">AR</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">4</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_7.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Evangeline Cure</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Evangeline Cure</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">7/2/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">ID</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="4" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">5</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_8.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Tierney St. Louis</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Tierney St. Louis</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">5/20/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">AT</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">6</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_9.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Gerhard Reinhard</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Gerhard Reinhard</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">11/26/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CN</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="6" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">7</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_10.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Englebert Shelley</a>								<span class="kt-user-card-v2__desc">CEO</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Englebert Shelley</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">6/28/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CN</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">8</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_11.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Hazlett Kite</a>								<span class="kt-user-card-v2__desc">Designer</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Hazlett Kite</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">8/5/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">HR</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="8" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">9</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_12.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Freida Morby</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Freida Morby</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">3/31/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CO</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">10</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_10.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Obed Helian</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Obed Helian</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">1/26/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">TH</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
															<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
														</div>
														<div class="ps__rail-y" style="top: 0px; right: 0px;">
															<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
														</div>
													</tbody>
												</table>
												<div class="kt-datatable__pager kt-datatable--paging-loaded">
													<ul class="kt-datatable__pager-nav">
														<li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
														<li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
														<li style=""></li>
														<li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
														<li style=""></li>
														<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
														<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="4"><i class="flaticon2-fast-next"></i></a></li>
													</ul>
													<div class="kt-datatable__pager-info">
														<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
															<select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10" tabindex="-98">
																<option class="bs-title-option" value=""></option>
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="20">20</option>
																<option value="30">30</option>
																<option value="50">50</option>
																<option value="100">100</option>
															</select>
															<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-7" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
																<div class="filter-option">
																	<div class="filter-option-inner">
																		<div class="filter-option-inner-inner">10</div>
																	</div>
																</div>
															</button>
															<div class="dropdown-menu ">
																<div class="inner show" role="listbox" id="bs-select-7" tabindex="-1">
																	<ul class="dropdown-menu inner show" role="presentation"></ul>
																</div>
															</div>
														</div>
														<span class="kt-datatable__pager-detail">Showing 1 - 10 of 40</span>
													</div>
												</div>
											</div>
											<!--end: Datatable -->
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-sm" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-default btn-bold btn-upper btn-font-sm">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<!-- local datatable modal -->
							<div id="kt_modal_KTDatatable_local" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content" style="min-height: 590px;">
										<div class="modal-header">
											<h5 class="modal-title">
												Datatable
												<small>local data source</small>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">
											<!--begin: Search Form -->
											<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
												<div class="row align-items-center">
													<div class="col-xl-8 order-2 order-xl-1">
														<div class="row align-items-center">
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-input-icon kt-input-icon--left">
																	<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																	<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																	</span>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Status:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Pending</option>
																				<option value="2">Delivered</option>
																				<option value="3">Canceled</option>
																				<option value="4">Success</option>
																				<option value="5">Info</option>
																				<option value="6">Danger</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-3" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Type:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Online</option>
																				<option value="2">Retail</option>
																				<option value="3">Direct</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-4" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-default kt-hidden">
														<i class="la la-cart-plus"></i> New Order
														</a>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
													</div>
												</div>
											</div>
											<!--end: Search Form -->
										</div>
										<div class="modal-body modal-body-fit">
											<!--begin: Datatable -->
											<div id="modal_datatable_local_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" style="display: none;">
												<table class="kt-datatable__table" style="display: block; min-height: 400px; max-height: 400px;">
													<thead class="kt-datatable__head">
														<tr class="kt-datatable__row" style="left: 0px;">
															<th data-field="id" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox">&nbsp;<span></span></label></span></th>
															<th data-field="employee_id" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Employee ID</span></th>
															<th data-field="name" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Name</span></th>
															<th data-field="hire_date" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Hire Date</span></th>
															<th data-field="gender" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Gender</span></th>
															<th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Status</span></th>
															<th data-field="type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Type</span></th>
															<th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Actions</span></th>
														</tr>
													</thead>
													<tbody class="kt-datatable__body ps" style="max-height: 398px;">
														<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">463978155-5</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Carroll Maharry</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/18/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="2">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">590410601-7</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Jae Frammingham</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">10/22/2017</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="2" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="3">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">562079447-4</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Natalie Stuchberry</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">6/1/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="4">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">078485871-3</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Abran Ivett</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">2/6/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="4" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="5">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">048140516-X</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Viola Ends</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/16/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="6">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">115191539-4</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Marabel Foystone</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">5/10/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="6" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="7">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">053408526-1</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Maiga Frogley</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">10/24/2017</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="8">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">996172199-3</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Leia Rapelli</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/11/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="8" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="9">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">290771439-2</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Lilias Stollsteiner</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">4/26/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="10">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">475138305-1</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Chrissie Trenouth</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">4/5/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
															<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
														</div>
														<div class="ps__rail-y" style="top: 0px; right: 0px;">
															<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
														</div>
													</tbody>
												</table>
												<div class="kt-datatable__pager kt-datatable--paging-loaded">
													<ul class="kt-datatable__pager-nav">
														<li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
														<li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
														<li style=""></li>
														<li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li>
														<li></li>
														<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
														<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="100"><i class="flaticon2-fast-next"></i></a></li>
													</ul>
													<div class="kt-datatable__pager-info">
														<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
															<select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10" tabindex="-98">
																<option class="bs-title-option" value=""></option>
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="20">20</option>
																<option value="30">30</option>
																<option value="50">50</option>
																<option value="100">100</option>
															</select>
															<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-8" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
																<div class="filter-option">
																	<div class="filter-option-inner">
																		<div class="filter-option-inner-inner">10</div>
																	</div>
																</div>
															</button>
															<div class="dropdown-menu ">
																<div class="inner show" role="listbox" id="bs-select-8" tabindex="-1">
																	<ul class="dropdown-menu inner show" role="presentation"></ul>
																</div>
															</div>
														</div>
														<span class="kt-datatable__pager-detail">Showing 1 - 10 of 1000</span>
													</div>
												</div>
											</div>
											<!--end: Datatable -->
										</div>
										<div class="modal-footer kt-hidden">
											<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-default btn-bold btn-upper btn-font-md">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
										<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
										<?php 
											$CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
											$symbols=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
											// $credit_=0;
											// $debit_=0;										
											// foreach($data as $row){
											// 	if($row->currency_id!=$userinfo->currency){
											// 		$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;
													
											// 		if($row->type=='CREDIT' && $row->status=='SUCCESS'){
											// 			$credit_=$credit_+($row->amount*$point);
											// 		}else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
											// 			$debit_=$debit_+($row->amount*$point);
											// 		}
												
											// 	}else{
											// 		if($row->type=='CREDIT' && $row->status=='SUCCESS'){
											// 			$credit_=$credit_+($row->amount);
											// 		}else if($row->type=='DEBIT' && $row->status=='SUCCESS'){
											// 			$debit_=$debit_+($row->amount);
											// 		}

											// 	}
											// }
											// $wallet_balance_=$credit_-$debit_;

										?>
											Wallet Balance: <?= $symbols.' '.$wallet_balance_;?>
										</h3>
									</div>
									<!--<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-clean btn-icon-sm">
											<i class="la la-long-arrow-left"></i>
											Back
											</a>
											&nbsp;
											<div class="dropdown dropdown-inline">
												<button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon2-plus"></i> Add New
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<ul class="kt-nav">
														<li class="kt-nav__section kt-nav__section--first">
															<span class="kt-nav__section-text">Choose an action:</span>
														</li>
														<li class="kt-nav__item">
															<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
															<span class="kt-nav__link-text">Reservations</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
															<span class="kt-nav__link-text">Appointments</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-bell-alarm-symbol"></i>
															<span class="kt-nav__link-text">Reminders</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-contract"></i>
															<span class="kt-nav__link-text">Announcements</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-shopping-cart-1"></i>
															<span class="kt-nav__link-text">Orders</span>
															</a>
														</li>
														<li class="kt-nav__separator kt-nav__separator--fit">
														</li>
														<li class="kt-nav__item">
															<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-rocket-1"></i>
															<span class="kt-nav__link-text">Projects</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-chat-1"></i>
															<span class="kt-nav__link-text">User Feedbacks</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>-->
								</div> 
								<!-- <div class="kt-portlet__body">
									<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="row align-items-center">
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-input-icon kt-input-icon--left">
															<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
															<span class="kt-input-icon__icon kt-input-icon__icon--left">
															<span><i class="la la-search"></i></span>
															</span>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-form__group kt-form__group--inline">
															<div class="kt-form__label">
																<label>Status:</label>
															</div>
															<div class="kt-form__control">
																<div class="dropdown bootstrap-select form-control">
																	<select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																		<option value="">All</option>
																		<option value="1">Pending</option>
																		<option value="2">Delivered</option>
																		<option value="3">Canceled</option>
																		<option value="4">Success</option>
																		<option value="5">Info</option>
																		<option value="6">Danger</option>
																	</select>
																	<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All">
																		<div class="filter-option">
																			<div class="filter-option-inner">
																				<div class="filter-option-inner-inner">All</div>
																			</div>
																		</div>
																	</button>
																	<div class="dropdown-menu ">
																		<div class="inner show" role="listbox" id="bs-select-5" tabindex="-1">
																			<ul class="dropdown-menu inner show" role="presentation"></ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-form__group kt-form__group--inline">
															<div class="kt-form__label">
																<label>Type:</label>
															</div>
															<div class="kt-form__control">
																<div class="dropdown bootstrap-select form-control">
																	<select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
																		<option value="">All</option>
																		<option value="1">Online</option>
																		<option value="2">Retail</option>
																		<option value="3">Direct</option>
																	</select>
																	<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All">
																		<div class="filter-option">
																			<div class="filter-option-inner">
																				<div class="filter-option-inner-inner">All</div>
																			</div>
																		</div>
																	</button>
																	<div class="dropdown-menu ">
																		<div class="inner show" role="listbox" id="bs-select-6" tabindex="-1">
																			<ul class="dropdown-menu inner show" role="presentation"></ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-default kt-hidden">
												<i class="la la-cart-plus"></i> New Order
												</a>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
											</div>
										</div>
									</div>
								</div> -->
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
										
										<?php if($type=="travpay"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>ID</th>
														<th>BENIFICIARY</th>
														<th>TYPE</th>
                                                        <th>MODE</th>
                                                        <th>STATUS</th>
                                                        <th>AMOUNT</th>
                                                        <th>DATE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ 
													if($row->mode=="TRAVPAY"){?>
                                                    <tr>
                                                        <?php 
														    $CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
															 if($row->currency_id!=$userinfo->currency){
																$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;
																$price=$row->amount*$point;
																$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
															}else{
																$price=$row->amount;
                                                                $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                                            }
														?>	
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>

														<td><?= $row->type;?></td>
                                                        <td><?= $row->mode;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
                                                        

                                                    </tr>
													<?php } } }?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										<?php if($type=="transactions"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>ID</th>
														<th>BENIFICIARY</th>
														<th>TYPE</th>
                                                        <th>MODE</th>
                                                        <th>STATUS</th>
                                                        <th>AMOUNT</th>
                                                        <th>DATE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ ?>
													<tr>
                                                        <?php 
														    $CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
															 if($row->currency_id!=$userinfo->currency){
																$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;
																$price=$row->amount*$point;
																$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
															}else{
																$price=$row->amount;
                                                                $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                                            }
														?>	
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>

														<td><?= $row->type;?></td>
                                                        <td><?= $row->mode;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
                                                        

                                                    </tr>
													<?php }}
												?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										<?php if($type=="accounts"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>ID</th>
														<th>BENIFICIARY</th>
														<th>TYPE</th>
                                                        <th>MODE</th>
                                                        <th>STATUS</th>
                                                        <th>AMOUNT</th>
														<th>DATE</th>
                                                        <th>DETAILS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ ?>
													<tr>
                                                        <?php 
														    $CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
															 if($row->currency_id!=$userinfo->currency){
																$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;
																$price=$row->amount*$point;
																$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
															}else{
																$price=$row->amount;
                                                                $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                                            }
														?>	
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>

														<td><?= $row->type;?></td>
                                                        <td><?= $row->mode;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
														<td>
															<?php
																$ciphering = "AES-128-CTR"; 
																$iv_length = openssl_cipher_iv_length($ciphering); 
																$options = 0; 
																$encryption_iv = '1234567891011121'; 
																$encryption_key = "thetravel@square@123"; 
																$encryption = openssl_encrypt($row->id, $ciphering,$encryption_key, $options, $encryption_iv); 
															?>
															<a href="<?= base_url('seller-transaction-details/'.$encryption);?>">Details</a>
															<!-- <?php $hidden=['id'=>$row->id];?>
															<?php echo form_open_multipart('transaction-details', 'class="kt-form"',$hidden);?>
																<button type="submit" class="btn btn-primary btn-xs">Details</button>
															</form> -->
														</td>
                                                        

                                                    </tr>
													<?php }}
												?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										<?php if($type=="invoice"){?>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>ID</th>
														<th>BENIFICIARY</th>
														<th>TYPE</th>
                                                        <th>MODE</th>
                                                        <th>STATUS</th>
                                                        <th>AMOUNT</th>
														<th>DATE</th>
                                                        <th>DETAILS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data)){ foreach($data as $row){ if($row->status=="SUCCESS"){ ?>
													<tr>
                                                        <?php 
														    $CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
															 if($row->currency_id!=$userinfo->currency){
																$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency_id' and currency_from= '$userinfo->currency'")->points;
																$price=$row->amount*$point;
																$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
															}else{
																$price=$row->amount;
                                                                $symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
                                                            }
														?>	
														<td><?= $row->id;?></td>
														<td><?= $row->benificiary_name;?><br><?= $row->benificiary_holder_name;?></td>

														<td><?= $row->type;?></td>
                                                        <td><?= $row->mode;?></td>
                                                        
                                                        <?php if($row->status=="PENDING"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill " style="background-color:black"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="SUCCESS"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        <?php if($row->status=="FAILURE"){?>
                                                            <td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill"><?= $row->status;?></span></span></td>
                                                        <?php }?>
                                                        
                                                        <td><?= $symbol.' '.$price;?></td>
                                                        <td><?= $row->created_at;?></td>
														<td>
															<?php
																$ciphering = "AES-128-CTR"; 
																$iv_length = openssl_cipher_iv_length($ciphering); 
																$options = 0; 
																$encryption_iv = '1234567891011121'; 
																$encryption_key = "thetravel@square@123"; 
																$encryption = openssl_encrypt($row->id, $ciphering,$encryption_key, $options, $encryption_iv); 
															?>
															<a href="<?= base_url('seller-transaction-details/'.$encryption);?>">Details</a>
															<!-- <?php $hidden=['id'=>$row->id];?>
															<?php echo form_open_multipart('transaction-details', 'class="kt-form"',$hidden);?>
																<button type="submit" class="btn btn-primary btn-xs">Details</button>
															</form> -->
														</td>
                                                        

                                                    </tr>
													<?php }}}
												?>
                                                </tbody>
                                            </table>
                                        <?php }?>
										<!-- <table class="kt-datatable__table" style="display: block;">
											<thead class="kt-datatable__head">
												<tr class="kt-datatable__row" style="left: 0px;">
													<th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort"><span style="width: 30px;"></span></th>
													<th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort kt-datatable__cell--sorted" data-sort="asc"><span style="width: 146px;">First Name<i class="flaticon2-arrow-up"></i></span></th>
													<th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 146px;">Last Name</span></th>
													<th data-field="Company" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 146px;">Company</span></th>
													<th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 146px;">Email</span></th>
													<th data-field="Phone" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 146px;">Phone</span></th>
													<th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 146px;">Status</span></th>
													<th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 146px;">Type</span></th>
													<th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Actions</span></th>
												</tr>
											</thead>
											<tbody class="kt-datatable__body" style="">
												<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">34</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Anna-diana</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Heustice</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Gabtune</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">aheusticex@unicef.org</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">190-810-7635</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="34" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">2</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Anthea</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Draysey</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Kwideo</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">adraysey1@pbs.org</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">393-117-1236</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="2" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="2" class="kt-datatable__row" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">5</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Arlena</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Gigg</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Kayveo</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">agigg4@si.edu</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">115-592-3567</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="5" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">15</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Augusto</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Crimp</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Thoughtmix</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">acrimpe@privacy.gov.au</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">176-232-5798</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="15" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="4" class="kt-datatable__row" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">1</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Berry</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Biss</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Edgewire</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">bbiss0@smh.com.au</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">944-972-8385</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="1" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">45</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Bonnie</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Clausson</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Latz</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">bclausson18@plala.or.jp</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">964-805-9952</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="45" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="6" class="kt-datatable__row kt-datatable__row--hover" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">43</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Byron</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Macklam</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Ozu</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">bmacklam16@w3.org</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">300-415-9878</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="43" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">38</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Casey</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Bogges</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Feedspan</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">cbogges11@alexa.com</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">194-172-4942</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="38" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="8" class="kt-datatable__row" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">40</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Chick</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Yarranton</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Oyondu</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">cyarranton13@simplemachines.org</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">585-270-3607</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="40" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
												<tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
													<td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 30px;">27</span></td>
													<td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="FirstName"><span style="width: 146px;">Chrisy</span></td>
													<td data-field="LastName" class="kt-datatable__cell"><span style="width: 146px;">Dobbing</span></td>
													<td data-field="Company" class="kt-datatable__cell"><span style="width: 146px;">Divanoodle</span></td>
													<td data-field="Email" class="kt-datatable__cell"><span style="width: 146px;">cdobbingq@shareasale.com</span></td>
													<td data-field="Phone" class="kt-datatable__cell"><span style="width: 146px;">992-744-6051</span></td>
													<td data-field="Status" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></span></td>
													<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 146px;"><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
													<td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 130px;">		                  <button data-record-id="27" class="btn btn-sm btn-default btn-font-sm" title="Edit details">		                      <i class="flaticon2-document"></i> Details		                  </button></span></td>
												</tr>
											</tbody>
										</table>
										<div class="kt-datatable__pager kt-datatable--paging-loaded">
											<ul class="kt-datatable__pager-nav">
												<li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
												<li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
												<li style=""></li>
												<li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
												<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
												<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
												<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
												<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
												<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li>
												<li style=""></li>
												<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
												<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="5"><i class="flaticon2-fast-next"></i></a></li>
											</ul>
											<div class="kt-datatable__pager-info">
												<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
													<select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10" tabindex="-98">
														<option class="bs-title-option" value=""></option>
														<option value="5">5</option>
														<option value="10">10</option>
														<option value="20">20</option>
														<option value="30">30</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-9" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
														<div class="filter-option">
															<div class="filter-option-inner">
																<div class="filter-option-inner-inner">10</div>
															</div>
														</div>
													</button>
													<div class="dropdown-menu ">
														<div class="inner show" role="listbox" id="bs-select-9" tabindex="-1">
															<ul class="dropdown-menu inner show" role="presentation"></ul>
														</div>
													</div>
												</div>
												<span class="kt-datatable__pager-detail">Showing 1 - 10 of 50</span>
											</div>
										</div> -->
									</div>
									<!--end: Datatable -->
								</div>
							</div>
							<div id="kt_modal_sub_KTDatatable_remote" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
								<div class="modal-dialog modal-xl modal-dialog-centered">
									<div class="modal-content" style="min-height: 590px;">
										<!-- <div class="modal-header">
											<h5 class="modal-title">
												Sub KTDatatable in Modal Pop-up
												<small>sub datatable for the selected row is loaded from remote data source</small>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
											</button>
										</div> -->
										<div class="modal-body">
											<!--begin: Search Form -->
											<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
												<div class="row align-items-center">
													<div class="col-xl-8 order-2 order-xl-1">
														<div class="row align-items-center">
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-input-icon kt-input-icon--left">
																	<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																	<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																	</span>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Status:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Pending</option>
																				<option value="2">Delivered</option>
																				<option value="3">Canceled</option>
																				<option value="4">Success</option>
																				<option value="5">Info</option>
																				<option value="6">Danger</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-10" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-10" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Type:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Online</option>
																				<option value="2">Retail</option>
																				<option value="3">Direct</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-11" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-11" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-default kt-hidden">
														<i class="la la-cart-plus"></i> New Order
														</a>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
													</div>
												</div>
											</div>
											<!--end: Search Form -->
										</div>
										<div class="modal-body modal-body-fit">
											<!--begin: Datatable -->
											<div id="modal_sub_datatable_ajax_source" class="kt-datatable--destroyed"></div>
											<!--end: Datatable -->
										</div>
										<div class="modal-footer kt-hidden">
											<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-default btn-bold btn-upper btn-font-md">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end:: Content -->				
					</div>
					<!-- begin:: Footer -->
						<?php include('footer.php');?>
					<!-- end:: Footer -->			
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!-- begin::Quick Panel -->
		<div id="kt_quick_panel" class="kt-quick-panel">
			<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav" kt-hidden-height="66" style="">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>
			<div class="kt-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show kt-scroll active ps ps--active-y" id="kt_quick_panel_tab_notifications" role="tabpanel" style="height: 592px; overflow: hidden;">
						<div class="kt-notification">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-line-chart kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been received
									</div>
									<div class="kt-notification__item-time">
										2 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-box-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-chart2 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Application has been approved
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-image-file kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New file has been uploaded
									</div>
									<div class="kt-notification__item-time">
										5 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-drop kt-font-info"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New user feedback received
									</div>
									<div class="kt-notification__item-time">
										8 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart-2 kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										System reboot has been successfully completed
									</div>
									<div class="kt-notification__item-time">
										12 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-favourite kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been placed
									</div>
									<div class="kt-notification__item-time">
										15 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item kt-notification__item--read">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-safe kt-font-primary"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Company meeting canceled
									</div>
									<div class="kt-notification__item-time">
										19 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-psd kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New report has been received
									</div>
									<div class="kt-notification__item-time">
										23 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-download-1 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Finance report has been generated
									</div>
									<div class="kt-notification__item-time">
										25 hrs ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-security kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer comment recieved
									</div>
									<div class="kt-notification__item-time">
										2 days ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 days ago
									</div>
								</div>
							</a>
						</div>
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
							<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
						</div>
						<div class="ps__rail-y" style="top: 0px; height: 592px; right: 5px;">
							<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
						</div>
					</div>
					<div class="tab-pane fade kt-scroll ps" id="kt_quick_panel_tab_logs" role="tabpanel" style="height: 592px; overflow: hidden;">
						<div class="kt-notification-v2">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-bell kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										5 new user generated report
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-box kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										2 new items submited
									</div>
									<div class="kt-notification-v2__item-desc">
										by Grog John
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-psd kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										79 PSD files generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-supermarket kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										$2900 worth producucts sold
									</div>
									<div class="kt-notification-v2__item-desc">
										Total 234 items
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-paper-plane-1 kt-font-success"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-information kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										Database server is down
									</div>
									<div class="kt-notification-v2__item-desc">
										10 mins ago
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-mail-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										System report has been generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-hangouts-logo kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
						</div>
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
							<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
						</div>
						<div class="ps__rail-y" style="top: 0px; right: 5px;">
							<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
						</div>
					</div>
					<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll ps" id="kt_quick_panel_tab_settings" role="tabpanel" style="height: 592px; overflow: hidden;">
						<form class="kt-form">
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Case Tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
									<input type="checkbox" name="quick_panel_notifications_2">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Support Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Generate Reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Report Export:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
									<input type="checkbox" name="quick_panel_notifications_3">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow Data Collection:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Member singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Allow User Feedbacks:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
									<input type="checkbox" name="quick_panel_notifications_5">
									<span></span>
									</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Enable Customer Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
									<span></span>
									</label>
									</span>
								</div>
							</div>
						</form>
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
							<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
						</div>
						<div class="ps__rail-y" style="top: 0px; right: 5px;">
							<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end::Quick Panel -->
		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- end::Scrolltop -->
		<!-- begin::Sticky Toolbar -->
		<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="Check out more demos">
				<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class=""><i class="flaticon2-drop"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Layout Builder">
				<a href="#
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Documentation">
				<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Chat Example">
				<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
			</li>
		</ul>
		<!-- end::Sticky Toolbar -->
		<!-- begin::Demo Panel -->
		<div id="kt_demo_panel" class="kt-demo-panel">
			<div class="kt-demo-panel__head" kt-hidden-height="50" style="">
				<h3 class="kt-demo-panel__title">
					Select A Demo
					<!--<small>5</small>-->
				</h3>
				<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-demo-panel__body kt-scroll ps ps--active-y" style="height: 553px; overflow: hidden;">
				<div class="kt-demo-panel__item kt-demo-panel__item--active">
					<div class="kt-demo-panel__item-title">
						Demo 1
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo1.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo2.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo2/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo2/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo3.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo3/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo4.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo4/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo4/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo5.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo5/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo5/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo6.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo6/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo6/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo7.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo7/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo7/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 8
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo8.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo8/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo8/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 9
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo9.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo9/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo9/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 10
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo10.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo10/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo10/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 11
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo11.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo11/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo11/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 12
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo12.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo12/crud/metronic-datatable/advanced/modal.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo12/rtl/crud/metronic-datatable/advanced/modal.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 13
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo13.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 14
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo14.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 15
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo15.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 16
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo16.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 17
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo17.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 18
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo18.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 19
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo19.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 20
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo20.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 21
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo21.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 22
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo22.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 23
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo23.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 24
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo24.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 25
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo25.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 26
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo26.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 27
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo27.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 28
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo28.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 29
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo29.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 30
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="./file/demo30.jpg" alt="">
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
				Buy Metronic Now!
				</a>
				<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
					<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
				</div>
				<div class="ps__rail-y" style="top: 0px; height: 553px; right: 0px;">
					<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
				</div>
			</div>
		</div>
		<!-- end::Demo Panel -->
		<!--Begin:: Chat-->
		<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="kt-chat">
						<div class="kt-portlet kt-portlet--last">
							<div class="kt-portlet__head">
								<div class="kt-chat__head ">
									<div class="kt-chat__left">
										<div class="kt-chat__label">
											<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__title">Jason Muller</a>
											<span class="kt-chat__status">
											<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
										</div>
									</div>
									<div class="kt-chat__right">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="flaticon-more-1"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Messaging
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-group"></i>
														<span class="kt-nav__link-text">New Group</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
														<span class="kt-nav__link-text">Contacts</span>
														<span class="kt-nav__link-badge">
														<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
														</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-bell-2"></i>
														<span class="kt-nav__link-text">Calls</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-dashboard"></i>
														<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-protected"></i>
														<span class="kt-nav__link-text">Help</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
										</div>
										<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
										<i class="flaticon2-cross"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-scroll kt-scroll--pull ps" data-height="410" data-mobile-height="225" style="height: 410px; overflow: hidden;">
									<div class="kt-chat__messages kt-chat__messages--solid">
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												How likely are you to recommend our company<br> to your friends and family?
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok, Understood!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You’ll receive notifications for all issues, pull requests!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You can unwatch this repository immediately <br>by clicking here: <a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-font-bold kt-link"></a>
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/100_12(1).jpg" alt="image">
												</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">Jason Muller</a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-chat__username">You</a>
												<span class="kt-media kt-media--circle kt-media--sm">
												<img src="./file/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Ok!
											</div>
										</div>
									</div>
									<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
										<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
									</div>
									<div class="ps__rail-y" style="top: 0px; right: -2px;">
										<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="kt-chat__input">
									<div class="kt-chat__editor">
										<textarea placeholder="Type here..." style="height: 50px"></textarea>
									</div>
									<div class="kt-chat__toolbar">
										<div class="kt_chat__tools">
											<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="flaticon2-link"></i></a>
											<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="flaticon2-photograph"></i></a>
											<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="flaticon2-photo-camera"></i></a>
										</div>
										<div class="kt_chat__actions">
											<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--ENd:: Chat-->
		<!-- begin::Global Config(global config for global JS sciprts) -->
        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>
	</body>
</html>