<!DOCTYPE html>
<!--
    Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
    Author: KeenThemes
    Website: http://www.keenthemes.com/
    Contact: support@keenthemes.com
    Follow: www.twitter.com/keenthemes
    Dribbble: www.dribbble.com/keenthemes
    Like: www.facebook.com/keenthemes
    Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
    Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
    -->
<html lang="en" >
    <!-- begin::Head -->
    <!-- Mirrored from keenthemes.com/metronic/preview/demo1/crud/datatables/advanced/multiple-controls.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 05:21:52 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <?php include('head.php');?>
        <link href="<?= base_url('resource/agroxa/plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('resource/agroxa/plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url('resource/agroxa/plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />

    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
            <div class="kt-header-mobile__logo">
                <a href="../../../index.html">
                <img alt="Logo" src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-light.png"/>
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
                <!-- Uncomment this to display the close button of the panel
                    <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
                    -->
                <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                    <!-- begin:: Aside -->
                    <?php include('aside.php');?>
                    <!-- end:: Aside Menu -->				
                </div>
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
                                        Deals                           
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Subheader -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 100%; background-color:white;">
                                        <thead>
                                            <tr>
												<th>Image</th>
                                                <th>Deal Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($mdata as $row){ ?>
                                            <tr>
                                                <td><img src="<?= $row['image'];?>" width="100" height="100"/></td>
                                                <td width="100%">
                                                    <a target="_blank" href="<?= base_url('partner/deal/'.$row['id']);?>" style="color:black;">
                                                        <h6 style="background-color:white;padding:15px;"><?= $row['title'];?></h6>
                                                        <hr>
                                                        <p align="right"> Price : Rs. <?= $row['b2bprice'];?> </p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
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
            <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
            <div class="kt-quick-panel__nav">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="kt-quick-panel__content">
                <div class="tab-content">
                    <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                        <div class="kt-notification">
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item kt-notification__item--read">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                            <a href="#" class="kt-notification__item">
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
                    </div>
                    <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                        <div class="kt-notification-v2">
                            <a href="#" class="kt-notification-v2__item">
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
                            <a href="#" class="kt-notification-v2__item">
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
                            <a href="#" class="kt-notification-v2__item">
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
                            <a href="#" class="kt-notification-v2__item">
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
                            <a href="#" class="kt-notification-v2__item">
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
                            <a href="#" class="kt-notification-v2__item">
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
                            <a href="#" class="kt-notification-v2__item">
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
                            <a href="#" class="kt-notification-v2__item">
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
                    </div>
                    <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
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
                                    <input type="checkbox"  name="quick_panel_notifications_2">
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
                                    <input type="checkbox"  name="quick_panel_notifications_3">
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
                                    <input type="checkbox"  name="quick_panel_notifications_5">
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
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip"  title="Check out more demos" data-placement="right">
                <a href="#" class=""><i class="flaticon2-drop"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
                <a href="../../../builder.html" ><i class="flaticon2-gear"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
                <a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
                <a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
            </li>
        </ul>
        <!-- end::Sticky Toolbar -->
        <!-- begin::Demo Panel -->
        <div id="kt_demo_panel" class="kt-demo-panel">
            <div class="kt-demo-panel__head">
                <h3 class="kt-demo-panel__title">
                    Select A Demo
                    <!--<small>5</small>-->
                </h3>
                <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
            </div>
            <div class="kt-demo-panel__body">
                <div class="kt-demo-panel__item kt-demo-panel__item--active">
                    <div class="kt-demo-panel__item-title">
                        Demo 1
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo1.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="../../../rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 2
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo2.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo2/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo2/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 3
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo3.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo3/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo3/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 4
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo4.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo4/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo4/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 5
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo5.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo5/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo5/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 6
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo6.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo6/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo6/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 7
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo7.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo7/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo7/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 8
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo8.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo8/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo8/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 9
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo9.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo9/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo9/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 10
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo10.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo10/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo10/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 11
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo11.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo11/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo11/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 12
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo12.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo12/crud/datatables/advanced/multiple-controls.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo12/rtl/crud/datatables/advanced/multiple-controls.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 13
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo13.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 14
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo14.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 15
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo15.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 16
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo16.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 17
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo17.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 18
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo18.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 19
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo19.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 20
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo20.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 21
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo21.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 22
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo22.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 23
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo23.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 24
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo24.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 25
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo25.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 26
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo26.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 27
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo27.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 28
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo28.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 29
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo29.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 30
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/demos/preview/demo30.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                        </div>
                    </div>
                </div>
                <a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
                Buy Metronic Now!
                </a>
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
                                            <a href="#" class="kt-chat__title">Jason Muller</a>
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
                                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-group"></i>
                                                        <span class="kt-nav__link-text">New Group</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                        <span class="kt-nav__link-text">Contacts</span>
                                                        <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                                        </span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                        <span class="kt-nav__link-text">Calls</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                        <span class="kt-nav__link-text">Help</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__foot">
                                                        <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
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
                                <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="225">
                                    <div class="kt-chat__messages kt-chat__messages--solid">
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                                </span>
                                                <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                                <span class="kt-chat__datetime">2 Hours</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                How likely are you to recommend our company<br> to your friends and family?
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                                <a href="#" class="kt-chat__username">You</span></a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                                </span>
                                                <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Ok, Understood!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="#" class="kt-chat__username">You</span></a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You’ll receive notifications for all issues, pull requests!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                                </span>
                                                <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                                <span class="kt-chat__datetime">2 Hours</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                                <a href="#" class="kt-chat__username">You</span></a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                                </span>
                                                <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Ok!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="#" class="kt-chat__username">You</span></a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Ok!
                                            </div>
                                        </div>
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
                                            <a href="#"><i class="flaticon2-link"></i></a>
                                            <a href="#"><i class="flaticon2-photograph"></i></a>
                                            <a href="#"><i class="flaticon2-photo-camera"></i></a>
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
    <!-- end::Body -->
    <!-- Mirrored from keenthemes.com/metronic/preview/demo1/crud/datatables/advanced/multiple-controls.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 05:21:55 GMT -->
</html>