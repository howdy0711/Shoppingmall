<?php
	require '../bootstrap.php';
  require '../BlogApp.php';
	require '../SmApp.php';

	//$app = new BlogApp(false);// error 출력 여부(true-표시,false-미표시)
	$app = new SmApp(true);
	$app->run();


?>