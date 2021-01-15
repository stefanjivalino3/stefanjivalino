<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends CI_Controller {

	function  __construct(){
		parent::__construct();
		$this->load->library(array('form_validation', 'Recaptcha'));
    }

	public function index()
	{
		$data = array(
            'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
            'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
        );
		$this->load->view('contact/index', $data);
	}

	public function success()
	{
		$this->load->view('contact/success');
	}
	public function error()
	{
		$this->load->view('contact/error');
	}


	function send(){
        // Load PHPMailer library
		$this->load->library('phpmailer_lib');
		
		$name = $this->input->post("fname")." ".$this->input->post("lname");
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('isi');

		$newmessage = str_replace("</p>", "</p><br>", $message);
		// $newmessage = $message;

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info.stefanjivalino@gmail.com';
        $mail->Password = 'Carisorang1';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;

        $mail->setFrom($email, "My Website - ".$name);
        $mail->addReplyTo($email, $name);

        // Add a recipient
        $mail->addAddress('stefanjivalino@gmail.com');

        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = $subject;

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = $newmessage;
		$mail->Body = $mailContent;
		
		$data["errorMs"] = $mail->ErrorInfo;

		$recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);
        if (!isset($response['success']) || $response['success'] <> true) {
            redirect(base_url('contact'));
        } else {
            if(!$mail->send()){
				$this->load->view('contact/error',$data);
				// echo 'Message could not be sent.';
				// echo 'Mailer Error: ' . $mail->ErrorInfo;
			}else{
				redirect(base_url('contact/success'));
			}
        }
        // Send email
        
    }
}
