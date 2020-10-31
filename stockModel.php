<?php
class stockModel extends CI_Model
{
	public function insertdata()
	{
		$this->load->helper("url");
		$this->load->view("insert");
		if($this->input->post("submitbtn"))
		{
			$pid=$this->input->post("pid");
			$pname=$this->input->post("pname");
			$pdesc=$this->input->post("pdesc");
			$pbrand=$this->input->post("pbrand");
			$pprice=$this->input->post("pprice");
			$this->load->database();
			$data=array("ProductId"=>$pid,"ProductName"=>$pname,"ProductDesc"=>$pdesc,"ProductBrand"=>$pbrand,"ProductPrice"=>$pprice);
			if($this->db->insert("stock",$data))
			    echo "<font color=#aaff34><b>Successfully Added</b></font>";
			else
				echo "<font color=#db0d2c><b>Unable to Add</b></font>";
	    }
	}
	public function fetchdata()
	{
		$this->load->helper("url");
		$this->load->database();
		$query=$this->db->get("stock");
		$data=$query->result();
		return $data;
	}
	public function modifydata()
	{
		$this->load->helper("url");
		$this->load->view("modify");
		if($this->input->post("submitbtn"))
		{
			$pid=$this->input->post("pid");
			$pname=$this->input->post("pname");
			$pdesc=$this->input->post("pdesc");
			$pbrand=$this->input->post("pbrand");
			$pprice=$this->input->post("pprice");
			$this->load->database();
			$data=array("ProductId"=>$pid,"ProductName"=>$pname,"ProductDesc"=>$pdesc,"ProductBrand"=>$pbrand,"ProductPrice"=>$pprice);
			$this->db->set($data);
			$this->db->where("ProductId",$pid);
			if($this->db->update("stock",$data))
				echo "<font color=#aaff34><b>Successfully Updated</b></font>";
			else
				echo "<font color=#db0d2c><b>Unable to Update</b></font>";
	    }
	}
	public function removedata()
	{
		$this->load->helper("url");
		$this->load->view("remove");
		if($this->input->post("submitbtn"))
		{
			$pid=$this->input->post("pid");
			$this->load->database();
			$this->db->where("ProductId",$pid);
			if($this->db->delete("stock"))
				echo "<font color=#aaff34><b>Successfully Removed</b></font>";
			else
				echo "<font color=#db0d2c><b>Unable to Remove</b></font>";

		}
	}
	
}
?>