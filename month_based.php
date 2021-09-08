<!doctype html>
<html lang="en">
  <head>
  	<title>Monthly Report -  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href='images/fav-icon.ico'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>	
		<script type='text/javascript'>
		function get_graph(data,id,text){
			//alert(id);
			var label=text;
			var $data=data;
			
			var $text=text;
			//alert($text);
			//array of colors for display
			var rgb=["rgba(220,53,69,1)","rgba(0,255,0,1)","rgb(0,0,160,1)","rgba(255,128,64,1)","rgba(128,255,255,1)",
			"rgba(225,255,0,1)","rgba(128,128,0,1)","rgba(64,0,64,1)","rgba(128,0,0,1)","rgba(255,53,69,1)",
			"rgba(128,0,255,1)","rgba(67,5,64,1)","rgba(12,5,64,1)","rgba(67,5,78,1)","rgba(100,5,64,1)","rgba(78,56,64,1)","rgba(6,5,64,1)","rgba(67,50,64,1)","rgba(128,5,18,1)","rgba(67,57,64,1)","rgba(66,5,64,1)","rgba(67,55,64,1)"];
			var rgb_back=["rgba(220,53,69,0.3)","rgba(0,255,0,0.5)","rgb(0,0,160,0.75)","rgba(255,128,64,0.75)","rgba(128,255,255,0.75)",
			"rgba(225,255,0,0.75)","rgba(128,128,0,0.75)","rgba(64,0,64,0.75)","rgba(128,0,0,0.75)","rgba(255,53,69,0.75)",
			"rgba(128,0,255,0.75)","rgba(67,5,64,0.75)","rgba(12,5,64,0.75)","rgba(67,5,78,0.75)","rgba(100,5,64,0.75)","rgba(78,56,64,0.75)","rgba(6,5,64,0.75)","rgba(67,50,64,0.75)","rgba(128,5,18,0.75)","rgba(67,57,64,1)","rgba(66,5,64,0.75)","rgba(67,55,64,0.75)"]
			
			//setting data set in form of array
			
				//label[i]=$text[i];
				//alert($data[i]);
				//alert(myChart.data.datasets[i].label);
					
					var datasets=[{
						label:$text,
						backgroundColor: rgb,
						borderColor: rgb,
						borderWidth: 2,
					   
					  
						  data:$data,
					}];
			
						//alert(dataset_array);
						
						
					var ctx = document.getElementById(id).getContext('2d');
					//alert($data);
			var myChart = new Chart(ctx, {
				  
				type: 'doughnut',
				data: {
					labels: label,
					type:'doughnut',
				   datasets: datasets
					
					
				},
				options : {
					responsive: true,
					legend: {
						  display: true,
						  labels: {
							fontSize: 22
						  }
						},
						tooltips:{
							titleFontSize:20,
							bodyFontSize:20
						}
				}
			}
			);



		}
		
		</script>
		
		
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5 logo_lit" style="background-image: url(images/logo.png); "></a>
				<h4 style='text-align:center;color:white;font-family:georgia;font-weight:bold'> </h4>
	        <ul class="list-unstyled components mb-5">
	           <li>
	              <a href="schedule.php">Schedule</a>
	          </li>
	          <li>
             <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="employees.php">Display</a>
                </li>
                <li>
                    <a href="editemployee.php">Update</a>
                </li>
                <li>
                    <a href="addemployee.php">add</a>
                </li>
				  <li>
                    <a href="deleteemployee.php">delete</a>
                </li>
              </ul>
	          </li>
	          <li >
              <a href="monthlyexp.php">Monthly Expenses</a>
	          </li>
	         <li class="active">
             <a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" >Reports</a>
              <ul class="collapse list-unstyled" id="reportsSubmenu">
                <li>
                     
                </li>
              <li class="active">
                    <a href="month_based.php">Monthly</a>
                </li>
              </ul>
	          </li>
	        </ul>

	        <div class="footer">
	        
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                 <li class="nav-item ">
                    <a class="nav-link" href="expenses_attributes.php">CATEGORY</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="weekly_data.php">Weekly</a>
                </li>
             
               
               
              </ul>
            </div>
          </div>
        </nav>
	
           <div class="container col-sm-5 col-md-10 col-lg-12 mt-5 " style='overflow:scrolling'>
		   
    <div class="card card_box"  style='background-color:#fcfcfc' id='result_box'>
<h3 style='text-align:center;'><b>Monthly Report  </b></h3>
		 <form class="form-inline justify-content-center" style="padding:10px" method="POST" action="month_based.php" >
            <label class="lead mr-2 ml-2" for="month"> Month</label>
            <select class="form-control col-sm-4" name="month" id="month" >
                <option value=0>Jan</option>
                <option value=1>Feb</option>
                <option value=2>Mar</option>
                <option value=3>Apr</option>
                <option value=4>May</option>
                <option value=5>Jun</option>
                <option value=6>Jul</option>
                <option value=7>Aug</option>
                <option value=8>Sep</option>
                <option value=9>Oct</option>
                <option value=10>Nov</option>
                <option value=11>Dec</option>
            </select>


            <label class="lead mr-2 ml-2" for="year">Year</label><select class="form-control col-sm-4" name="year" id="year" >
			<?php
			for($i=2018;$i<=3000;$i++)
				echo "<option value=$i>$i</option>"
			?>
            
								
        </select>
		   <input type='submit' value="SUBMIT" class='btn btn-success'> 
		</form>
	<div id="result_box">
	<?php
error_reporting(0);

$month=date("m");
$year=date("Y");
if(isset($_POST["month"]))
{
	$month=$_POST["month"]+1;
	if($month<10)
	{
		$month="0".$month;
	}
	$year=$_POST["year"];
}
$n_days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
$cost_array=Array();
$array1=Array();
$array2=Array();
$cat_array=Array();

for($i=1;$i<=$n_days;$i++){
	$day=$i;
	if($i<10)
	{
		$day="0"."$i";
	}
	$date=$day."-".$month."-".$year;
	
	$update_only_str=file_get_contents('main.json');
	$main_decode=json_decode($update_only_str,true);
	foreach($main_decode["daily-expenses"]["$date"]["actual"] as $cat=>$value){
		
		if(!array_key_exists($cat,$cost_array))
		{
			$cost_array[$cat]=$value;
			array_push($cat_array,$cat);
		}
		else
		{
			$cost_array[$cat]+=$value;
		}
		
	}
	
}
$arr=Array();
$category=Array();
$total=0;
foreach($cost_array as $id=>$val){
	
	array_push($arr,intval($val));
	if($id=="Total")
		$total=$val;
	array_push($category,$id);
}


$cos_array=json_encode($arr);
$cat_array=json_encode($category);
$idi="mt_exp";
$day_l= date('M', strtotime($date));
echo "<div class='canvas-div' align='center'><h3>Monthly Expenses for $day_l $year</h3><canvas id='$idi' ></canvas></div>";
							echo "<script type='text/javascript'>
							get_graph($cos_array,'$idi',$cat_array);
							</script>
							
							<br><br>";
							
							echo "<table class='table table-hover' id='table'>
							<thead thead class='thead-dark' style='color:white;background-color:black;'><tr><td>CATEGORY</td><td>COST</td><td>Percent</td></tr></thead>";
							
							foreach($cost_array as $cat=>$val){
								if($cat=="Total")
									$total=$val;
								else
								{
									$pe=(round(intval($val))/round(intval($total)))*100;
									$pe=round($pe,2);
									echo "<tr><td>$cat</td><td>$val $</td><td>$pe %</td></tr>";
								}
								
							}
							echo "<tr><td>Total</td><td>$total $</td></tr>";
							echo "</table>";
//print_r($cost_array);

?>
	</div>
	
		
	<button class='btn btn-primary' onClick='window.print()' style='width:75px;'>Print</button>	
	</div>
	
	</div>
	  
	  </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  <script>
  

today = new Date();
currentMonth = today.getMonth();

currentYear = today.getFullYear();
selectYear = document.getElementById("year");
selectMonth = document.getElementById("month");
selectMonth.value=currentMonth;
	 selectYear.value=currentYear;
//month_display();
  
 /*function month_display(){
	 currentYear = document.getElementById("year").value;
currentMonth = document.getElementById("month").value;
	  if(window.XMLHttpRequest)
		{
			obj3=new XMLHttpRequest();
		}
		else
		{
			obj3=new ActiveXObject('Microsoft.XMLHTTP');
		}
		obj3.open("POST","calculate_month_exp.php?month="+currentMonth+"&year="+currentYear,true);
		obj3.send();
		obj3.onreadystatechange=function()
		{
		if(obj3.readyState==4 && obj3.status==200)
		{
		document.getElementById('result_box').innerHTML=obj3.responseText;
		//alert(obj3.responseText);
			
		
		}
		}
	 
 }*/
  </script>
  
  
  <style>

body{

	background-color:#808080;
}
.card_box{
	padding:25px;
	  box-shadow: 0 10px 8px 0 rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.5);
	
}
.add{
	
	margin-left:15px;
}
.add:hover{
	opacity:0.5;
	cursor:pointer;
	
}

.logo_lit{
	
	box-shadow: 0 5px 8px 5px rgba(230, 230, 230, 5), 2px 2px 20px 5px rgba(230, 230, 230, 5);
	
}
.logo_lit:hover{
	
	box-shadow: 0 5px 8px 5px rgba(230, 230, 230, 8), 2px 2px 30px 5px rgba(230, 230, 230, 8);
	
}
a{
	color:black;
	
}
.show_hide{
	visibility:visible;

	
}
.hide_show{
	visibility:hidden;
	

}
</style>
<style>
		canvas{
			width:900px !important;
			height:480px !important;
			
 
		}
		@media only screen and (max-width: 450px) {
			canvas{
			width:400px !important;
			height:300px !important;
			
 
		}
		}
		.canvas-div{
			
		
		}
		</style>
</html>