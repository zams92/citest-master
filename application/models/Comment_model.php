<?php
	class Comment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_comment($product_id){
			$data = array(
				'products_id' => $product_id,
				'name' => $this->input->post('username'),
				'text' => $this->input->post('text')
			);

			return $this->db->insert('comments', $data);
		}

		public function get_comments($product_id){
			$query = $this->db->get_where('comments', array('products_id' => $product_id));
			return $query->result_array();
		}
	}