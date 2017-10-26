<?php
$xml = simplexml_load_file("http://api.radionomy.com/tracklist.cfm?radiouid=46a671a6-83e3-4fe1-aa13-ebd8d501efab&apikey=d7e3e0ef-c99c-4a4d-b8e0-20ce42373f3c&amount=3&type=xml&cover=yes");
header("Content-Type: application/json");
echo json_encode($xml);

?>