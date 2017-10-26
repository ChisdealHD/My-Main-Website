<?php
$xml = simplexml_load_file("http://api.radionomy.com/currentsong.cfm?radiouid=46a671a6-83e3-4fe1-aa13-ebd8d501efab&apikey=d7e3e0ef-c99c-4a4d-b8e0-20ce42373f3c&callmeback=yes&type=xml&cover=yes&previous=yes");
header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');
echo json_encode($xml);

?>