<?php
	class Mod_alternate_db extends CI_Model{

		public function __construct(){
            //$this->load->database();
            $this->db2 = $this->load->database('alt_db', TRUE);
        }

        public function get_writers(){
            $array = array('Privilege =' => 'Writer');
            $this->db2->where($array);
            $query = $this->db2->get('tbl_Users');
            return $query->result_array();
        }

        public function get_attachments($str_attachments){
            $attached = "";
            if ($str_attachments != "") {
                $files = explode("|__|", $str_attachments);
                array_shift($files);
                $attached = implode(',', $files);
            }else{
                $attached = "";
            }
            return $attached;
        }

        public function get_info($user_id){
            $this->db2->where("Id",$user_id);
            $result = $this->db2->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0);
            }else{
                return false;
            }
        }

        public function get_create_order($mk_Name,$mk_Description,$mk_Pages,$mk_Date_Start,$mk_Date_Stop,$mk_Pay,$mk_Pay_Total,$mk_Attachments, $mk_Writer){
            $data = array(
                'Name' => $mk_Name,
                'Description' => $mk_Description,
                'Pages' => $mk_Pages->input,
                'Date_Start' => $mk_Date_Start,
                'Date_Stop' => $mk_Date_Stop,
                'Pay' => $mk_Pay,
                'Pay_Total' => $mk_Pay_Total,
                'Attachments' => $mk_Attachments,
                'Writer' => $mk_Writer,

                'Status' => "Pending",
                'Approval' => "Pending",
                'Deleted' => "0",
                'Assigned' => "0",
                'Paid' => "0",
                'Origin' => "Epic Writers",
            );

            if ($this->db2->insert('tbl_Work',$data)) {
                return "Success!";
                $head1 ='Assigned work '.$mk_Name;

                $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
                $reciva = $user_email;
                $senda = "academic@chegecache.co.ke";

                $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> <b style="color: #777777;"></b>Hello '.$user_name.', the work '.$mk_Name.' has been assigned to you today. The pay is KShs <b> '.$mk_Pay.'</b>, and around  <b> '.$mk_Pages.' Pages</b><br>
                                    You been required to <b>'.$mk_Description.'</b>  before the deadline on <b>'.$mk_Date_Stop.'</b>
                    			<br>Continue working to improve your rating from the admin</div>';

                $this->mod_mailing->mail_this($senda, $reciva, $more, $head, $head1);
            }
            else {
                return "failed!";
            }
        }
	}
?>