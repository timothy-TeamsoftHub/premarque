<!--begin::Main-->
<!-- <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid">
    <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
        <div class="d-flex flex-center mb-15">
    
            
        </div>
        <div class="login-signin">
            <div class="mb-10">
            <span>Welcome to <h1>Pre-MARQUE</h1></span>
                <p class="opacity-60 font-weight-bold">Login to your module</p>
            </div>
        </div>
        <a href="#" class="btn btn-icon btn-outline-danger mr-3" title="Intended Couple">
            <i class="flaticon-users-1 icon-xl"></i>
        </a>
        <a href="#" class="btn btn-icon btn-outline-success mr-3" title="Counsellor">
            <i class="flaticon-rotate icon-xl"></i>
        </a>
        <a href="#" class="btn btn-icon btn-outline-warning mr-3" title="Administrator">
            <i class="flaticon2-user-1 icon-xl"></i>
        </a>
        <a href="#" class="btn btn-icon btn-outline-info mr-3">
            <i class="flaticon2-chat-1"></i>
        </a>
    </div>
</div> -->

	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
<div class="login login-3 login-select-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid">
		<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
			<!--begin::Login Header-->
			<div class="d-flex flex-center mb-15">
				<a href="#">
					<img src="assets/media/logos/rccg_logo.png" style="width:100px; height:100px; background-color: white; border-radius: 50px 50px 50px 50px" class="max-h-100px" alt=""/>
				</a>
               
			</div>
            <div class="mb-10">
                <span>Welcome to <h1>Pre-MARQUE</h1></span>
                <p class="opacity-60 font-weight-bold">Pre-Marital Questionnaire And Evaluation</p>
             
            </div>
           
			<!--end::Login Header-->

            <!--begin::Login Welcome-->
            
            <div class="login-select">
                <div class="mb-10">
               
                    <p class="font-weight-bold">Login to your module</p>
                </div>
                <form class="form" id="kt_login_select_form">
                    <a  href="javascript:;" id="kt_login_select_ica" style="width:100px; height:100px;" class="btn btn-icon btn-circle btn-outline-danger mr-3" title="Intended Couple">
                        <i class="flaticon-users-1 icon-xl"></i>
                    </a>
                    <a href="javascript:;" id="kt_login_select_mcc" style="width:100px; height:100px;" class="btn btn-icon btn-outline-primary mr-3 btn-circle" title="Counsellor">
                        <i class="flaticon-rotate icon-xl"></i>
                    </a>
                    <a href="javascript:;" id="kt_login_select_admin" style="width:100px; height:100px;" class="btn btn-icon btn-outline-warning mr-3 btn-circle" title="Administrator">
                        <i class="flaticon2-user-1 icon-xl"></i>
                    </a>
                </form>
            </div>
            <!--end::Login Wwelcome form-->
            
			<!--begin::Login Sign in form-->
			<div class="login-signin">
				<div class="mb-10">
					<!-- <h3>Sign In To Admin</h3> -->
					<p class=" font-weight-bold">Intending Couple - Sign In </p>
				</div>
				<form class="form" id="kt_login_signin_form">
					<div class="form-group">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="text" placeholder="Account ID" name="account_id" id="account_id" autocomplete="off"/>
					</div>
                    <div class="form-group">
						<select id="couple_account_type" name="couple_account_type" id="couple_account_type" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" required>
                            <option value='' >Select Account Type</option>
                            <option value="bride">Bride</option>
                            <option value="groom">Groom</option>
                        </select>
					</div>
					<div class="form-group">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Password" name="password" id="password"/>
					</div>
				
					<div class="form-group text-center mt-10">
						<button id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
					</div>
				</form>
				<div class="mt-10">
					<span class="opacity-70 mr-4">
						If you have forgotten your login details, please contact your Counsellor.
					</span>
                    
					<a href="javascript:;" id="kt_login_ica_back" class=" btn btn-outline-warning btn-pill text-white font-weight-bold">Go Back</a>
				</div>
			</div>
			<!--end::Login Sign in form-->

			<!--begin::Login Sign up form-->
			<div class="login-signup">
				<div class="mb-10">
					
					<p class="font-weight-bold">Marriage Counselling Committee (MCC)- Sign In</p>
				</div>
				<form class="form text-center" id="kt_login_signup_form">
					<!-- <div class="form-group ">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Fullname" name="fullname"/>
					</div>-->
					<div class="form-group">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="mcc_email" id="mcc_email" autocomplete="off"/>
					</div> 
					<div class="form-group">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="mcc_password" id="mcc_password" />
					</div>
					<!-- <div class="form-group">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword"/>
					</div> -->
					
					<div class="form-group">
						<button id="kt_login_mcc_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Sign In</button>
						<button id="kt_login_mcc_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
					</div>
				</form>
			</div>
			<!--end::Login Sign up form-->

			<!--begin::Login forgot password form-->
			<div class="login-forgot">
				<div class="mb-10">
					<h3>Administrator Login</h3>
				
				</div>
				<form class="form" id="kt_login_forgot_form">
					<div class="form-group mb-10">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="admin_email"  id="admin_email" autocomplete="off"/>
					</div>
                    <div class="form-group">
						<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="admin_password" id="admin_password" />
					</div>
					<div class="form-group">
						<button id="kt_login_admin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Sign In</button>
						<button id="kt_login_admin_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
					</div>
				</form>
			</div>
			<!--end::Login forgot password form-->

            <!--begin::Login Undertaking form-->
			<!-- <div class="login-undertaking col-12">
				<div class="mb-10"> -->
					<!-- <h3>Sign In To Admin</h3> -->
					<!-- <span class=" font-weight-bold" id="undertaking_description">Kindly read the undertaking </span>
				</div>
				<form class="form" id="kt_login_undertaking_form">
					
                    <div class="form-group" id="uendertaking_description">
                    <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Password" name="uendertaking_description" id="uendertaking_description" />
					</div>
				
					<div class="form-group text-center mt-10">
						<button id="kt_login_undertaking_submit" class="btn btn-pill btn-outline-info font-weight-bold opacity-90 px-15 py-3">Acccept</button>
					</div>
				</form>
				
			</div> -->

            <style>
    /* Custom styles for Swal.fire modal */
    .swal2-popup {
      width: 60%; /* Set desired width */
      max-width: 800px; /* Set maximum width */
      padding: 20px; /* Add padding */
    }
  </style>
            
			<!--end::Login Undertaking in form-->
		</div>
	</div>
</div>
<!--end::Login-->
	</div>
<!--end::Main-->