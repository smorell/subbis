<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {


	function  __construct()
    {
        
		parent::__construct();
		//$this->load->model('Tools_model');
		//$this->load->model('Tribe_model');
        $this->output->enable_profiler(TRUE);
     }




	public function index()
	{
		$this->load->view('office/index');
	}
	
	
	
	
	/**
	*	List promoters
	*/
	public function promoter()
	{
	
		$this->load->model('Promoter_model');
		$promoter = $this->Promoter_model->get_all();
		
		$data = array(
			'promoter' =>	$promoter
			);
		
		$this->load->view('office/promoter/list',$data);
		
	}
	
	/**
	*	New promoter form
	*/
	public function promoter_new()
	{
	
		
		$this->load->view('office/promoter/new');
		
	}
	
	/**
	*	Save new promoter 
	*/
	public function promoter_create()
	{
		$this->load->model('Promoter_model');
		
		$save = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone' => $this->input->post('phone'),
			);
		
		$this->Promoter_model->create($save);
			
		
		redirect('settings/promoter');
		
	}
	
	
	
	
	
	
	
	
	
	/**
	*	List campaigns
	*/
	public function campaign()
	{
	
		$this->load->model('Campaign_model');
		$campaign = $this->Campaign_model->get_all();
		
		$data = array(
			'campaign' =>	$campaign
			);
		
		$this->load->view('office/campaign/list',$data);
		
	}
	
	/**
	*	New campaigns form
	*/
	public function campaign_new()
	{
	
		
		$this->load->view('office/campaign/new');
		
	}
	
	/**
	*	Save new campaigns 
	*/
	public function campaign_create()
	{
		$this->load->model('Campaign_model');
		
		$save = array(
			'name' => $this->input->post('name')
			);
		
		$this->Campaign_model->create($save);
			
		
		redirect('settings/campaign');
		
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

