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

    public function submit_rev_temp_file($file_name, $order_id){
        $data = array(
            'order_Id' => $order_id,
            'rev_File' => $file_name,
            'rev_Time' => time(),
        );
        return $this->db->insert('tbl_Submit_Temp_Rev_Upload', $data);
    }

    public function submit_temp_attachments($order_id){
        $array = array('order_Id =' => $order_id);
        $this->db->where($array);
        $query = $this->db->get('tbl_Submit_Temp_Upload');
        return $query->result_array();
    }

    public function get_rev_temp_attachments($order_id){
        $array = array('order_Id =' => $order_id);
        $this->db->where($array);
        $query = $this->db->get('tbl_Submit_Temp_Rev_Upload');
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

    public function client_download_order($order_id){
        $array = array('order_Id =' => $order_id);
        $this->db->order_by('submit_Id', 'DESC');
        $this->db->limit(1);
        $this->db->where($array);
        $query = $this->db->get('tbl_Submited_Orders');
        return $query->row_array();
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

    public function make_revison($rev_msg, $order_id, $rev_attached){

        $this->db->where('order_Id', $order_id);
        $this->db->delete('tbl_Submit_Temp_Rev_Upload');

        $data = array(
            'order_Id' => $order_id,
            'rev_Msg' => $rev_msg,
            'rev_Files' => $rev_attached,
            'rev_Time' => time(),
            'rev_Status' => "00",
        );
        return $this->db->insert('tbl_Submited_Orders_Revision', $data);
    }

    public function is_revised($order_id){
        $array = array('order_Id =' => $order_id);
        $this->db->order_by('rev_Id', 'DESC');
        $this->db->limit(1);
        $this->db->where($array);
        $query = $this->db->get('tbl_Submited_Orders_Revision');
        return $query->row_array();
    }

    public function is_order_submited_to_client($order_id){
        $array = array('order_Id =' => $order_id);
        $this->db->order_by('submit_Id', 'DESC');
        $this->db->limit(1);
        $this->db->where($array);
        $query = $this->db->get('tbl_Submited_Orders');
        return $query->row_array();
    }

    public function order_mark_complete($order_id, $com_msg, $com_source){

        $data = ['Ord_Status' => "22"];
        $this->db->where('Ord_Id', $order_id);
        $this->db->update('tbl_Orders', $data);

        $data = array(
            'order_Id' => $order_id,
            'comment_Mgs' => $com_msg,
            'comment_Source' => $com_source,
            'comment_Time' => time(),
        );
        return $this->db->insert('tbl_Order_Comment', $data);
    }

    public function notify_client($order_id){
        try {
            $order_info = $this->mod_orders->orders_by_id($order_id);
            $order_owner = $order_info['Ord_Owner'];
            $owner_info = $this->mod_users->get_vars($order_owner);

            $owner_email = $this->mod_crypt->Dec_String($owner_info->Email);

            $this->mod_emails->mail_this("academic@chegecache.co.ke", $owner_email, "Order has been delivered, Please check your account", "Order Delivery", "Order delivery" );
        }catch (Exception $es){
            echo "exception <br>".$es;
        }
    }

}
?>