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
	}
?>