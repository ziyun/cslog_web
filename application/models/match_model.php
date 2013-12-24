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
        $sql = "SELECT D.`aliases`, A.`team`, IFNULL(B.`kills`, 0) AS `kills`, IFNULL(C.`deaths`, 0) AS `deaths` 
        FROM (SELECT `player_a` AS `player`, `team` FROM `Kill` WHERE `match_id` = ".$mid." UNION SELECT `player_b`, NOT `team` FROM `Kill` WHERE `match_id` = ".$mid.") AS A
        LEFT JOIN (SELECT `player_a`, COUNT(*) AS `kills` FROM `Kill` WHERE `match_id` = ".$mid." GROUP BY `player_a`) AS B
        ON A.`player` = B.`player_a`
        LEFT JOIN (SELECT `player_b`, COUNT(*) AS `deaths` FROM `Kill` WHERE `match_id` = ".$mid." GROUP BY `player_b`) AS C
        ON A.`player` = C.`player_b`
        INNER JOIN (SELECT `profile_id`, GROUP_CONCAT(`alias`) AS `aliases` FROM `Alias` GROUP BY `profile_id`) AS D
        ON A.`player` = D.`profile_id`;";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
