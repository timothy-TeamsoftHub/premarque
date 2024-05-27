<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();
       // $this->load->database();
       $this->load->model('couple_account');
        //$this->load->library('excel');
        //$this->load->helper('ziparchiver');
       /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome/template/header');
		$this->load->view('welcome/page/welcome_message');
		//echo '<div style="">You are welcome</div>';
		$this->load->view('welcome/template/footer');
	}
	public function accept_undertaking($account_id)
	{
		 

		$data = array(
			'couple_account_id'=>$account_id,
			'couple_account_type'=>$this->session->userdata('couple_account_type'),
			'undertaking_id'=>$this->couple_account->fetch_undertaking_id($this->couple_account->fetch_p_id($this->couple_account->fetch_ip_id($account_id))),
			'province_id'=>$this->couple_account->fetch_p_id($this->couple_account->fetch_ip_id($account_id)),
			'date_created'=>date('Y-m-d')

		);

		$this->db->insert('undertaking_acceptance', $data);
		redirect(base_url().'dashboard');

	}
	public function ajax_validation($category='')
	{
		$response = [];
		if($category == 'ica')
		{
			$account_id = $this->input->post('account_id');
			$password = $this->input->post('password');

			// Call the model method to check if the couple account exists
			$couple_account_exists = $this->couple_account->check_couple_account_exists($account_id);

			if ($couple_account_exists) {
				// Couple account exists
				//Verify Account
				if($this->couple_account->verify_account($account_id, $password) == true)
				{
					$couple_account_type = $this->input->post('couple_account_type');
					if($couple_account_type == '')
					{
						$response['ica_login_status'] = 'error';
						$response['errorMessage'] = 'Please select the Account Type!';
					}
					else
					{
						//$this->session->set_userdata('couple_account_type',$couple_account_type);
						$this->session->set_userdata('couple_account_type',$couple_account_type);
						$response['ica_login_status'] = 'success';
						$response['account_id'] = $account_id;
						$response['couple_name'] = $this->couple_account->couple_account_type_name($account_id, $couple_account_type);
						// //Check Undertaking Status
						if($this->couple_account->verify_undertaking_acceptance($account_id, $couple_account_type))
						{
							$response['undertaking_check'] = 'completed'; // Exist in the Undertaking Acceptance table
							if($this->couple_account->check_couple_account_type_profile_exists($account_id, $couple_account_type))
							{
								$response['profile_check'] = 'completed';
							
							}
							else{
								$response['profile_check'] = 'not completed';
								$this->session->set_userdata('couple_account_id', $account_id);
								$this->session->set_userdata('couple_account_type', $couple_account_type);
								$this->session->set_userdata('couple_account_name', $response['couple_name']);
							}
						}
						else
						{
							$response['undertaking_check'] = 'not completed';  //Does not exist in the Undertaking Acceptance table
							$response['undertaking_description'] = $this->couple_account->fetch_undertaking($account_id);
						}
						
					}
				}
				else
				{
					$response['ica_login_status'] = 'error';
					$response['errorMessage'] = 'Invalid Login Details!';
				}
				// //echo "Couple account with ID $couple_account_id exists.";
				// $response['ica_login_status'] = 'success';
				// $response['errorMessage'] = 'Please select the Account Type!';
			} else {
				// Couple account does not exist
				$response['ica_login_status'] = 'error';
				$response['errorMessage'] = 'Couple Account does not exit!';
			}

			
			// $hashedPasswordFromDatabase = '$2y$10$S0Ninw.7IN4jbA2q...'; // This would be fetched from the database
			// if (password_verify($password, $hashedPasswordFromDatabase)) {
			// 	echo 'Password is correct';
			// } else {
			// 	echo 'Password is incorrect';
			// }



			
			
			
			
			//$response['couple_account_type'] = $couple_account_type;
		}
		
	
		echo json_encode($response);

		


	}
}
