<?php
$id=$_REQUEST['id'];
$value=$_REQUEST['value'];

echo $id." ".$value;


$update_only_str=file_get_contents('main.json');
		$main_decode=json_decode($update_only_str,true);
		$schedule_id=explode("-",$id);
		$main_decode['schedule']["$schedule_id[0]"]["$schedule_id[1]"]=$value;
	
	$jsonData = json_encode($main_decode);
			file_put_contents('main.json', $jsonData);

?>