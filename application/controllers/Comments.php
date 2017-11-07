<?php
	class Comments extends CI_Controller{
		public function create($product_id){
			$name = $this->input->post('name');
			$data['product'] = $this->product_model->get_products($name);

			

			$this->form_validation->set_rules('text', 'Text', 'required');


			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('products/view', $data);
				$this->load->view('templates/footer');
			} else {
				$this->comment_model->create_comment($product_id);
				redirect('products/'.$name);
			}
		}
	}