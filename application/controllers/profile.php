<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {


    public function index()
    {
        echo 'bad';
    }

	public function detail($pid)
    {
        $this->load->model('player');
        $headshots = $this->player->headshots($pid);
        $hitgroups = $this->player->hitgroups($pid);
        $data = array('headshots' => $headshots, 'hitgroups' => $hitgroups);
        $header_data = array('title' => "Player Detail");
        $this->load->view('header', $header_data);
        $this->load->view('profile_view', $data);
        $this->load->view('footer');
	}
}
