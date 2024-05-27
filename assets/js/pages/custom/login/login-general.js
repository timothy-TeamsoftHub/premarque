"use strict";

// Class Definition
var KTLogin = function() {
    var _login;

    var _showForm = function(form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

		_login.removeClass('login-undertaking-on');
		_login.removeClass('login-select-on');
        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    }

    var _handleSignInForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signin_form'),
			{
				fields: {
					account_id: {
						validators: {
							notEmpty: {
								message: 'Account ID is required'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Password is required'
							}
						}
					},
					couple_account_id: {
						validators: {
							notEmpty: {
								message: 'Password is required'
							}
						}
					}
				},
				plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();
			
            validation.validate().then(function(status) {
		        if (status == 'Valid') {
					
					$.ajax({
						url: 'welcome/ajax_validation/ica',
						type: 'POST',
						data: {
							account_id: document.getElementById('account_id').value,
							password: document.getElementById('password').value,
							couple_account_type: document.getElementById('couple_account_type').value
						},
						success: function(response) {
							// Handle success
							var responseObj = JSON.parse(response);
							if(responseObj.ica_login_status == "success")
							{
								if(responseObj.undertaking_check == 'completed' )
								{
									if(responseObj.profile_check == 'completed' )
									{
										//alert('Yes Working Now!');
										swal.fire({
											text: "Welcome!. Please Proceed!",
											icon: "success",
											buttonsStyling: false,
											confirmButtonText: "Ok, got it!",
											customClass: {
												confirmButton: "btn font-weight-bold btn-light-success"
											}
										}).then(function() {
											window.location.href="dashboard";
											KTUtil.scrollTop();
										});
									}
									else
									{
										//alert('Yes Working Now!');
									swal.fire({
										text: "Welcome!. Please Proceed!",
										icon: "success",
										buttonsStyling: false,
										confirmButtonText: "Ok, got it!",
										customClass: {
											confirmButton: "btn font-weight-bold btn-light-success"
										}
									}).then(function() {
										window.location.href="create-profile";
										KTUtil.scrollTop();
									});
									}
									
								}
								else
								{
									//document.getElementById('uendertaking_description').innerHTML = responseObj.undertaking_description;
									///alert(responseObj.undertaking_description);
									//$("#newProductModal").modal('show');
									swal.fire({
										title: 'Pre-Wedding Undertaking',
										html: responseObj.undertaking_description,
										icon: 'warning',
										showCancelButton: true,
										confirmButtonText: 'Accept', // Button to proceed
										cancelButtonText: 'Cancel'    // Button to cancel
									}).then((result) => {
										// If user clicks on "Proceed"
										if (result.isConfirmed) {
											// Perform action here, for example, redirect to another page
											window.location.href = 'welcome/accept-undertaking/'+responseObj.account_id;
											swal.fire('Proceeded!', 'Thanks for Accepting.', 'success');
											

										} else {
											swal.fire('Cancelled', 'You have Canceled the process.', 'error');
										}
									});
									// swal.fire({
									// 	text: "Welcome "+ responseObj.couple_name+", before you proceed, please complete the Pre-wedding undertaking \r\n"+responseObj.undertaking_description,
									// 	icon: "warning",
									// 	buttonsStyling: false,
									// 	confirmButtonText: "Accept",
									// 	customClass: {
									// 		confirmButton: "btn font-weight-bold btn-warning"
									// 	}
									// }).then(function() {
									// 	//window.location.href="dashboard";
										
									// 	//_showForm('undertaking');
									// 	KTUtil.scrollTop();
									// });
									
								}
								
							}
							else{
								swal.fire({
									text: "Error was detected! See error: "+responseObj.errorMessage,
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn font-weight-bold btn-light-danger"
									}
								}).then(function() {
									//window.location.href="dashboard";
									KTUtil.scrollTop();
								});
							}
						},
						error: function(xhr, status, error) {
							// Handle error
							//console.error(xhr.responseText);
							swal.fire({
								text: "Error was detected! See error: "+xhr.responseText,
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn font-weight-bold btn-light-danger"
								}
							}).then(function() {
								//window.location.href="dashboard";
								KTUtil.scrollTop();
							});
						}
					});
                    
				} else {
					swal.fire({
		                text: "Sorry, looks like there are some errors detected, please try again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });


		// Handle Signin button
        $('#kt_login_ica_back').on('click', function (e) {
            e.preventDefault();
            _showForm('select');
        });

		// Handle forgot button
        $('#kt_login_select').on('click', function (e) {
            e.preventDefault();
            _showForm('select');
        });

        // Handle forgot button
        $('#kt_login_forgot').on('click', function (e) {
            e.preventDefault();
            _showForm('forgot');
        });

        // Handle signup
        $('#kt_login_signup').on('click', function (e) {
            e.preventDefault();
            _showForm('signup');
        });
    }

    var _handleSignUpForm = function(e) {
        var validation;
        var form = KTUtil.getById('kt_login_signup_form');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			form,
			{
				fields: {
					// fullname: {
					// 	validators: {
					// 		notEmpty: {
					// 			message: 'Username is required'
					// 		}
					// 	}
					// },
					mcc_email: {
                        validators: {
							notEmpty: {
								message: 'Email address is required'
							},
                            emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					},
                    mcc_password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
                        }
                    },
                    // cpassword: {
                    //     validators: {
                    //         notEmpty: {
                    //             message: 'The password confirmation is required'
                    //         },
                    //         identical: {
                    //             compare: function() {
                    //                 return form.querySelector('[name="password"]').value;
                    //             },
                    //             message: 'The password and its confirm are not the same'
                    //         }
                    //     }
                    // },
                    // agree: {
                    //     validators: {
                    //         notEmpty: {
                    //             message: 'You must accept the terms and conditions'
                    //         }
                    //     }
                    // },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_mcc_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    swal.fire({
		                text: "Welcome MCC!",
		                icon: "success",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				} else {
					swal.fire({
		                text: "Sorry, looks like there are some errors detected, please try again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_mcc_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('select');
        });
    }

    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_forgot_form'),
			{
				fields: {
					admin_email: {
						validators: {
							notEmpty: {
								message: 'Email address is required'
							},
                            emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					},
					admin_password: {
						validators: {
							notEmpty: {
								message: 'Password is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        // Handle submit button
        $('#kt_login_admin_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    // Submit form
					swal.fire({
		                text: "Welcome Admin!",
		                icon: "success",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-success"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
                    //KTUtil.scrollTop();
				} else {
					swal.fire({
		                text: "Sorry, looks like there are some errors detected, please try again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_admin_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('select');
        });
		
	
    }
	var _handleSelectForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        // validation = FormValidation.formValidation(
		// 	KTUtil.getById('kt_login_select_form'),
		// 	{
		// 		fields: {
		// 			email: {
		// 				validators: {
		// 					notEmpty: {
		// 						message: 'Email address is required'
		// 					},
        //                     emailAddress: {
		// 						message: 'The value is not a valid email address'
		// 					}
		// 				}
		// 			}
		// 		},
		// 		plugins: {
		// 			trigger: new FormValidation.plugins.Trigger(),
		// 			bootstrap: new FormValidation.plugins.Bootstrap()
		// 		}
		// 	}
		// );

        // Handle submit button
        // $('#kt_login_forgot_submit').on('click', function (e) {
        //     e.preventDefault();

        //     validation.validate().then(function(status) {
		//         if (status == 'Valid') {
        //             // Submit form
        //             KTUtil.scrollTop();
		// 		} else {
		// 			swal.fire({
		//                 text: "Sorry, looks like there are some errors detected, please try again.",
		//                 icon: "error",
		//                 buttonsStyling: false,
		//                 confirmButtonText: "Ok, got it!",
        //                 customClass: {
    	// 					confirmButton: "btn font-weight-bold btn-light-primary"
    	// 				}
		//             }).then(function() {
		// 				KTUtil.scrollTop();
		// 			});
		// 		}
		//     });
        // });

        // Handle cancel button
        $('#kt_login_select_ica').on('click', function (e) {
            e.preventDefault();
			//alert('Working');
            _showForm('signin');
        });
		$('#kt_login_select_mcc').on('click', function (e) {
            e.preventDefault();
			//alert('Working');
            _showForm('signup');
        });
		$('#kt_login_select_admin').on('click', function (e) {
            e.preventDefault();
			//alert('Working');
            _showForm('forgot');
        });
		
	
    }
    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');

			_handleSelectForm();
            _handleSignInForm();
            _handleSignUpForm();
            _handleForgotForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
