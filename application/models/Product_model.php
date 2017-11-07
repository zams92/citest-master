<?php
	class Product_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_products($name = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($name === FALSE){
				$this->db->order_by('products.id', 'DESC');
				$query = $this->db->get('products');
				return $query->result_array();
			}

			$query = $this->db->get_where('products', array('name' => $name));
			return $query->row_array();
		}

		public function create_product($pictures){

			$data = array(
				'name' => $this->input->post('name'),
				'info' => $this->input->post('info'),
				'category' => $this->input->post('category'),
				'pictures' => $pictures
			);

			return $this->db->insert('products', $data);
		}
		
		public function delete_product($id){
			$image_file_name = $this->db->select('pictures')->get_where('products', array('id' => $id))->row()->pictures;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\products\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('products');
			return true;
		}

		public function update_product(){

			$data = array(
				'name' => $this->input->post('name'),
				'info' => $this->input->post('info'),
				'category' => $this->input->post('category')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('products', $data);
		}

	}