<?php
	class Mod_chats extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function client_send( $msg, $msg_receiver, $msg_sender ) {		
            $data = array(
                'Chat_Sender' => $msg_sender,
                'Chat_Receiver' => $msg_receiver,
                'Chat_Message' => $msg,
                'Chat_Sent' => time(),
                'Chat_Viewed' => "00",
                'Chat_Status' => "00",
                'Chat_Sender_IP' => $this->input->ip_address(),
                'Chat_Reciever_IP' => "00000"
            );

            return $this->db->insert('tbl_Chats', $data);
        }

        public function client_convos($msg_receiver) {	
			$this->db->group_start();
			$this->db->or_where('Chat_Sender',$msg_receiver);
			$this->db->or_where('Chat_Receiver',$msg_receiver);
			$this->db->group_end();
			$query = $this->db->get('tbl_Chats');
            return $query->result_array();
        }

        public function last_msg_by($user_id) {   
            $this->db->limit(1);
            $this->db->order_by('Chat_Id', 'DESC');
            $this->db->group_start();
            $this->db->or_where('Chat_Sender',$user_id);
            $this->db->or_where('Chat_Receiver',$user_id);
            $this->db->group_end();

            $result = $this->db->get('tbl_Chats');

            if ($result->num_rows()==1) {
                return $result->row();
            }else{
                return false;
            }
        }

        public function admin_send( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";


            $crypt_iv_1 = '4568056651654915'; 

            $crypt_key_1 = "�U+�!�u+AuF@Ւ=VЏ̉�wVrȡ)Q{Ԇ\~`�ݲ)<�";

            //$value_clean = base64_decode($this->encryption->decrypt($value));
            $value_clean = base64_decode($value);

            $dec_val=openssl_decrypt ($value_clean,  $cipher_algo, $crypt_key, $options, $crypt_iv); 

            return( $dec_val);
        }

	}
?>