<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
    {
        $this->load->model('dashboard');
        $names = $this->dashboard->top10();
        $data = array('names' => $names);
        $this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
