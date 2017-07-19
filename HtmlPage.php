
<?php
/* create a dom document with encoding utf8 */
$domtree = new DOMDocument('1.0', 'UTF-8');
/* create the root element of the xml tree */
$xmlRoot = $domtree->createElement("feed");
$xmlRoot = $domtree->appendChild($xmlRoot);
$addProduct = $domtree->createElement("entry");
$addProduct = $xmlRoot->appendChild($addProduct);
$addProduct->appendChild($domtree->createElement('id','100123'));
$addProduct->appendChild($domtree->createElement('title','Blokhut'));
$addProduct->appendChild($domtree->createElement('g:price','123,50'));
$addProduct->appendChild($domtree->createElement('description','omschrijving van de blokhut'));
$addProduct->appendChild($domtree->createElement('g:condition','new'));
/* get the xml printed */
header("Content-Type: text/plain");
$domtree->formatOutput = true;
echo $domtree->saveXML();


?>