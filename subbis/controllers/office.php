<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office extends CI_Controller {


	
	function  __construct()
    {
        
		parent::__construct();
		//$this->load->model('Tools_model');
		//$this->load->model('Tribe_model');
        $this->output->enable_profiler(TRUE);

        // some change...
     }



	public function index() 
	{
		$this->load->view('office/index');
	}
	
	public function yosvel() 
	{
		echo "vamos hermanito...";
	}
	
	
	/**
	*	List subbis
	*/
	public function subbis()
	{
	
		$this->load->model('Subbis_model');
		$subbis = $this->Subbis_model->get_all();
		
		$data = array(
			'subbis' =>	$subbis
			);
		
		$this->load->view('office/subbis/list',$data);
		
	}
	
	
	/**
	*	Create a new Subbi from Zero - not a pre-entered one
	*/
	
	public function subbis_new()
	{
	
		$this->load->model('Promoter_model');
		$this->load->model('Campaign_model');
		$promoter = $this->Promoter_model->get_all();
		$campaign = $this->Campaign_model->get_all();
		
		$data = array(
			'promoter'		=>		$promoter,
			'campaign'		=>		$campaign
			);
	
		$this->load->view('office/subbis/new',$data);
	}
	
	
	/**
	*	Save new subbi 
	*/
	public function subbi_create()
	{
		$this->load->model('Subbis_model');
		
		$save = array(
			'first_name' 		=> $this->input->post('first_name'),
			'last_name' 		=> $this->input->post('last_name'),
			'address' 			=> $this->input->post('address'),
			'zip' 				=> $this->input->post('zip'),
			'city' 				=> $this->input->post('city'),
			'phone' 			=> $this->input->post('phone'),
			'email' 			=> $this->input->post('email'),
			'dob' 				=> date('Y-m-d',strtotime($this->input->post('dob'))),
			'migra' 			=> $this->input->post('migra'),
			'profession' 		=> $this->input->post('profession'),
			'school' 			=> $this->input->post('school'),
			'driver' 			=> $this->input->post('driver'),
			'rate' 				=> $this->input->post('rate'),
			'notes_job' 		=> $this->input->post('notes_job'),
			'notes_general' 	=> $this->input->post('notes_general'),
			'id_campaign' 		=> $this->input->post('id_campaign'),
			'id_promoter' 		=> $this->input->post('id_promoter'),
			'status' 			=> $this->input->post('status'),
			'created_on' 		=> date('Y-m-d H:i:s')
			);
		
		$this->Subbis_model->create($save);
			
		
		redirect('office/subbis');
		
	}
	
	/**
	*	Edit a  Subbi 
	*/
	
	public function subbis_edit($id)
	{
	
		$this->load->model('Promoter_model');
		$this->load->model('Campaign_model');
		$this->load->model('Subbis_model');
		$promoter = $this->Promoter_model->get_all();
		$campaign = $this->Campaign_model->get_all();
		$subbi = $this->Subbis_model->get_by_id($id);
		
		$data = array(
			'promoter'		=>		$promoter,
			'campaign'		=>		$campaign,
			'subbi'			=>		$subbi
			);
	
		$this->load->view('office/subbis/edit',$data);
	}
	
	
	
	/**
	*	update a subbi 
	*/
	public function subbi_update()
	{
		
		
		$this->load->model('Subbis_model');
		
		$save = array(
			'first_name' 		=> $this->input->post('first_name'),
			'last_name' 		=> $this->input->post('last_name'),
			'address' 			=> $this->input->post('address'),
			'zip' 				=> $this->input->post('zip'),
			'city' 				=> $this->input->post('city'),
			'phone' 			=> $this->input->post('phone'),
			'email' 			=> $this->input->post('email'),
			'dob' 				=> date('Y-m-d',strtotime($this->input->post('dob'))),
			'migra' 			=> $this->input->post('migra'),
			'profession' 		=> $this->input->post('profession'),
			'school' 			=> $this->input->post('school'),
			'driver' 			=> $this->input->post('driver'),
			'rate' 				=> $this->input->post('rate'),
			'notes_job' 		=> $this->input->post('notes_job'),
			'notes_general' 	=> $this->input->post('notes_general'),
			'id_campaign' 		=> $this->input->post('id_campaign'),
			'id_promoter' 		=> $this->input->post('id_promoter'),
			'status' 			=> $this->input->post('status')
			);
		
		$this->Subbis_model->update($save,$this->input->post('subbis_id'));
			
		
		redirect('office/subbis');
	}

	
	
	public function email()
	{
	
		$this->output->enable_profiler(TRUE);
		
		// send email
		$this->load->library('email');

		$this->email->from('website@subbis.com', 'Subbis Website');
		$this->email->to('sven@3xperts.com'); 
		$this->email->cc('st40fs@gmail.com'); 
		
		$this->email->subject('Formular wurde ausgefüllt');
		
		$foo = $_POST;
		$value = implode( chr(13).chr(10), $foo );
		
		$this->email->message($value);	
		
		$this->email->send();
		
		//echo $this->email->print_debugger();
		
		
		$this->load->view('website/thanks');
	}
}

