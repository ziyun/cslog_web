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
        $row = $query->result();
        return $row[0]->headshots;
    }

    function headshot_breakdown($pid)
    {
        $sql = 'SELECT `weapon`, COUNT(*) AS `headshots` FROM `Kill` WHERE `player_a` = ' . $pid . ' AND `headshot` = 1 GROUP BY `weapon`';
        $query = $this->db->query($sql);
        return $query->result();
    }

    function hitgroups($pid)
    {
        $sql = "SELECT `hitgroup`, COUNT(*) AS `count` FROM `Attack` WHERE `player_a` = " . $pid . " GROUP BY `hitgroup`;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    /*
    function map_performance($pid)
    {
        $sql = "SELECT SUM(A.`kills`) AS `total_kills`, B.`map` FROM (SELECT `match_id`, COUNT(*) AS `kills` FROM `Kill` 
        WHERE `player_a` = ".$pid." GROUP BY `match_id`) AS A 
        INNER JOIN (SELECT `match_id`, `map` FROM `Match`) AS B 
        ON A.`match_id` = B.`match_id` GROUP BY B.`map`;"
        $query = $this->db->query($sql);
        return $query->result();
    }
    */

    function map_performance($pid)
    {
        $sql = "
        SELECT D.`map`, C.`total_kills`, D.`map_count`, (C.`total_kills` / D.`map_count`) AS `ratio` FROM 
        (SELECT A.`match_id`, SUM(A.`kills`) AS `total_kills`, B.`map` FROM (SELECT `match_id`, COUNT(*) AS `kills` FROM `Kill` 
        WHERE `player_a` = ".$pid." GROUP BY `match_id`) AS A
        INNER JOIN (SELECT `match_id`, `map` FROM `Match`) AS B
        ON A.`match_id` = B.`match_id`
        GROUP BY B.`map`) AS C
        INNER JOIN (SELECT B.`map`, COUNT(*) AS `map_count` FROM 
        (SELECT `match_id`, `player_a` FROM `Kill` WHERE `player_a` = ".$pid." GROUP BY `match_id`) AS A
        INNER JOIN (SELECT `match_id`, `map` FROM `Match`) AS B
        ON A.`match_id` = B.`match_id`
        GROUP BY B.`map`) AS D
        ON C.`map` = D.`map`;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function weapon_performance($pid)
    {
        $sql = "SELECT A.`weapon`, A.`damage`, A.`damage_armor`, A.`total_damage`, B.`headshots` FROM 
        (SELECT `weapon`, SUM(`damage`) AS `damage`, SUM(`damage_armor`) AS `damage_armor`, 
        SUM(`damage`) + SUM(`damage_armor`) AS `total_damage` 
        FROM `Attack` AS A WHERE `player_a` = ".$pid." GROUP BY `weapon`) AS A
        INNER JOIN (SELECT `weapon`, COUNT(*) AS `headshots` 
        FROM `Kill` WHERE `player_a` = ".$pid." AND `headshot` = 1 GROUP BY `weapon`) AS B
        ON A.`weapon` = B.`weapon`";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
