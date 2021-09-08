<?php
$update_only_str=file_get_contents('main.json');
$main_decode=json_decode($update_only_str,true);
$text=$_REQUEST['text'];
$text=rtrim($text,",");
$startDate=date_create($_REQUEST['startDate']);
$endDate=date_create($_REQUEST['endDate']);
$diff=date_diff($startDate,$endDate);
$interval=$diff->format("%a");
$interval=trim($interval)+1;
$key_val=explode(',',$text);
$valuesArr=array();
$from=date_format($startDate,"m-d-Y");
$to=date_format($endDate,"m-d-Y");
foreach($key_val as $row)
{
	$row;
	$cols=explode(":",$row);
	$index1=$cols[0];
	$index2=$cols[1];
	echo $main_decode["inserted-data"]["$from to $to"][$index1]="$index2";
	$valuesArr[$index1]=round($cols[1]/$interval,2);
}


$startDate=date_format($startDate,"d-m-Y");
$endDate=date_format($endDate,"d-m-Y");

				
				
$begin=new dateTime("$startDate");
$stop=new dateTime("$endDate");
		$stop->setTime(0,0,1);
		$inter = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $inter, $stop);
foreach ($period as $dt) {
	$current_date=$dt->format("d-m-Y");
	$current_date;
	foreach($valuesArr as $cat=>$val)
	{
		$main_decode["daily-expenses"][$current_date]["actual"][$cat]="$val";
		
	}
	unset($main_decode["daily-expenses"][$current_date]["actual"]["Total"]);
	$total=0;
	foreach($main_decode["daily-expenses"][$current_date]["actual"] as $id=>$val){
		
		$total+=trim($val);
	}
	$main_decode["daily-expenses"][$current_date]["actual"]["Total"]="$total";
	//print_r($main_decode["daily-expenses"][$current_date]["actual"]);
}

		$jsonData = json_encode($main_decode);
	file_put_contents('main.json', $jsonData);
		
		
		//$main_decode[""]

?>