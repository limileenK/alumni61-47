<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		echo "MST"."<br>";
	}
	public function index()
	{
		$this->load->view('Hello_view');
	}
	public function show($name=null,$lastname=null)
	{
		echo "se" .$name."".$lastname;
		$this->display();
	}
	public function display(){
		echo "<br>"."SE";
		$this->load->view("Hello_view");
	}
}
