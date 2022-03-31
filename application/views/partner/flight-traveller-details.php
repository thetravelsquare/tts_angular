<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <?php include('head.php');?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            div.dropdown {
            position: relative;
            }

            div.dropdown > div.caption {
            background-color: #f2f2f2;
            padding: 11px 24px;
            border-radius: 3px;
            cursor: pointer;
            }
            div.dropdown > div.list {
            position: absolute;
            background-color: #f2f2f2;
            width: 100%;
            border-radius: 0 0 3px 3px;
            display: none;
            }

            div.dropdown > div.list > div.item {
            padding: 11px 24px;
            cursor: pointer;
            }

            div.dropdown > div.list > div.item.selected {
            font-weight: bold;
            }

            div.dropdown > div.caption:hover,
            div.dropdown > div.list > div.item:hover {
            background-color: rgb(83, 161, 214);
            color: #fff;
            }

            div.dropdown.open > div.caption {
            border-radius: 3px 3px 0 0;
            border-bottom: solid 1px #999;
            }

            div.dropdown.open > div.list {
            display: block;
            }
        </style>

    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="https://keenthemes.com/metronic/preview/demo1/index.html">
                <img alt="The Travel Square" src="./img/the-travel-square-logo-small.png">
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
                <?php include('aside.php');?>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <?php include('nav.php');?>
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Partner ID</h3>
                                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                    <span class="kt-subheader__desc">TSA167D</span>
                                    <a href="http://supplier.thetravelsquare.in/" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                                    View Profile
                                    </a>
                                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                        <span><i class="flaticon2-search-1"></i></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="kt-subheader__toolbar">
                                    <div class="kt-subheader__wrapper">
                                        <a href="http://supplier.thetravelsquare.in/" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Bookings Calender">
                                        <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Date : </span>&nbsp;
                                        <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Mar 17</span>
                                        <i class="flaticon2-calendar-1"></i>
                                        </a>
                                        <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Publish Deal" data-placement="left">
                                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--<i class="flaticon2-plus"></i>-->
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Nav-->
                                                <ul class="kt-nav">
                                                    <li class="kt-nav__head">
                                                        Publish Your Deals                                   
                                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                        <span class="kt-nav__link-text">Package Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                        <span class="kt-nav__link-text">Hotel Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Transfers Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Experience Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Flight Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                        <span class="kt-nav__link-text">Visa Deal</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__foot">
                                                        <a class="btn btn-label-brand btn-bold btn-sm" href="http://supplier.thetravelsquare.in/">VERIFY AS SELLER</a>                                    
                                                        <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="http://supplier.thetravelsquare.in/" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                                    </li>
                                                </ul>
                                                <!--end::Nav-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->					
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <!--Begin::Dashboard 1-->
                            <!--Begin::Row-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Booking</a></li>
                                    <li class="breadcrumb-item"><a href="#">Search Flights</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Traveller Details</li>
                                </ol>
                            </nav>
                            <div class="h5">Traveller Details</div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                                        <div class="h5">Adult 1</div>
                                            <!--begin:: Widgets/Activity-->
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputDate">Title</label>
                                                            <div class="dropdown">
                                                                <div class="caption">Select</div>
                                                                <div class="list">
                                                                <div class="item">Mr.</div>
                                                                <div class="item">Mrs.</div>
                                                                <div class="item">Miss</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputDate">First Name</label>
                                                            <input type="text" class="form-control" placeholder="First Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputDate">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputDate">Nationality</label>
                                                            <div class="dropdown">
                                                                <div class="caption">India</div>
                                                                <div class="list">
                                                                <div class="item">Nepal</div>
                                                                <div class="item">Bhutan</div>
                                                                <div class="item">America</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-left">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Frequent Flyer</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group text-center">
                                                    <button class="btn btn-primary">Search Flights</button>
                                                </div> -->
                                        </div>
                                    </div>

                                    
                                    <div class="row mt-3">
                                        <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                                        <div class="h5">Contact Information</div>
                                            <!--begin:: Widgets/Activity-->
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputDate">Country Code</label>
                                                            <div class="dropdown">
                                                                <div class="caption">+91</div>
                                                                <div class="list">
                                                                    <div class="item">+92</div>
                                                                    <div class="item">+1</div>
                                                                    <div class="item">+231</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputDate">Mobile Number</label>
                                                            <input type="text" class="form-control" placeholder="Enter Mobile Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputDate">Email</label>
                                                            <input type="email" class="form-control" placeholder="Enter Your Email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-left">
                                                    <div style="font-size: 14px; color: grey;">** We do not send communication to this mobile number and e-mail ID</div>
                                                </div>
                                                <!-- <div class="form-group text-center">
                                                    <button class="btn btn-primary">Search Flights</button>
                                                </div> -->
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                                            <div class="form-group text-left">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label class="form-check-label" for="exampleCheck2">GST number for business travel (optional)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div style="background-color: #fff" class="col-lg-12 col-xl-12 order-lg-1 order-xl-1 p-4">
                                            <div class="form-group text-left">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                    <label class="form-check-label" for="exampleCheck3">I understand and agree with the Fare Rules, the Privacy Policy of TravClan.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group text-center mt-3">
                                        <button class="btn btn-primary">Continue To Pay</button>
                                    </div>
                                </div>


                                
                                
                                <div class="d-none d-lg-block col-md-4">
                                    <div class="card shadow p-2">
                                        <div class="h5">Selected Flight</div>
                                        <div class="d-flex justify-content-between bg-secondary mb-3">
                                            <div class="p-2">Departing Flight (08 Apr)</div>
                                            <div class="p-2">Flights Details</div>
                                        </div>
                                        
                                        <div class="col-md-12 p-0">
                                            <div class="card rounded shadow">
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                                        <div class="text-center">
                                                            <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                            <div>AI-9831T</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                                                        <div class="text-center">
                                                            <div style="font-size: 16px;">19:45</div>
                                                            <div>DEL</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3">
                                                        <div class="text-center">
                                                            <div class="mt-2">1h 0m</div>
                                                            <strong style="font-size: 12px;">Non Stop</strong>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                                                        <div class="text-center">
                                                            <div style="font-size: 16px;">20:45</div>
                                                            <div>IXC</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>   

                                        <div class="mt-2">
                                            <div class="d-flex justify-content-between bg-secondary mb-3">
                                                <div class="p-2">Return Flight (15 Apr)</div>
                                                <div class="p-2">Flights Details</div>
                                            </div>
                                            
                                            <div class="col-md-12 p-0">
                                                <div class="card rounded shadow">
                                                    <div class="row">
                                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                                            <div class="text-center">
                                                                <img style="width:50px; height: 50px;" src="https://s3.ap-south-1.amazonaws.com/com.travclan.cms.production/appcms/2.png" alt="" class="img-responsive rounded">
                                                                <div>AI-9831T</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                                                            <div class="text-center">
                                                                <div style="font-size: 16px;">19:45</div>
                                                                <div>DEL</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                                            <div class="text-center">
                                                                <div class="mt-2">1h 0m</div>
                                                                <strong style="font-size: 12px;">Non Stop</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                                                            <div class="text-center">
                                                                <div style="font-size: 16px;">20:45</div>
                                                                <div>IXC</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="mt-3">
                                            <div class="d-flex justify-content-between">
                                                <div class="p-1">Base Price</div>
                                                <div class="p-1">₹ 4,340</div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="p-1">Total taxes & fee</div>
                                                <div class="p-1">₹ 1,262</div>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <div>Total Net Price</div>
                                                <div>₹ 5,602</div>
                                            </div>
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
            <a href="http://supplier.thetravelsquare.in/" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
            <div class="kt-quick-panel__nav" kt-hidden-height="66" style="">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="http://supplier.thetravelsquare.in/kt_quick_panel_tab_notifications" role="tab">Recent Bookings</a>
                    </li>
                </ul>
            </div>
            <div class="kt-quick-panel__content">
                <div class="tab-content">
                    <div class="tab-pane fade show kt-scroll active ps ps--active-y" id="kt_quick_panel_tab_notifications" role="tabpanel" style="height: 592px; overflow: hidden;">
                        <div class="kt-notification">
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Chermantra Aonang Cliff Resort Booked
                                    </div>
                                    <div class="kt-notification__item-time">
                                        + USD 320
                                    </div>
                                </div>
                            </a>
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-favourite kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Phuket & Krabi Package
                                    </div>
                                    <div class="kt-notification__item-time">
                                        + USD 672
                                    </div>
                                </div>
                            </a>
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-safe kt-font-primary"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Bangkok & Pattaya Package
                                    </div>
                                    <div class="kt-notification__item-time">
                                        + USD 412
                                    </div>
                                </div>
                            </a>
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-psd kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New Customer Booking Transfers - Rohit Sharma + 3
                                    </div>
                                    <div class="kt-notification__item-time">
                                        + USD 112
                                    </div>
                                </div>
                            </a>
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Refund Processed to Aditya Joshi
                                    </div>
                                    <div class="kt-notification__item-time">
                                        + USD 57
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                            <a href="http://supplier.thetravelsquare.in/" class="kt-notification-v2__item">
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
                <a href="http://supplier.thetravelsquare.in/" class=""><i class="flaticon2-drop"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Layout Builder">
                <a href="#"><i class="flaticon2-gear"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Documentation">
                <a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Chat Example">
                <a href="http://supplier.thetravelsquare.in/" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
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
                <a href="http://supplier.thetravelsquare.in/" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
            </div>
            <div class="kt-demo-panel__body kt-scroll ps ps--active-y" style="height: 553px; overflow: hidden;">
                <div class="kt-demo-panel__item kt-demo-panel__item--active">
                    <div class="kt-demo-panel__item-title">
                        Demo 1
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo1.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="#" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 2
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo2.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com#" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 3
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo3.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 4
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo4.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 5
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo5.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 6
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo6.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 7
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo7.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 8
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo8.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 9
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo9.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 10
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo10.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 11
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo11.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo11/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 12
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo12.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo12/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 13
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo13.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 14
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo14.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 15
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo15.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 16
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo16.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 17
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo17.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 18
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo18.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 19
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo19.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 20
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo20.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 21
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo21.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 22
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo22.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 23
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo23.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 24
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo24.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 25
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo25.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 26
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo26.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 27
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo27.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 28
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo28.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 29
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo29.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 30
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="./files/demo30.jpg" alt="">
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="http://supplier.thetravelsquare.in/" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                                            <a href="http://supplier.thetravelsquare.in/" class="kt-chat__title">Jason Muller</a>
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
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-group"></i>
                                                        <span class="kt-nav__link-text">New Group</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                        <span class="kt-nav__link-text">Contacts</span>
                                                        <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                                        </span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                        <span class="kt-nav__link-text">Calls</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="http://supplier.thetravelsquare.in/" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                        <span class="kt-nav__link-text">Help</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__foot">
                                                        <a class="btn btn-label-brand btn-bold btn-sm" href="http://supplier.thetravelsquare.in/">Upgrade plan</a>
                                                        <a class="btn btn-clean btn-bold btn-sm" href="http://supplier.thetravelsquare.in/" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
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
                                                <img src="./files/100_12(1).jpg" alt="image">
                                                </span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">2 Hours</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                How likely are you to recommend our company<br> to your friends and family?
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/100_12(1).jpg" alt="image">
                                                </span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Ok, Understood!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You’ll receive notifications for all issues, pull requests!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/100_12(1).jpg" alt="image">
                                                </span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">2 Hours</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You can unwatch this repository immediately <br>by clicking here: <a href="http://supplier.thetravelsquare.in/" class="kt-font-bold kt-link"></a>
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/100_12(1).jpg" alt="image">
                                                </span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Ok!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="http://supplier.thetravelsquare.in/" class="kt-chat__username">You</a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/300_21.jpg" alt="image">
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
                                            <a href="http://supplier.thetravelsquare.in/"><i class="flaticon2-link"></i></a>
                                            <a href="http://supplier.thetravelsquare.in/"><i class="flaticon2-photograph"></i></a>
                                            <a href="http://supplier.thetravelsquare.in/"><i class="flaticon2-photo-camera"></i></a>
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
        <div class="daterangepicker ltr show-ranges opensleft">
            <div class="ranges">
                <ul>
                    <li data-range-key="Today">Today</li>
                    <li data-range-key="Yesterday">Yesterday</li>
                    <li data-range-key="Last 7 Days">Last 7 Days</li>
                    <li data-range-key="Last 30 Days">Last 30 Days</li>
                    <li data-range-key="This Month">This Month</li>
                    <li data-range-key="Last Month">Last Month</li>
                    <li data-range-key="Custom Range">Custom Range</li>
                </ul>
            </div>
            <div class="drp-calendar left">
                <div class="calendar-table"></div>
                <div class="calendar-time" style="display: none;"></div>
            </div>
            <div class="drp-calendar right">
                <div class="calendar-table"></div>
                <div class="calendar-time" style="display: none;"></div>
            </div>
            <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
        </div>
        <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>

        <script>
            $(function() {
                $('.dropdown > .caption').on('click', function() {
                    $(this).parent().toggleClass('open');
                });
                $('.dropdown > .list > .item').on('click', function() {
                    $('.dropdown > .list > .item').removeClass('selected');
                    $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text( $(this).text() );
                });
                $(document).on('keyup', function(evt) {
                    if ( (evt.keyCode || evt.which) === 27 ) {
                    $('.dropdown').removeClass('open');
                    }
                });
                $(document).on('click', function(evt) {
                    if ( $(evt.target).closest(".dropdown > .caption").length === 0 ) {
                    $('.dropdown').removeClass('open');
                    }
                });
            });
        </script>
    </body>
</html>