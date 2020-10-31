<?php
class stockcontroller extends CI_Controller
{
	public function insert()
	{
		$this->load->model("stockModel");
		$this->stockModel->insertdata();
	}
	public function fetch()
	{
		$this->load->model("stockModel");
		$data["records"]=$this->stockModel->fetchdata();
		$this->load->view("fetch",$data);
	}
	public function modify()
	{
		$this->load->model("stockModel");
		$this->stockModel->modifydata();
	}
	public function remove()
	{
		$this->load->model("stockModel");
	    $this->stockModel->removedata();
	}
}
?>