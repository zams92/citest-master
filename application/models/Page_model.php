<?php

	class Page_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

				public function get_dthome(){
					
					$id=1;
					$query = $this->db->get_where('home', array('id' => $id));
					return $query->row_array();
				}

				public function get_dtabout(){
					
					$id=1;
					$query = $this->db->get_where('profile', array('id' => $id));
					return $query->row_array();
				}

				public function update_dthome(){

					$data = array(
						'textutama' => $this->input->post('textutama')
					);

					$this->db->where('id', $this->input->post('id'));
					return $this->db->update('home', $data);
				}

				public function update_dtabout(){

					$data = array(
						'name' => $this->input->post('name'),
						'info' => $this->input->post('info'),
						'email' => $this->input->post('email')
					);

					$this->db->where('id', $this->input->post('id'));
					return $this->db->update('profile', $data);
				}

		}