<?php
	class Mod_orders extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_orders(){
            $query = $this->db->get('tbl_Orders');
            return $query->result_array();
        }

        public function orders_by_owner($p_id){
            $array = array('Ord_Owner =' => $p_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Orders');
            return $query->result_array();

        }

        public function orders_by_id($p_id){
            $array = array('Ord_Id =' => $p_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Orders');
            return $query->row_array();

        }

        public function get_attachment_size($attachment_size){
            $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            $power = $attachment_size > 0 ? floor(log($attachment_size, 1024)) : 0;
            return number_format($attachment_size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
        }
        
        public function order_temp_upload($file_name){
            $data = array(
                'Person_ID' => $this->session->userdata('log_id'),
                'Filename' => $file_name,
                'Posted' => time(),
            );

            return $this->db->insert('tbl_Temp_Upload', $data);
        }

        public function order_get_attachments(){
            $p_id = $this->session->userdata('log_id')."__";

            $file_list = "";
            $this_file = "";

            $path = './uploads/client_temp_orders/*';
            foreach(glob($path) as $file)  {
                $this_file = str_replace("./uploads/client_temp_orders/","",$file);
                if (substr( $this_file, 0, strlen($p_id) ) == $p_id) {
                   $file_list.= "|__|".$this_file;
                }
            }

            return $file_list;

        }

        public function make_order($q_name, $q_desc, $q_files, $q_level,$q_cite, $q_pgs, $q_date){
            $p_id = $this->session->userdata('log_id')."__";
            $data = array(
                'Ord_Name' => $q_name,
                'Ord_Body' => $q_desc,
                'Ord_Created' => time(),
                'Ord_Deadline' => $q_date,
                'Ord_Pages' => $q_pgs,
                'Ord_Cite' => $q_cite,
                'Ord_Level' => $q_level,
                'Ord_Attachment' => $q_files,
                'Ord_Pay' => "00",
                'Ord_Status' => "00", 
                'Ord_Viewed' => "00",
                'Ord_Owner' => $this->session->userdata('log_id'),
            );

            $uploaded = $this->mod_orders->order_get_attachments();
            echo $uploaded;
            $files = explode("|__|", $uploaded);
            echo count($files);
            foreach ($files as $file) {
                rename("uploads/client_temp_orders/".$file, "uploads/client_orders/".$file);
            }

            return $this->db->insert('tbl_Orders', $data);
        }

        public function delete_order_by_id($q_uuid){

            $query = $this->db->get_where('tbl_Orders',array('Ord_Id' => $q_uuid));
            foreach ($query->result() as $row) {
                  $this->db->insert('tbl_Orders_Deleted',$row);
            }

            $this->db->where('Ord_Id',$q_uuid);
            $this->db->delete('tbl_Orders');

        }

        public function make_submission($sub_message, $order_id, $sender, $sub_attached){
            $data = array(
                'Sender' => $sender,
                'Recipient' => "Admin",
                'Sent' => time(),
                'Seen' => "00",
                'Message' => $sub_message,
                'Order_Id' => $order_id,
                'Attachment' => $sub_attached,
            );

            return $this->db->insert('tbl_Chat_Orders', $data);
        }
              
	}
?>