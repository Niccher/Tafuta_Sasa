<?php
	class Mod_searches extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_searches(){
            $query = $this->db->get('tbl_Searches');
            return $query->result_array();
        }

        public function get_searches_10(){
            $this->db->where('Search_Time >',(time()-(24*3600)) );
            $this->db->limit(10);
            $query = $this->db->get('tbl_Searches');
            return $query->result_array();
        }

        public function make_search($s_user, $s_query, $s_user_ip){	
            $data = array(
                'Search_User' => $s_user,
                'Search_Query' => $s_query,
                'Search_Time' => time(),
                'Search_Ip' => $s_user_ip,
            );

            return $this->db->insert('tbl_Searches', $data);
        }

	}
?>