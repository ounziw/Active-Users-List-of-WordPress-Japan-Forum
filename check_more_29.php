<?php

for ($num=8600;$num<10700;$num++){
	$data = file_get_contents("rssdata/".$num.".txt");
	// 空白を調節する
	$data = trim($data);

		// 空白が29以上あれば、30以上の語がある
		$space_count = substr_count($data," ");
		if ($space_count >= 29) {
			print $num;
			print "\n";
		}

}
