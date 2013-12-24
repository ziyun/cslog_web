<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Match extends CI_Controller {


    public function index()
    {
        $this->load->model('match_model');
        $matches = $this->match_model->last_n_matches(10);
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
}
