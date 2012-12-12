<?php

for ($num=12700;$num<12900;$num++){
	$rssurl = 'http://ja.forums.wordpress.org/rss/topic/' . $num;
	$data = "";
	if($rssdata = simplexml_load_file($rssurl)) {

		foreach ($rssdata->channel->item as $val) {
			$data .= " ";
			$dc=$val->children('http://purl.org/dc/elements/1.1/');
			$data .= str_replace(" ","__SPACE__",$dc->creator);
		}

	}

	file_put_contents("rssdata/".$num.".txt",$data);

}
