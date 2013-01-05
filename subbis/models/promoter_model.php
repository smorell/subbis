<?php
   
class Promoter_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       
    }

	function get_all()
	{
	
		$this->db->from('promoter');
        //$this->db->where('id',$id);
        //$this->db->limit(1);
        $data=$this->db->get();
        //return $data->row();
        return $data->result();
	
	}
	
	
	function create($data)
	{
		$res = $this->db->insert('promoter', $data);
		return $res;
	}
	
	function check_in($twitter_id)
	{
	
		// find out if we know the user
		$this->db->from('user');
		$this->db->where('twitter_id',$twitter_id);
		$this->db->limit(1);
        $data=$this->db->get();
        
                
	}

}

?>