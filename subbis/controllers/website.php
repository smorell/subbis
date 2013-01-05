<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('website/welcome');
	}
	
	
	public function thanks()
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */