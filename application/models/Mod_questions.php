<?php
	class Mod_questions extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_questions(){
            //$array = array('Privilege =' => 'Client');
            //$this->db->where($array);
            $query = $this->db->get('tbl_Questions');
            return $query->result_array();
        }

        public function make_temp_upload($p_id, $file_name){
            $data = array(
                'Person_ID' => $p_id,
                'Filename' => $file_name,
                'Posted' => time(),
            );

            return $this->db->insert('tbl_Temp_Upload', $data);
        }

        public function get_attachments(){
            $this->db->where('Posted >=', time()-3600);
            $this->db->where('Posted <=', time()-2);
            $this->db->where('Person_ID', $this->session->userdata('log_id'));
            $this->db->order_by('Upload_Id','DESC');
            $query = $this->db->get('tbl_Temp_Upload');
            return $query->result_array();

        }

        public function make_question($q_name, $q_tags, $q_answer, $q_subj, $q_level,$q_pay, $q_attached){

            $data = array(
                'Qn_Name' => $q_name,
                'Qn_Tags' => $q_tags,
                'Qn_Answer' => $q_answer,
                'Qn_Created' => time(),
                'Qn_Subject' => $q_subj,
                'Qn_Level' => $q_level,
                'Qn_Attachment' => $q_attached,
                'Qn_Pay' => $q_pay,
                'Qn_Status' => "11",
                'Qn_Viewed' => "00",
            );

            return $this->db->insert('tbl_Questions', $data);
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


        
	}
?>