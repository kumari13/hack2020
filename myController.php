<?php
class myController extends CI_Controller
{
	public function display()
	{
		$this->load->helper("url");
		$this->load->view('firstpage');
	}
}
?>