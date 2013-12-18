<?php

class Dashboard extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function top10()
    {

        $sql = "SELECT A.`profile_id`, GROUP_CONCAT(A.`alias` SEPARATOR ',') AS `aliases`, H.`kills`, H.`deaths`, H.`ratio` FROM `Alias` AS A ".
            "INNER JOIN (SELECT D.`player_a`, D.`kills`, E.`deaths`, (D.`kills` / E.`deaths`) AS `ratio` FROM (SELECT `player_a`, COUNT(`player_a`) AS `kills` FROM `Kill` GROUP BY `player_a`) AS D ".
            "INNER JOIN (SELECT `player_b`, COUNT(`player_b`) AS `deaths` FROM `Kill` GROUP BY `player_b`) AS E ".
            "ON D.`player_a` = E.`player_b`) AS H ".
            "ON H.`player_a` = A.`profile_id` ".
            "GROUP BY A.`profile_id`;";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
