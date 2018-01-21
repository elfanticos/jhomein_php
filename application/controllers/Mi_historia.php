<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mi_historia extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->output->set_header(CHARSET_ISO_8859_1);
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');;
    }
        
	public function index() {
        $data['menu'] = $this->load->view('v_menu',array(),true);
		$this->load->view('v_mi_historia',$data);
	}

}

/* End of file Jhomein.php */
/* Location: ./application/controllers/Jhomein.php */