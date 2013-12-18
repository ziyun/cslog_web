<?php

class Player extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    function headshots($pid)
    {
        $sql = "SELECT COUNT(*) AS `headshots` FROM `Kill` WHERE `player_a` = " . $pid . " AND `headshot` = 1;";
        $query = $this->db->query($sql);
        return $query->result()[0]->headshots;
    }

    function hitgroups($pid)
    {
        $sql = "SELECT `hitgroup`, COUNT(*) AS `count` FROM `Attack` WHERE `player_a` = " . $pid . " GROUP BY `hitgroup`;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function kills()
    {
        return 10;
    }

    function deaths()
    {
        return 10;
    }
}
