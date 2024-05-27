<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
       // $this->load->model('email_model');
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
		$data['page_name'] = 'Dashboard';
		//echo 'Yes -oooo';
		$this->load->view('pages/template/very_top_header', $data);
		$this->load->view('pages/template/header', $data);
		$this->load->view('pages/template/menu_header', $data);
		$this->load->view('pages/dashboard', $data);
		// $this->load->view('welcome/page/welcome_message');
		// //echo '<div style="">You are welcome</div>';
		 $this->load->view('pages/template/footer', $data);
	}


	public function create_profile($account_id='')
	{
	

	}
}
