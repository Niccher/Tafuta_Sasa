<?php
	class Mod_users extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_users(){
            $array = array('Privilege =' => 'Client');
            $this->db->where($array);
            $query = $this->db->get('tbl_Users');
            return $query->result_array();
        }

        public function get_users_10(){
            $this->db->where( 'Timestamp >',(time()-(24*3600)) );
            $this->db->limit(10);
            $query = $this->db->get('tbl_Users');
            return $query->result_array();
        }

        public function make_login($mail,$pwd){
            $this->db->where('Email', $mail);
            $this->db->where('Password', $pwd);

            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0)->Person_ID;
            }else{
                return false;
            }
        }

        public function make_search_bymail($mail){
            $this->db->where('Email', $mail);

            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0)->Person_ID;
            }else{
                return false;
            }
        }

        public function make_reset($rst_owner, $rst_old){
            //  Reset_Id    Reset_Owner     Reset_Time  Reset_Old   Reset_Access    
            $data = array(
                'Reset_Owner' => $rst_owner,
                'Reset_Time' => time(),
                'Reset_Old' => $rst_old,
                'Reset_Access' => "0000000",
            );
            return $this->db->insert('tbl_Reset', $data);
        }

        public function make_reset_accessed($rst_owner, $rst_old, $rst_time){  
            $this->db->where('Reset_Owner', $rst_owner);
            $this->db->where('Reset_Time', $rst_time);
            $data = array( 'Reset_Old' =>  $rst_old, 'Reset_Access' =>  time());
            return $this->db->update('tbl_Reset',$data);
        }

        public function get_reset($rst_owner, $rst_time){
            $this->db->order_by('Reset_Id', 'DESC');
            $this->db->where('Reset_Owner', $rst_owner);
            $this->db->where('Reset_Time', $rst_time);

            $result = $this->db->get('tbl_Reset');

            if ($result->num_rows()==1) {
                return $result->row();
            }else{
                return false;
            }
        }

        public function make_user($nw_name, $nw_eml, $nw_pwd){

            $data = array(
                'Name' => ($nw_name),
                'Phone' => ('0000000000'),
                'Email' => ($nw_eml),
                'Password' => ($nw_pwd),
                'Timestamp' => time(),
            );
            
            $msg = 'Hello '.$nw_name. ' Your account is not yet activated. Some features are therefore restricted.<br>To activate it, open the link sent to ';
            $data2 = array(
                'Timestamps' => time(),
                'Person_ID' => $nw_eml,
                'Message' => $msg,
                'Message_Type' => 'Account Activation',
            );
            $this->db->insert('tbl_Notification', $data2);

            return $this->db->insert('tbl_Users', $data);
        }

        public function get_vars($user_id){
            $this->db->where('Person_ID',$user_id);
            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0);
            }else{
                return false;
            }
        }
        
        public function obfuscate_email($email){
            $em   = explode("@",$email);
            $name = implode('@', array_slice($em, 0, count($em)-1));
            $len  = floor(strlen($name)/2);
        
            return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);   
        }
        
        public function otp_verify($phone,$otp){
            $this->db->where('Phone',$phone);
            $this->db->where('Otp',$otp);
            $this->db->where('Valid','TRUE');
            $times = time();
            
            $result = $this->db->get('tbl_Users_Otp');

            if ($result->num_rows()==1) {
                return $result->row(0)->Count;
            }else{
                return false;
            }
        }
        
        public function create_otp($nw_phone, $nw_eml, $otp){
            $dt = time();
            $data = array(
                'Phone' => $nw_phone,
                'Email' => $nw_eml,
                'Otp' => $otp,
                'Timestamps' => time(),
            );

            return $this->db->insert('tbl_Users_Otp', $data);
            
        }

        public function update_profile_password($uuid, $passwd){
            $this->db->where('Person_ID', $uuid);
            $data = array( 'Password' =>  $passwd);
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_otp($count){
            $this->db->where('Count', $count);
            //$this->db->where('Timestamps + 7200 < ' , () );
            $data = array( 'Valid' => 'FALSE' , 'Tested_at' => time() );
            return $this->db->update('tbl_Users_Otp',$data);
        }
        
        public function update_profile($uuid, $image){
            $this->db->where('Phone', $uuid);
            $data = array( 'Avatar' =>  base64_encode($image));
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_profile_name($uuid, $name){
            $this->db->where('Phone', $uuid);
            $data = array( 'Name' =>  $name);
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_profile_bio($uuid, $bio){
            $this->db->where('Phone', $uuid);
            $data = array( 'Bio' =>  $bio);
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_verify_email($userID){
            $this->db->where('Person_ID', $userID);
            $data = array( 'Status' => 'Active' );
            return $this->db->update('tbl_Users',$data);
        }

        public function make_delete(){ 
            $dt = time();
            $data = array(
                'Name' => $nw_name,
                'Phone' => $nw_phone,
                'Email' => $nw_eml,
                'Password' => $nw_pwd,
                'Timestamp' => time(),
            );

            return $this->db->insert('tbl_Users_Removed', $data);
        }
        
        public function checkotp_exists($otp){
            $query = $this->db->get_where('tbl_Users_Otp', array('Otp'=>$otp));

            if (empty($query->row_array())) {
                return true;
            }else{
                return false;
            }
        }

        public function checkphone_exists($phone){
            $query = $this->db->get_where('tbl_Users', array('Phone'=>base64_encode($this->mod_crypt->Enc_String($phone))));

            if (empty($query->row_array())) {
                return true;
            }else{
                $this->form_validation->set_message('es_phone', 'Phone Number already exists!');
                return false;
            }
        }

        public function checkname_exists($name){
            $query = $this->db->get_where('tbl_Users', array('Name'=>base64_encode($this->mod_crypt->Enc_String($name))));

            if (empty($query->row_array())) {
                return true;
            }else{
                $this->form_validation->set_message('es_name', 'Name already exists!');
                return false;
            }
        }

        public function checkmail_exists($mail){
            $query = $this->db->get_where('tbl_Users', array('Email'=>$this->mod_crypt->Enc_String($mail)));

            if (empty($query->row_array())) {
                return true;
            }else{
                return false;
            }
        }
	}
?>