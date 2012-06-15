<?php

for ($num=8600;$num<10700;$num++){
	$data = file_get_contents("rssdata/".$num.".txt");
	// 投稿者一名の時の空白を調節する
	$data = " " . trim($data);

		// 質問した人 = 最後の空白以後の文字列
		$questioner_pos = strrpos($data," ");
		if ($questioner_pos !== FALSE) {
			$questioner = substr($data,$questioner_pos);
			$data = str_replace($questioner,"",$data);
		}

	file_put_contents("questioner_removed/".$num.".txt",$data);

}
