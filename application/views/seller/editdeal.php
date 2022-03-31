<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <?php include('head.php');?>
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="https://keenthemes.com/metronic/preview/demo1/index.html">
                <img alt="The Travel Square" src="./files/logo-light.png">
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
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">Edit Deal</h3>
                                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                        <span><i class="flaticon2-search-1"></i></span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <!--Begin::Dashboard 1-->
                            <!--Begin::Row-->
                            <div class="row">
                                <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1 offset-3">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Edit Your Deal Here ( <?= $data['deal_data']->deal_type;?> )
                                                </h3>
                                            </div>
                                        </div>
                                        <!--begin::Form-->
                                        <?php echo form_open_multipart('editdealform/'.$data['deal_data']->id, 'class="kt-form"');?>
                                            <div class="kt-portlet__body">
                                            <p><?php echo $this->session->flashdata('item'); ?></p>
                                                

                                                <div class="kt-section kt-section--first">
                                                    <!-- <div class="form-group">
                                                    <label>Status</label>
                                                        <select class="form-control" name="status" required>
                                                        <option value="approved" <?php if('approved'==$data['deal_data']->status) { echo set_select('select', 'Approved' , TRUE); } ?> >Approved</option>
                                                        <option value="declined" <?php if('declined'==$data['deal_data']->status) { echo set_select('select', 'Decliner' , TRUE); } ?> >Declined</option>
                                                        <option value="pending" <?php if('pending'==$data['deal_data']->status) { echo set_select('select', 'Pending' , TRUE); } ?> >Pending</option>
                                                            
                                                        </select>
                                                    </div> -->
                                                    <?php if(!empty($data['deal_data']->flight_trip_type)){ ?>
                                                    <div class="form-group">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="One Way" name="flight_trip_type"
                                                                <?php if($data['deal_data']->flight_trip_type=='One Way'){echo 'checked';}?>
                                                                > One Way
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Round Trip" name="flight_trip_type" 
                                                                <?php if($data['deal_data']->flight_trip_type=='Round Trip'){echo 'checked';}?>
                                                                > Round Trip
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <?php if(!empty($data['deal_data']->package_type)){ ?>

                                                    <div class="form-group">
                                                        <div class="kt-radio-inline">
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Fixed Departure" name="package_type"
                                                                <?php if($data['deal_data']->package_type=='Fixed Departure'){echo 'checked';}?>
                                                                > Fixed Departure
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Customised" name="package_type"
                                                                <?php if($data['deal_data']->package_type=='Customised'){echo 'checked';}?>
                                                                > Customised
                                                                <span></span>
                                                            </label>
                                                            <label class="kt-radio">
                                                                <input required type="radio" value="Regular" name="package_type" 
                                                                <?php if($data['deal_data']->package_type=='Regular'){echo 'checked';}?>
                                                                > Regular
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php }?>

                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?= $data['deal_data']->title;?>" required>
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Currency</label>
                                                        <select class="form-control" name="currency_id" required>
                                                            
                                                                <?php foreach($currency_data as $row){ ?>
                                                                    <option value="<?= $row->id;?>" <?php if($row->id==$data['deal_data']->currency_id) { echo set_select('select', $row->name , TRUE); } ?> ><?= $row->name;?></option>
                                                                <?php } ?>
                                                            
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                    <label>B2b Price</label>
                                                        <input type="number" class="form-control" placeholder="B2B Price" value="<?= $data['deal_data']->new_price;?>" required name="new_price">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>B2C Price</label>
                                                        <input type="number" class="form-control" placeholder="B2C Price" value="<?= $data['deal_data']->old_price;?>" required name="old_price">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>No Of Days</label>
                                                        <input type="number" class="form-control" placeholder="No Of Days" value="<?= $data['deal_data']->noofdays;?>" required name="noofdays">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>No of Night</label>
                                                        <input type="number" class="form-control" placeholder="No Of Nights" value="<?= $data['deal_data']->noofnights;?>" required name="noofnights">
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="TAC (Travel Agent Comission)" value="<?= $data['deal_data']->tac;?>" required name="tac">
                                                    </div> -->
                                                    <div class="form-group">
                                                    <label>Unit Type</label>
                                                        <select class="form-control" name="unit_type" required>
                                                            <option value="Per Person" <?php if('Per Person'==$data['deal_data']->unit_type) { echo set_select('select', 'Per Person' , TRUE); } ?> >Per Person</option>
                                                            <option value="Per Night" <?php if('Per Night'==$data['deal_data']->unit_type) { echo set_select('select', 'Per Night' , TRUE); } ?> >Per Night</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Details</label>
                                                        <!-- <textarea class="form-control" name="details" placeholder="Details"></textarea> -->
                                                        <div class="tinymce-wrap">
                                                            <textarea class="tinymce" name="details" placeholder="Details"><?= $data['deal_data']->details;?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cancellation Policy</label>
                                                        <div class="tinymce-wrap">
                                                            <textarea class="tinymce" name="cancelation_policy" placeholder="Cancelation Policy"><?= $data['deal_data']->cancelation_policy;?></textarea>
                                                        </div>
                                                        <!-- <textarea class="form-control" name="cancelation_policy" placeholder="Cancelation Policy"></textarea> -->
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Destination</label>
                                                        <input type="text" class="form-control" placeholder="Destination" required value="<?= $data['deal_data']->destination;?>" name="destination">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Valid Untill</label>
                                                        <input type="text" class="form-control" id="kt_datepicker_3" placeholder="Valid Untill" value="<?= $data['deal_data']->valid_untill;?>" required name="valid_untill">
                                                    </div>
                                                    <?php if(!empty($data['deal_data']->hotel_name_room_meal)){?>
                                                    <div class="form-group">
                                                    <label>Hotel,room,meal</label>
                                                        <input type="text" class="form-control" value="<?= $data['deal_data']->hotel_name_room_meal;?>" placeholder="Hotel Name, Room Category, Meal Plan" value="<?= $data['deal_data']->hotel_name_room_meal;?>" name="hotel_name_room_meal">
                                                    </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Portlet-->

                                </div>
                            </div>
                            <!--End::Row-->
                            <!--Begin::Row-->
                            
                            <!--End::Row-->
                            <!--End::Dashboard 1-->	
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
            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
            <div class="kt-quick-panel__nav" kt-hidden-height="66" style="">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="https://keenthemes.com/metronic/preview/demo1/index.html#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="https://keenthemes.com/metronic/preview/demo1/index.html#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="https://keenthemes.com/metronic/preview/demo1/index.html#kt_quick_panel_tab_settings" role="tab">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="kt-quick-panel__content">
                <div class="tab-content">
                    <div class="tab-pane fade show kt-scroll active ps ps--active-y" id="kt_quick_panel_tab_notifications" role="tabpanel" style="height: 592px; overflow: hidden;">
                        <div class="kt-notification">
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item kt-notification__item--read">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-notification-v2__item">
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
                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class=""><i class="flaticon2-drop"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Layout Builder">
                <a href="#
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Documentation">
                <a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
            </li>
            <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Chat Example">
                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
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
                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
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
                                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__title">Jason Muller</a>
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
                                                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-group"></i>
                                                        <span class="kt-nav__link-text">New Group</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                        <span class="kt-nav__link-text">Contacts</span>
                                                        <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                                        </span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                        <span class="kt-nav__link-text">Calls</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                        <span class="kt-nav__link-text">Help</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__foot">
                                                        <a class="btn btn-label-brand btn-bold btn-sm" href="https://keenthemes.com/metronic/preview/demo1/index.html#">Upgrade plan</a>
                                                        <a class="btn btn-clean btn-bold btn-sm" href="https://keenthemes.com/metronic/preview/demo1/index.html#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
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
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">2 Hours</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                How likely are you to recommend our company<br> to your friends and family?
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">You</a>
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
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Ok, Understood!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">You</a>
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
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">2 Hours</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">You</a>
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/300_21.jpg" alt="image">
                                                </span>
                                            </div>
                                            <div class="kt-chat__text">
                                                You can unwatch this repository immediately <br>by clicking here: <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-font-bold kt-link"></a>
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--success">
                                            <div class="kt-chat__user">
                                                <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="./files/100_12(1).jpg" alt="image">
                                                </span>
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">Jason Muller</a>
                                                <span class="kt-chat__datetime">30 Seconds</span>
                                            </div>
                                            <div class="kt-chat__text">
                                                Ok!
                                            </div>
                                        </div>
                                        <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html#" class="kt-chat__username">You</a>
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
                                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#"><i class="flaticon2-link"></i></a>
                                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#"><i class="flaticon2-photograph"></i></a>
                                            <a href="https://keenthemes.com/metronic/preview/demo1/index.html#"><i class="flaticon2-photo-camera"></i></a>
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

        <!-- Tinymce JavaScript -->
        <script src="<?= base_url('resource/auth/vendors/tinymce/tinymce.min.js');?>"></script>

        <!-- Tinymce Wysuhtml5 Init JavaScript -->
        <script src="<?= base_url('resource/auth/dist/js/tinymce-data.js');?>"></script>

    </body>
</html>