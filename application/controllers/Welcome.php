<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$posts= $this->queries->getPosts();
		$this->load->view('welcome_message', ['posts'=>$posts]);
		
	}

	public function create(){
		$this->load->view('create');
	}

	public function update($id){
		$this->load->model('queries'); 
		$post= $this->queries->getSinglePosts($id);
		$this->load->view('update', ['post'=>$post]);
	}

	public function save(){
		$this->form_validation->set_rules('day', 'Day', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if ($this->form_validation->run())
		{
				$data= $this->input->post();
				$today = date('Y-m-d');
				$data['Date_created']= $today;
				unset($data['submit']);
				$this->load->model('queries');
				if($this->queries->addPost($data)){
					$this->session->set_flashdata('msg', 'Data added Successfully');
				}
				else{
					$this->session->set_flashdata('msg', 'Failed to add Data');
				}
				return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function change($id){
		$this->form_validation->set_rules('day', 'Day', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if ($this->form_validation->run())
		{
				$data= $this->input->post();
				$today = date('Y-m-d');
				$data['Date_created']= $today;
				unset($data['submit']);
				$this->load->model('queries');
				if($this->queries->updatePost($data, $id)){
					$this->session->set_flashdata('msg', 'Data updated Successfully');
				}
				else{
					$this->session->set_flashdata('msg', 'Failed to update Data');
				}
				return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function delete($id){
		$this->load->model('queries');
		if($this->queries->deletePosts($id)){
			$this->session->set_flashdata('msg', 'Data Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg', 'Failed to Delete Data');	
		}
		return redirect('welcome');
	}

	public function reset(){
		$this->load->model('queries');
		if($this->queries->resetPosts()){
			$this->session->set_flashdata('msg', 'Data Reset Successfully');
		}
		else{
			$this->session->set_flashdata('msg', 'Failed to Reset Data');	
		}
		return redirect('welcome');
	}
}
