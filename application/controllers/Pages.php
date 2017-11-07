<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			if($page == 'home'){
			$data['home'] = $this->page_model->get_dthome();	
			}
			if($page == 'about'){
			$data['about'] = $this->page_model->get_dtabout();
			}

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function update1(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->page_model->update_dthome();

			// Set message
			$this->session->set_flashdata('home_updated', 'Your text on home has been updated');

			redirect('');
		}

		public function update2(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->page_model->update_dtabout();

			// Set message
			$this->session->set_flashdata('about_updated', 'Your text on about has been updated');

			redirect('about');
		}
	}
