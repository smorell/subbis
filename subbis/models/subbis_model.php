<?php
   
class Subbis_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       
    }

	function get_all()
	{
	
		$this->db->from('subbi');
        //$this->db->where('id',$id);
        //$this->db->limit(1);
        $data=$this->db->get();
        //return $data->row();
        return $data->result();
	
	}
	
	
	function get_by_id($id)
	{
	
		$this->db->from('subbi');
        $this->db->where('subbis_id',$id);
        $this->db->limit(1);
        $data=$this->db->get();
        return $data->row();
	
	}

	
	
	function create($data)
	{
		$res = $this->db->insert('subbi', $data);
		return $res;
	}
	
	function update($data,$id)
	{
		$this->db->where('subbis_id',$id);
		$res = $this->db->update('subbi', $data);
		return $res;
	}
	
	
}

?>