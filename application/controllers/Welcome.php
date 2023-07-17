<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


function __construct() {
        parent::__construct();
		$this->load->library('session');
		 $this->load->helper('captcha');
       
		
    }
	
	 
	public function index()
	{
		$vals = array(
        'word'          => rand(00000,99999),
        'img_path'      => './captcha/',
        'img_url'       => base_url().'/captcha',
        'font_path'     => './path/to/fonts/texb.ttf',
        'img_width'     => '150',
        'img_height'    => 30,
        'expiration'    => 7200,
        'word_length'   => 8,
        'font_size'     => 16,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
);

		

       $cap = create_captcha($vals);
	   $this->session->set_userdata('captcha_word',$cap['word']);
	     $data['captcha'] = $cap['image'];
		$this->load->view('user.php',$data);
	}
	public function login()
	{
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('uname','User name', 'required|alpha');
	   $this->form_validation->set_rules('pass','password' , 'required|max_length[12]');
	    $this->form_validation->set_rules('code','code' , 'required');
	   if ($this->form_validation->run())
	   {
		   $captcha_word = $this->session->userdata('captcha_word');
		   $uname=$this->input->POST('uname');
		   $captcha=$this->input->POST('code');
		   $password=$this->input->POST('pass');
		   $pass = hash('sha512', $password);
		   //echo $pass;
		   //die();
		  //$password= $this->encrypt->sha1($pass);
		   $this->load->model('loginmodel');
		   if($captcha == $captcha_word)
		   {
		  if('user_password' == $pass )
		  {
			 $this->load->library('session');
			 $this->session->set_userdata('id',$login_id);
			 $this->load->view('dashboard');
		  }
		  else
		  {
              $data['alert'] = 'failed';
			  echo "please Enter correct username and password";
		  }
		  }else{
		  echo "error";
	   }
	 
	   }

	 else
	   {
		   $this->load->view('user');
	   }
	}
	public function register()
	{
		echo "All Done";
	}
}
