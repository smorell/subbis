<?php
   
class Campaign_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       
    }

	function get_all()
	{
	
		$this->db->from('campaign');
        //$this->db->where('id',$id);
        //$this->db->limit(1);
        $data=$this->db->get();
        //return $data->row();
        return $data->result();
	
	}
	
	
	function create($data)
	{
		$res = $this->db->insert('campaign', $data);
		return $res;
	}
	
	

}

?>