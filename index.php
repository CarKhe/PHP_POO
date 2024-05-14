<?php 

require_once "sessions.php";

$session = new Session();

$session->setAttribute("name","carlos");
echo "Attribute Created ". $session->getAttribute("name"). "<br/>";

$session->deleteAttribute("name");

echo "Attribute deleted ".$session->getAttribute("Carlos"). "<br/>";

$session->destroySession();






?>