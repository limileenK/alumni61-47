<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		echo "MST"."<br>";
	}
	public function index()
	{
		// $data['name'] = "kong";
		// $data['email'] = "kong@gmail.com";
		$data['std'] = array("614259048","kong","15asd","SE");
		$this->load->view('Hello_view',$data);
	}
	public function show($name=null,$lastname=null)
	{
		echo "se" .$name."".$lastname;
		$this->display();
	}
	public function display(){
		echo "<br>"."SE";
	}
}
