<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
    {
        $this->load->model('dashboard');
        $names = $this->dashboard->top10();
        $data = array('names' => $names);
        $header_data = array('title' => "Ambi Cstrike");
        $this->load->view('header', $header_data);
        $this->load->view('main_dash', $data);
        $this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
