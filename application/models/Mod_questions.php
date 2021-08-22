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

        public function get_questions_viewed_by($p_id){
            $array = array('View_Viewer =' => $p_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Viewed');
            return $query->result_array();
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
            /*$this->db->where('Posted >=', time()-3600);
            $this->db->where('Posted <=', time()-2);
            $this->db->where('Person_ID', $this->session->userdata('log_id'));
            $this->db->order_by('Upload_Id','DESC');
            $query = $this->db->get('tbl_Temp_Upload');
            return $query->result_array();*/

            $file_list = "";

            $path = './uploads/temp_orders/*';
            foreach(glob($path) as $file)  {
                $file_list.=str_replace("./uploads/temp_orders/","|||",$file);
            }

            return $file_list;

        }

        public function make_question($q_name, $q_tags, $q_answer, $q_subj, $q_level,$q_pay, $q_cost, $q_attached){

            $data = array(
                'Qn_Name' => $q_name,
                'Qn_Tags' => $q_tags,
                'Qn_Answer' => $q_answer,
                'Qn_Created' => time(),
                'Qn_Subject' => $q_subj,
                'Qn_Level' => $q_level,
                'Qn_Attachment' => $q_attached,
                'Qn_Pay' => $q_pay,
                'Qn_Price' => $$q_cost,
                'Qn_Status' => "11",
                'Qn_Viewed' => "00",
            );

            $path = './uploads/temp_orders/*';
            foreach(glob($path) as $file)  {  
                $dest = str_replace("uploads/temp_orders","uploads/orders",$file);
                rename($file, $dest);
            }

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

        public function get_delete_question($q_uuid){

            $query = $this->db->get_where('tbl_Questions',array('Qn_Id' => $q_uuid));
            $cap = $query->row_array();
            print_r($cap);
            $data = array(
                'Qn_Name' => $cap["Qn_Name"],
                'Qn_Original' => $cap["Qn_Id"],
                'Qn_Tags' => $cap["Qn_Tags"],
                'Qn_Answer' => $cap["Qn_Answer"],
                'Qn_Created' => $cap["Qn_Created"],
                'Qn_Subject' => $cap["Qn_Subject"],
                'Qn_Level' => $cap["Qn_Level"],
                'Qn_Attachment' => $cap["Qn_Attachment"],
                'Qn_Pay' => $cap["Qn_Pay"],
                'Qn_Status' => $cap["Qn_Status"],
                'Qn_Viewed' => $cap["Qn_Viewed"],
            );

            if ($this->db->insert('tbl_Questions_Deleted',$data)) {
                $this->db->where('Qn_Id',$q_uuid);
                $this->db->delete('tbl_Questions');
                return "Success!";
            } else {
                  return "failed!";
            }

        }

	}
?>