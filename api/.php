<?php

xml = "http://api.radionomy.com/currentsong.cfm?radiouid=46a671a6-83e3-4fe1-aa13-ebd8d501efab&apikey=d7e3e0ef-c99c-4a4d-b8e0-20ce42373f3c&callmeback=yes&type=xml&cover=yes&previous=yes";



XmlDocument doc = new XmlDocument();

doc.LoadXml(xml);



string json = JsonConvert.SerializeXmlNode(doc);



echo json;

?>