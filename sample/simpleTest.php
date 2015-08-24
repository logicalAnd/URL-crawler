<?php

function crawl_page($url, $depth = 5) {
    if($depth > 0) {
        $html = file_get_contents($url);

        preg_match_all('~<a.*?href="(.*?)".*?>~', $html, $matches);
        var_dump($matches[1]);
        foreach($matches[1] as $newurl) {
           crawl_page($newurl, $depth - 1);
        }
        file_put_contents('results.txt', $newurl."\n\n".$html."\n\n", FILE_APPEND);
    }
}

crawl_page('http://www.logicaland.co.jp', 3);

?>
