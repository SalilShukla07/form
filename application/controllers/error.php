<?php
class Error extends CI_Controller {

        public function index()
        {
			// echo "salil shukla";
             $this->load->view('error_404.php');
        }
}