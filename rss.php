<?php

for ($num=7600;$num<8600;$num++){
	$rssurl = 'http://ja.forums.wordpress.org/rss/topic/' . $num;
	$data = "";
	if($rssdata = simplexml_load_file($rssurl)) {

		foreach ($rssdata->channel->item as $val) {
			$dc=$val->children('http://purl.org/dc/elements/1.1/');
			$data .= $dc->creator;
			$data .= " ";
		}
	}

	file_put_contents("rssdata/".$num.".txt",$data);

}