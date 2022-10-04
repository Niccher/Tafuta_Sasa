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

    public function update_order_status($order_id){
        $data = ['Ord_Status' => "11"];
        $this->db->where('Ord_Id', $order_id);
        $this->db->update('tbl_Orders', $data);
    }

    public function submit_order($order_id, $msg, $sub_attachment){
        $data = array(
            'order_Id' => $order_id,
            'submit_Msg' => $msg,
            'submit_Attachment' => $sub_attachment,
            'submit_Seen' => "00",
            'submit_Time' => time(),
        );
        return $this->db->insert('tbl_Submited_Orders', $data);
    }
}
?>