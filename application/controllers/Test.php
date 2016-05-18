<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("braintree_lib");
    }

		private function printJSON($var){
				echo json_encode($var);
		}

    public function get_token()
    {
        $token = $this->braintree_lib->create_client_token();
        $this->printJSON($token);
    }

}
?>
