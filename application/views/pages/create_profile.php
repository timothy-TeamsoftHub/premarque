
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head>
                <meta charset="utf-8"/>
        <title>Premarque | <?=$page_name?></title>
        <meta name="description" content="Add user example"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


                    <!--begin::Page Custom Styles(used by this page)-->
                             <link href="assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css"/>
                        <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
                    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
                    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
                <!--end::Layout Themes-->

        <link rel="shortcut icon" href="assets/media/logos/rccg_logo_ico.png"/>

            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed subheader-enabled page-loading"  >

    	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile " >
	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="assets/media/logos/rccg_logo.png" class="max-h-30px"/>
	</a>
	<!--end::Logo-->

	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">

					<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
				<span></span>
			</button>

		<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>		</button>
	</div>
	<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->

				<!--begin::Header-->
<div id="kt_header" class="header  header-fixed " >
	<!--begin::Container-->
	<div class=" container ">
		<!--begin::Left-->
		<div class="d-none d-lg-flex align-items-center mr-3">
			<!--begin::Logo-->
			<a href="index.html" class="mr-20">
				<img alt="Logo" src="assets/media/logos/rccg_logo.png" style="width:60px; height:60px; background-color: white; border-radius: 30px 30px 30px 30px" class="logo-default max-h-100px"/> <span class="form- text-white"> Pre-MARQUE v1.0</span>
			</a>
			<!--end::Logo-->
		</div>
		<!--end::Left-->

	
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->

				

				<!--begin::Container-->
				<div class="d-flex flex-row flex-column-fluid  container ">

					<!--begin::Content Wrapper-->
					<div class="main d-flex flex-column flex-row-fluid">
													<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 " id="kt_subheader">
    <div class=" w-100  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">

            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                                    Create <?=ucwords($this->session->userdata('couple_account_type'))?>'s Profile                            </h5>
            <!--end::Title-->

            <!--begin::Separator-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
            <!--end::Separator-->

            <!--begin::Search Form-->
            <div class="d-flex align-items-center" id="kt_subheader_search">
                <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                                            Enter your details and submit     <?=$couple_account_id?>                               </span>
                            </div>
            <!--end::Search Form-->

                    </div>
        <!--end::Details-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
                            <!--begin::Button-->
                <a href="#" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">

                    Back                </a>
                <!--end::Button-->

                                                <!--begin::Dropdown-->
                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">

                            Submit                        </button>

                        <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>

                        <div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right">
                            <ul class="navi py-5">
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
                                        <span class="navi-text">Save &amp; continue</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-medical-records"></i></span>
                                        <span class="navi-text">Save &amp; add new</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-hourglass-1"></i></span>
                                        <span class="navi-text">Save &amp; exit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end::Dropdown-->

                    </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
<?php
$couple_first_name = explode(" ", ucwords($this->session->userdata('couple_account_name')))[0];
$couple_last_name = explode(" ", ucwords($this->session->userdata('couple_account_name')))[1];
?>
						<div class="content flex-column-fluid" id="kt_content">
							<!--begin::Card-->
<div class="card card-custom card-transparent">
    <div class="card-body p-0">
        <!--begin::Wizard-->
        <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
            <!--begin::Wizard Nav-->
            <div class="wizard-nav">
                <div class="wizard-steps">
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-wrapper">
                            <div class="wizard-number">
                                1
                            </div>
                            <div class="wizard-label">
                                <div class="wizard-title">
                                    Profile
                                </div>
                                <div class="wizard-desc">
                                <?=ucwords($this->session->userdata('couple_account_type'))?>'s Personal Information
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-wrapper">
                            <div class="wizard-number">
                                2
                            </div>
                            <div class="wizard-label">
                                <div class="wizard-title">
                                    Account
                                </div>
                                <div class="wizard-desc">
                                <?=ucwords($this->session->userdata('couple_account_type'))?>'s Account
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-wrapper">
                            <div class="wizard-number">
                                3
                            </div>
                            <div class="wizard-label">
                                <div class="wizard-title">
                                    Address
                                </div>
                                <div class="wizard-desc">
                                <?=ucwords($this->session->userdata('couple_account_type'))?>'s Address
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-wrapper">
                            <div class="wizard-number">
                                4
                            </div>
                            <div class="wizard-label">
                                <div class="wizard-title">
                                    Submission
                                </div>
                                <div class="wizard-desc">
                                    Review and Submit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Wizard Nav-->

            <!--begin::Card-->
            <div class="card card-custom card-shadowless rounded-top-0">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                        <div class="col-xl-12 col-xxl-10">
                            <!--begin::Wizard Form-->
                            <form class="form" id="kt_form">
                                <div class="row justify-content-center">
                                    <div class="col-xl-9">
                                        <!--begin::Wizard Step 1-->
                                        <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                            <h5 class="text-dark font-weight-bold mb-10"><?=ucwords($this->session->userdata('couple_account_type'))?>'s Profile Details:</h5>
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="image-input image-input-outline" id="kt_user_add_avatar">
        						                        <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_6.jpg)"></div>

        												<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        						                            <i class="fa fa-pen icon-sm text-muted"></i>
        						                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
        													<input type="hidden" name="profile_avatar_remove"/>
        						                        </label>

        												<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        						                            <i class="ki ki-bold-close icon-xs text-muted"></i>
        						                        </span>
        						                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-solid form-control-lg" name="firstname" type="text" readonly value="<?=$couple_first_name?>"/>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-solid form-control-lg" name="lastname" type="text" readonly value="<?=$couple_last_name?>"/>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-solid form-control-lg" name="dob" id="dob" type="date" />
                                                    
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="phone" value="5678967456" placeholder="Phone" />
                                                    </div>
                                                    <span class="form-text text-muted">Enter valid phone number(e.g: 080123456789).</span>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="email" value=""/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Profession</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg">
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="profession" id="profession" placeholder="Profession" value=""/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Qualification</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg">
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="qualification" id="qualification" placeholder="B.Sc., B.Tech., B.Ed." value=""/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                        <!--end::Wizard Step 1-->

                                        <!--begin::Wizard Step 2-->
                                        <div class="my-5 step" data-wizard-type="step-content">
                                            <h5 class="text-dark font-weight-bold mb-10 mt-5">User's Account Details</h5>
                                           <!--begin::Group-->
                                           <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Account ID</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg">
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="couple_account_id" id="couple_account_id" value="<?=$this->session->userdata('couple_account_id')?>" readonly/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Account Type</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-solid input-group-lg">
                                                        <input type="text" class="form-control form-control-solid form-control-lg" readonly name="couple_account_type" id="couple_account_type" value="<?=$this->session->userdata('couple_account_type')?>"/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                        <!--end::Wizard Step 2-->

                                        <!--begin::Wizard Step 3-->
                                        <div class="my-5 step" data-wizard-type="step-content">
                                            <h5 class="mb-10 font-weight-bold text-dark">Setup Your Address</h5>

                                            <!--begin::Group-->
                                            <div class="form-group">
                                                <label>Home Address </label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="home_address" id="home_address" placeholder="Home Address" value="" />
                                                <span class="form-text text-muted">Please enter your Home Address.</span>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group">
                                                <label>Office Address</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="office_address" id="office_address" placeholder="Office Address" value=""/>
                                                <span class="form-text text-muted">Please enter your Office Address.</span>
                                            </div>

                                            <!--begin::Row-->
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Group-->
                                                    <div class="form-group">
                                                        <label>Place of Birth</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="place_of_birth" id="place_of_birth" placeholder="Place of Birth" value="" />
                                                        <span class="form-text text-muted">Please enter your Place of Birth.</span>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <!--begin::Group-->
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label>State Of Origin</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="state_of_origin" id="state_of_origin" placeholder="State of Origin" value="" />
                                                        <span class="form-text text-muted">Please enter your State of Origin.</span>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row">
                                                
                                                <div class="col-xl-12">
                                                    <!--begin::Group-->
                                                    <div class="form-group">
                                                        <label>Nationality</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="nationality" id="nationality" placeholder="Nigerian" value="" />
                                                        <span class="form-text text-muted">Please enter your Nationality.</span>
                                                    </div>
                                                    <!--end::Group-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 3-->

                                        <!--begin::Wizard Step 4-->
                                        <div class="my-5 step" data-wizard-type="step-content">
                                            <h5 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h5>

                                            <!--begin::Item-->
                                            <div class="border-bottom mb-5 pb-5">
                                                <div class="font-weight-bolder  mb-3">
                                                    Your Account Details:
                                                </div>
                                                <div class="line-height-xl">
                                                    John Wick
                                                    <br/> Phone: +61412345678
                                                    <br/> Email: johnwick@reeves.com
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="border-bottom mb-5 pb-5">
                                                <div class="font-weight-bolder  mb-3">
                                                    Your Address Details:
                                                </div>
                                                <div class="line-height-xl">
                                                    Address Line 1
                                                    <br/> Address Line 2
                                                    <br/> Melbourne 3000, VIC, Australia
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div>
                                                <div class="font-weight-bolder ">
                                                    Payment Details:
                                                </div>
                                                <div class="line-height-xl">
                                                    Card Number: xxxx xxxx xxxx 1111
                                                    <br/> Card Name: John Wick
                                                    <br/> Card Expiry: 01/21
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Wizard Step 4-->

                                        <!--begin::Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                            <div class="mr-2">
                                                <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">
                                                    Previous
                                                </button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">
                                                    Submit
                                                </button>

                                                <button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                        <!--end::Wizard Actions-->
                                    </div>
                                </div>
                            </form>
                            <!--end::Wizard Form-->
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Wizard-->
    </div>
</div>
<!--end::Card-->
						</div>
						<!--end::Content-->
					</div>
					<!--begin::Content Wrapper-->
				</div>
				<!--end::Container-->
