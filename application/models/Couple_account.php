<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Couple_account extends CI_Model {

	
    public function check_couple_account_exists($couple_account_id) {
        // Query to check if the couple_account_id exists in the couple_account_tbl
        $this->db->where('couple_account_id', $couple_account_id);
        $query = $this->db->get('couple_account_tbl');

        // Check if any rows are returned
        if ($query->num_rows() > 0) {
            return true; // Couple account exists
        } else {
            return false; // Couple account does not exist
        }
    }
    public function check_couple_account_type_profile_exists($couple_account_id, $couple_account_type) {
        // Query to check if the couple_account_id exists in the couple_account_tbl
        $this->db->where(array('couple_account_id'=>$couple_account_id, 'couple_account_type'=>$couple_account_type));
        $query = $this->db->get('couple_profile_tbl');

        // Check if any rows are returned
        if ($query->num_rows() > 0) {
            return true; // Couple account exists
        } else {
            return false; // Couple account does not exist
        }
    }
	public function verify_account($account_id, $password)
    {

        $hashPass = $this->db->get_where('couple_account_tbl', array('couple_account_id'=>$account_id))->row()->password;
        if(password_verify($password, $hashPass))
        {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function couple_account_type_name($account_id, $couple_account_type)
    {
        $name = '';
        $filter = '';
        if($couple_account_type == 'groom')
        {
            //$filter = 'groom_name';
            $name = ucwords($this->db->get_where('couple_account_tbl', array('couple_account_id'=>$account_id))->row()->groom_name);
        }

        if($couple_account_type == 'bride')
        {
            $name = ucwords($this->db->get_where('couple_account_tbl', array('couple_account_id'=>$account_id))->row()->bride_name);
            //$filter = 'bride_name';
        }
        
       return $name;
        
    }
    public function verify_undertaking_acceptance($account_id, $couple_account_type)
    {
		// Query to check if the couple_account_id exists in the couple_account_tbl
		$this->db->where(array('couple_account_id'=>$account_id, 'couple_account_type'=>$couple_account_type));
		$query = $this->db->get('undertaking_acceptance');

		// Check if any rows are returned
		if ($query->num_rows() > 0) {
			return true; // Undertaking exists
		} else {
			return false; // Undertaking does not exist
		}

        
    }
    public function fetch_undertaking($account_id)
    {
        //1. fetch the Introducing parish ID = ip_id from couple_account_tbl
        //2. use the ip_id to fetch the province id = p_id from the parish_tbl
        //3. use the p_id to fetch the undertaking from prewedding_undertaking

        //1. 
        $ip_id = $this->db->get_where('couple_account_tbl', array('couple_account_id'=>$account_id))->row()->introducing_parish_id;

        //2.
        $p_id = $this->db->get_where('parish_tbl', array('id'=>$ip_id))->row()->province;
        if($p_id == -1)
        {
            $p_id = $this->db->get_where('parish_tbl', array('id'=>$ip_id))->row()->id;
        }
        
        //3.
        $undertaking = $this->db->get_where('prewedding_undertaking', array('province_id'=>$p_id))->row()->description;

		return $undertaking;

        
    }

    public function fetch_ip_id($account_id='')
    {
        //1. 
        $ip_id = $this->db->get_where('couple_account_tbl', array('couple_account_id'=>$account_id))->row()->introducing_parish_id;
        return $ip_id;
    }
   
    public function fetch_p_id($ip_id)
    {
        //2.
		 $p_id = $this->db->get_where('parish_tbl', array('id'=>$ip_id))->row()->province;
		 if($p_id == -1)
		 {
			 $p_id = $this->db->get_where('parish_tbl', array('id'=>$ip_id))->row()->id;
		 }
         return $p_id;
    }

    public function fetch_undertaking_id($p_id)
    {
        //3.
		 $undertaking_id = $this->db->get_where('prewedding_undertaking', array('province_id'=>$p_id))->row()->id;
         return $undertaking_id;
    }
		 
		 
		
}