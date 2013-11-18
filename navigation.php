<?php
$page_id = $_GET['id'];
$file = "templates/".$page_id.".html.tpl";

if(file_exists($file))
    echo file_get_contents($file);
else
    echo "File ".$file." not found";



