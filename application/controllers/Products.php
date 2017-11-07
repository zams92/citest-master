<?php
	class Products extends CI_Controller{

		public function index($offset = 0){	
			// Pagination Config	
			$config['base_url'] = base_url() . 'products/index/';
			$config['total_rows'] = $this->db->count_all('products');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			$this->pagination->initialize($config);

			$data['title'] = 'Products';

			$data['products'] = $this->product_model->get_products(FALSE, $config['per_page'], $offset);

			$this->load->view('templates/header');
			$this->load->view('products/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Create product';


			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('info', 'Info', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('products/create', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/products';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$pictures = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$pictures = $_FILES['userfile']['name'];
				}

				$this->product_model->create_product($pictures);

				// Set message
				$this->session->set_flashdata('product_created', 'Your product has been created');

				redirect('products');
			}
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->product_model->delete_product($id);

			// Set message
			$this->session->set_flashdata('product_deleted', 'Your product has been deleted');

			redirect('products');
		}

		public function edit($name){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			
			$name2 = urldecode($name);
			$data['product'] = $this->product_model->get_products($name2);

			
			if(empty($data['product'])){
				show_404();
			}

			$data['title'] = 'Edit Product';

			$this->load->view('templates/header');
			$this->load->view('products/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->product_model->update_product();

			// Set message
			$this->session->set_flashdata('product_updated', 'Your product has been updated');

			redirect('products');
		}

		public function view($name = NULL){
			$name2 = urldecode($name);
			$data['product'] = $this->product_model->get_products($name2);
			$product_id = $data['product']['id'];
			$data['comments'] = $this->comment_model->get_comments($product_id);
			

			if(empty($data['product'])){
				show_404();
			}

			$data['title'] = $data['product']['name'];

			$this->load->view('templates/header');
			$this->load->view('products/view', $data);
			$this->load->view('templates/footer');
		}

		


		
	}