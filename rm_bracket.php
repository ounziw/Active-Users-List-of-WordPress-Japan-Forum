<?php

for ($num=8600;$num<10700;$num++){
	$data = file_get_contents("questioner_removed/".$num.".txt");

	$data = str_replace("(","",$data);
	$data = str_replace(")","",$data);

	file_put_contents("bracket_removed/".$num.".txt",$data);

}
