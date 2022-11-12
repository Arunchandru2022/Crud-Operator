<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation','email');

        $this->load->model('crud_model');

	}
	public function index()
	{
		$this->load->view('home');
	}
	

	public function insert(){
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'Username', 'required');
            $this->form_validation->set_rules('contact', 'Contact', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            

 			if ($this->form_validation->run() == FALSE)
            {
                 $data = array('responce' => 'error','message' => validation_errors());
            }
            else
            {
                 $ajax_data = $this->input->post();
                 if ($this->crud_model->insert_entry($ajax_data)) {
                 $data = array('responce' => 'success' ,'message' => 'New Data Added Successfully');
                 }
                 else{
                 	$data = array('responce' =>'error' ,'message'=>'Failed');
                 }
                 
            }

		}
		else{
				echo "No direct script access allowed";
			}
			echo json_encode($data);
		
	}

	public function fetch(){
		if ($this->input->is_ajax_request()) {
			$posts= $this->crud_model->get_entries();
			echo json_encode($posts);
		}
	}




	public function delete()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			if ($this->crud_model->delete_entry($del_id)) {
				$data = array('response' => "success",);
			} else {
				$data = array('response' => "error");
			}

			echo json_encode($data);
		}else{
			echo "No direct script access allowed";

		}
	}


	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->crud_model->edit_entry($edit_id)) {
				$data = array('response' => 'success', 'post' => $post);
			} else {
				$data = array('response' => 'error', 'message' => 'failed');
			}

			echo json_encode($data);
		}else{
			echo "No direct script access allowed";

		}
	}

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_name', 'Name', 'required');
			$this->form_validation->set_rules('edit_contact', 'Contact', 'required');
			$this->form_validation->set_rules('edit_email', 'Email', 'required|valid_email');

			if ($this->form_validation->run() == FALSE) {
				$data = array('response' => "error", 'message' => validation_errors());

			} else {
				$data['id'] = $this->input->post('edit_id');
				$data['name'] = $this->input->post('edit_name');
				$data['contact'] = $this->input->post('edit_contact');
				$data['email'] = $this->input->post('edit_email');
				if ($this->crud_model->update_entry($data)) {
					$data = array('response' => "success", 'message' => "Data update successfully");
					
					//$emailTo = $this->input->post('edit_email');
					//$this->email($emailTo);

				} else {
					$data = array('response' => "error", 'message' => "failed");
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function email($emailTo){
		
		$this->email->from('arunchandru99@gmail.com','mickey@1718#');
		$this->email->to($emailTo);
		$this->email->subject("Greetings !!!!");
		$this->email->message("Your Update Successfully");
		if ($this->email->send()) {
			show_error($this->email->print_debugger());
			echo "email Not Send";
		}else{
			echo "email has been send";

		}
		
	}

	public function sendemail(){
		if ($this->input->is_ajax_request()) {
			
			$emailid = $this->input->post('emailid');
			
			if (!empty($emailid)) {
				$this->email->from('arunchandru99@gmail.com','mickey@1718#');
				$this->email->to($emailTo);
				$this->email->subject("Greetings !!!!");
				$this->email->message("Your Update Successfully");
				if ($this->email->send()) {
					show_error($this->email->print_debugger());
					echo "email Not Send";
				}else{
					echo "email has been send";

				}
				$data = array('response' => 'success', 'post' => 'success');
			} else {
				$data = array('response' => 'error', 'message' => 'failed');
			}

			echo json_encode($data);
		}else{
			echo "No direct script access allowed";

		}
	}

}
