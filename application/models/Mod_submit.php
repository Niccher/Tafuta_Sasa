<?php
class Mod_submit extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function submit_temp_upload($file_name, $order_id){
        $data = array(
            'order_Id' => $order_id,
            'file_name' => $file_name,
            'upload_time' => time(),
            'temp_Status' => "00",

        );
        return $this->db->insert('tbl_Submit_Temp_Upload', $data);
    }

    public function submit_temp_attachments($order_id){
        $array = array('order_Id =' => $order_id);
        $this->db->where($array);
        $query = $this->db->get('tbl_Submit_Temp_Upload');
        return $query->result_array();
    }

    public function submit_temp_attachments_delete($filename){
        $this->db->where('file_name', $filename);
        $this->db->delete('tbl_Submit_Temp_Upload');
    }

    public function make_submit($q_name, $q_desc, $q_files, $q_level,$q_cite, $q_pgs, $q_date, $q_price){
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
            'Ord_Price' => $q_price,
            'Ord_Owner' => $this->session->userdata('log_id'),
        );

        $uploaded = $this->mod_orders->order_get_attachments();
        //echo $uploaded;
        $files = explode("|__|", $uploaded);
        echo count($files);
        foreach ($files as $file) {
            rename("uploads/client_temp_orders/".$file, "uploads/client_orders/".$file);
        }

        return $this->db->insert('tbl_Orders', $data);
    }
}
?>