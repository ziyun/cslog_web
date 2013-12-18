<?php

class Match_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function last_n_matches($n)
    {
        $sql = "SELECT `match_id`, `map`, `created_on`, `terrorist`, `counter_terrorist` 
        FROM `Match` ORDER BY `match_id` DESC LIMIT ".$n.";";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function match_info($mid)
    {
        $sql = "SELECT `match_id`, `map`, `created_on`, `terrorist`, `counter_terrorist` 
        FROM `Match` WHERE `match_id` = ".$mid.";";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function player_score($mid)
    {
        $sql = "SELECT C.`aliases`, A.`team`, A.`kills`, B.`deaths` 
        FROM (SELECT `player_a`, `team`, COUNT(*) AS `kills` FROM `Kill` WHERE `match_id` = 1 GROUP BY `player_a`) AS A
        INNER JOIN (SELECT `player_b`, COUNT(*) AS `deaths` FROM `Kill` WHERE `match_id` = 1 GROUP BY `player_b`) AS B
        ON A.`player_a` = B.`player_b`
        INNER JOIN (SELECT `profile_id`, GROUP_CONCAT(`alias`) AS `aliases` FROM `Alias` GROUP BY `profile_id`) AS C
        ON A.`player_a` = C.`profile_id`;"; 
        $query = $this->db->query($sql);
        return $query->result();
    }
}
