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

        public function get_question_by_name($q_name){
            $array = array('Qn_Name =' => $q_name);
            $this->db->where($array);
            $query = $this->db->get('tbl_Questions');
            //return $query->row_array();

            if ($query->num_rows()==1) {
                return $query->row(0);
            }else{
                return false;
            }
        }

        public function get_question_by_id($q_name){
            $array = array('Qn_Id =' => $q_name);
            $this->db->where($array);
            $query = $this->db->get('tbl_Questions');
            //return $query->row_array();

            if ($query->num_rows()==1) {
                return $query->row(0);
            }else{
                return false;
            }
        }

        public function make_question_view($q_uuid, $p_id){
            //  View_Id     View_Time   View_Viewer     View_Question 
            $data = array(
                'View_Time' => time(),
                'View_Viewer' => $p_id,
                'View_Question' => $q_uuid,
                'View_Source' => $this->input->ip_address(),
            );

            return $this->db->insert('tbl_Viewed', $data);

        }

        public function update_question_view($q_uuid, $count){
            $this->db->where('Qn_Id', $q_uuid);
            $data = array( 'Qn_Viewed' =>  $count);
            return $this->db->update('tbl_Questions',$data);
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

	}
?>