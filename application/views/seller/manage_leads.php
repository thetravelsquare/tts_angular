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
										Leads                            
									</h3>
									<span class="kt-subheader__separator kt-hidden"></span>
									<div class="kt-subheader__breadcrumbs">
										<!-- <a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
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
										Modal Examples                        </a> -->
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									
								</div>
							</div>
						</div>
						<!-- end:: Subheader -->
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<?php if($id==0){?>
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									<a href="<?= base_url('seller-manage-leads');?>">	
									View All Your Purchased Leads, Organic Leads & Advertisnment Campaign Leads Here ! 
									</a>
								</div>
							</div>
							<?php }?>



							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
										<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											<?php if($id==0){ ?>
												Purchased Leads
											<?php }?>
											<?php if($id==1){ ?>
												Manage Leads
											<?php }?>
											<small>(Run Campaigns For Regular Leads)</small>
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
										<?php if($id==1){ ?>
											<a href="<?= base_url('seller-purchase-leads');?>" class="btn btn-clean btn-icon-sm">
											<i class="la la-long-arrow-left"></i>
											Purchase Leads
											</a>
										<?php }?>
										<?php if($id==0){ ?>
											<a href="<?= base_url('seller-manage-leads');?>" class="btn btn-clean btn-icon-sm">
											<i class="la la-long-arrow-left"></i>
											Manage Leads
											</a>
										<?php }?>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 100%; background-color:white;">
                                                <thead>
                                                    <tr>
														<?php if($id==0){ ?>
															<th>Action</th>
														<?php }?>
														<?php if($id==1){ ?>
															<th>Userinfo</th>
														<?php }?>
														<th>Price</th>
                                                        <th>Leaving From</th>
                                                        <th>Going To</th>
                                                        <th>Start Date/End Date</th>
                                                        <th>Total Pax</th>
                                                        <th>Adults/Kids/Infants</th>
                                                        <th>Class Of Travel</th>
                                                        <th>Preferred Airline</th>
                                                        <th>Origin</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(!empty($mdata)){ foreach($mdata as $row){ ?>
                                                    <tr>
														<?php 
														    $CI =& get_instance(); $CI->load->model('MainModel','admin'); 
																		
															 if($row->currency!=$userinfo->currency){
																$point=$CI->admin->getRawRow("Select * from currency_tracker where currency_to='$row->currency' and currency_from= '$userinfo->currency'")->points;
																$price=$row->price*$point;
																$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
																}else{
																	$price=$row->price;
																	$symbol=$CI->admin->getRawRow("Select * from tbl_currency where id='$userinfo->currency'")->symbol;
																}
														?>
														<?php if($id==0){ ?>
														<td>
														
															<?php $hidden=['id'=>$row->id,'type'=>'LEAD','price'=>$price];?>
															<?php echo form_open_multipart('seller-buy', '',$hidden);?>
																<!-- <a href="<?= base_url('Partner/grabThisLead/'.$row->id);?>">Grab Lead</a> -->
																<button type="submit" >Purchase</button>
															</form>
														
														</td>
														<?php }?>
														<?php if($id==1){ ?>
															<td><?= $row->mobile;?></td>
														<?php }?>
														
                                                        <td><?= $symbol;?> <?= $price;?></td>
														
														<td><?= $row->leaving_from;?></td>
                                                        <td><?= $row->going_to;?></td>
                                                        <td><?= $row->start_date;?> / <?= $row->end_date;?></td>
                                                        <td><?= $row->total_pax;?></td>
                                                        <td><?= $row->adults;?> / <?= $row->kids;?> / <?= $row->infants;?></td>
                                                        <td><?= $row->class_of_travel;?></td>
                                                        <td><?= $row->preferred_airline;?></td>
                                                        <td><?= $row->origin;?></td>

                                                    </tr>
                                                    <?php }}?>
                                                </tbody>
                                            </table>
									</div>
									<!--end: Datatable -->
								</div>
							</div>
							<div id="kt_modal_sub_KTDatatable_remote" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
								<div class="modal-dialog modal-xl modal-dialog-centered">
									<div class="modal-content" style="min-height: 590px;">
										<div class="modal-header">
											<h5 class="modal-title">
												Sub KTDatatable in Modal Pop-up
												<small>sub datatable for the selected row is loaded from remote data source</small>
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
        <?php include('jquery.php');?>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/dataTables.responsive.min.js');?>"></script>
        <script src="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('resource/agroxa/assets/pages/datatables.init.js');?>"></script>

	</body>
</html>