<?php

require('database.php');
$arr = $_POST;
$author_ip = (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
$date = date('Y-m-d', strtotime(str_replace('-', '/', $arr['intake_date'])));
$title = $arr['title'];
$category = $arr['category'];
$author = $arr['author'];

$db->beginTransaction();
try {

    $id = $db->lastInsertId();
    $qstring = 'INSERT INTO ip_address (ip) VALUES ("'.$author_ip.'");
                SET @ip_id = LAST_INSERT_ID();
                INSERT INTO author (name) VALUES ("'.$author.'");
                SET @author_id = LAST_INSERT_ID();
                INSERT INTO author_has_ip_address (author_id, ip_address_id) VALUES(@author_id, @ip_id);
                INSERT INTO article(title,category,date,avg_rating,num_of_comments,author_id) VALUES ("'.$title.'","'.$category.'","'.$date.'",0,0, @author_id)';


    $stmt = $db->prepare($qstring);
    $stmt->execute();
    echo $qstring;
}
catch(PDOException $e) {
    $db->rollBack();
    echo $e->getMessage();
}


//echo $stmt->execute();
//echo $arr['title'];