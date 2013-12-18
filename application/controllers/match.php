<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Match extends CI_Controller {


    public function index()
    {
        $this->load->model('match_model');
        $matches = $this->match_model->last_n_matches(5);
        $output = array();
        foreach ($matches as $row)
        {
            $output[$row->match_id] = $this->match_model->player_score($row->match_id);
        }
        $data = array("matches" => $matches,
                      "match_info" => $output);
        $header_data = array('title' => "Matches");
        $this->load->view('header', $header_data);
        $this->load->view('match_view', $data);
        $this->load->view('footer');
    }

	public function detail($pid)
    {
        $this->load->model('player');
        $headshots = $this->player->headshots($pid);
        //$headshot_breakdown = $this->player->headshot_breakdown($pid);
        $hitgroups = $this->player->hitgroups($pid);
        $map_performance = $this->player->map_performance($pid);
        $weapon_performance = $this->player->weapon_performance($pid);
        $data = array('headshots' => $headshots, 
                        'hitgroups' => $hitgroups, 
                        //'headshot_breakdown' => $headshot_breakdown,
                        'weapon_performance' => $weapon_performance,
                        'map_performance' => $map_performance);
        $header_data = array('title' => "Player Detail");
        $this->load->view('header', $header_data);
        $this->load->view('profile_view', $data);
        $this->load->view('footer');
	}
}
