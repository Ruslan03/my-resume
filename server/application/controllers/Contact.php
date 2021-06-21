<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function send_email()
	{
	// 	$contact->ajax = true;
		
	// 	$contact->to = $receiving_email_address;
	// 	$contact->from_name = $_POST['name'];
	// 	$contact->from_email = $_POST['email'];
	// 	$contact->subject = $_POST['subject'];

	// 	// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
		
	// 	$contact->smtp = array(
	// 	  'host' => 'example.com',
	// 	  'username' => 'example',
	// 	  'password' => 'pass',
	// 	  'port' => '587'
	// 	);
		

	// 	$contact->add_message( $_POST['name'], 'From');
	// 	$contact->add_message( $_POST['email'], 'Email');
	// 	$contact->add_message( $_POST['message'], 'Message', 10);

	// 	echo $contact->send();

		$this->load->library('email');

		$this->email->from($_POST['email'], $_POST['name']);
		$this->email->to('ruslanwanandi@gmail.com');

		$this->email->subject($_POST['subject']);
		$this->email->message($_POST['message']);

		$this->email->send();

		echo 1;
	}
}
