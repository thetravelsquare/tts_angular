<script>
		var KTAppOptions = { "colors": { "state": { "brand": "#716aca", "light": "#ffffff", "dark": "#282a3c", "primary": "#5867dd", "success": "#34bfa3", "info": "#36a3f7", "warning": "#ffb822", "danger": "#fd3995" }, "base": { "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"], "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"] } } };
	</script>
	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="<?=base_url('resource/admin/files/plugins.bundle.js.download');?>" type="text/javascript"></script>
	<script src="<?=base_url('resource/admin/files/scripts.bundle.js.download');?>" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->


	<!--begin::Page Scripts(used by this page) -->
	<script src="<?=base_url('resource/admin/files/login-1.js.download');?>" type="text/javascript"></script>
	<!--end::Page Scripts -->

                        <!--begin::Page Vendors(used by this page) -->
                        <script src="<?=base_url('resource/admin/files/fullcalendar.bundle.js.download');?>" type="text/javascript"></script>
                            <script src="<?=base_url('resource/admin/files/js(1)');?>" type="text/javascript"></script>
                            <script src="<?=base_url('resource/admin/files/gmaps.js.download');?>" type="text/javascript"></script>
                        <!--end::Page Vendors -->

                    <!--begin::Page Scripts(used by this page) -->
                            <script src="<?=base_url('resource/admin/files/dashboard.js.download');?>" type="text/javascript"></script>
                        <!--end::Page Scripts -->

	<!-- end::Body -->
    <script src="<?=base_url('resource/admin/js/pages/crud/forms/widgets/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    
    <script src="<?=base_url('resource/admin//plugins/custom/datatables/datatables.bundle.js');?>" type="text/javascript"></script>
        <!--end::Page Vendors -->
        <!--begin::Page Scripts(used by this page) -->
        <script src="<?=base_url('resource/admin/js/pages/crud/datatables/advanced/multiple-controls.js');?>" type="text/javascript"></script>
    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
		src="<?=base_url('resource/admin/files/box-469cf41adb11dc78be68c1ae7f9457a4.html');?>"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>



         <!-- begin::Global Config(global config for global JS sciprts) -->
         <script>
            var KTAppOptions = {
    "colors": {
        "state": {
            "brand": "#5d78ff",
            "dark": "#282a3c",
            "light": "#ffffff",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995"
        },
        "base": {
            "label": [
                "#c5cbe3",
                "#a1a8c3",
                "#3d4465",
                "#3e4466"
            ],
            "shape": [
                "#f0f3ff",
                "#d9dffa",
                "#afb4d4",
                "#646c9a"
            ]
        }
    }
};
        </script>

        <script>
                    $( document ).ready(function() {
                        $("#flight_type").hide();
                        $("#package_type").hide();
                        $("#inclusions").hide();
                        $("#hotel_detail").hide();
                    });
                    $('#deal_type_id').change(function() {
                        var gid = $(this).val(); 
                            if (gid == '1') { 
                                $("#flight_type").hide();
                                $("#package_type").show();
                                $("#inclusions").show();
                                $("#hotel_detail").hide();
                            }else if(gid == '2'){
                                $("#flight_type").show();
                                $("#package_type").hide();
                                $("#inclusions").hide();
                                $("#hotel_detail").hide();
                            }else if(gid == '3'){
                                $("#flight_type").hide();
                                $("#package_type").hide();
                                $("#inclusions").hide();
                                $("#hotel_detail").show();
                            }else{
                                $("#flight_type").hide();
                                $("#package_type").hide();
                                $("#inclusions").hide();
                                $("#hotel_detail").hide();
                            }
                            return false;
                    });
        </script>
    <!-- end::Body -->

<div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>