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
        //$headshot_breakdown = $this->player->headshot_breakdown($pid);
        $aliases = $this->player->aliases($pid);
        $hitgroups = $this->player->hitgroups($pid);
        $map_performance = $this->player->map_performance($pid);
        $weapon_performance = $this->player->weapon_performance($pid);
        $data = array('headshots' => $headshots, 
                        'hitgroups' => $hitgroups, 
                        //'headshot_breakdown' => $headshot_breakdown,
                        'weapon_performance' => $weapon_performance,
                        'map_performance' => $map_performance,
                        'aliases' => $aliases);
        $header_data = array('title' => "Player Detail");
        $this->load->view('header', $header_data);
        $this->load->view('profile_view', $data);
        $this->load->view('footer');
	}
}
