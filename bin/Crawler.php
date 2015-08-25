<?php
/* 
 * 2015/08/25 arai
 * 
 * Framework:PHPCrawl http://phpcrawl.cuab.de/
 */
include("../libs/PHPCrawler.class.php");

class MyCrawler extends PHPCrawler 
{ 
  function handleDocumentInfo(PHPCrawlerDocumentInfo $PageInfo) 
  { 
    // Your code comes here! 
    // Do something with the $PageInfo-object that 
    // contains all information about the currently  
    // received document. 

    // As example we just print out the URL of the document 
    echo $PageInfo->url."\n"; 
  } 
}
$crawler = new MyCrawler(); 
$crawler->setURL("www.logicaland.co.jp"); 
$crawler->addContentTypeReceiveRule("#text/html#"); 
$crawler->setCrawlingDepthLimit(2);
// ... 

$crawler->go();