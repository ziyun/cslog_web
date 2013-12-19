<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
    {
        $header_data = array('title' => "About");
        $this->load->view('header', $header_data);
        $this->load->view('about_view');
        $this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
