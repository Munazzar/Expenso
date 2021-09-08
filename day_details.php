<!doctype html>
<html lang="en">
  <head>
  	<title>Daily Expenses -  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href='images/fav-icon.ico'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>	
		<script type='text/javascript'>
		function get_graph(data,id,text,max){
			//alert(id);
			var label=[];
			var $data=data;
			var maxi=max+100;
			var $text=text;
			//alert($data.length);
			//array of colors for display
			var rgb=["rgba(220,53,69,1)","rgba(0,255,0,1)","rgb(0,0,160,1)","rgba(255,128,64,1)","rgba(128,255,255,1)",
			"rgba(225,255,0,1)","rgba(128,128,0,1)","rgba(64,0,64,1)","rgba(128,0,0,1)","rgba(255,53,69,1)",
			"rgba(128,0,255,1)","rgba(67,5,64,1)","rgba(12,5,64,1)","rgba(67,5,78,1)","rgba(100,5,64,1)","rgba(78,56,64,1)","rgba(6,5,64,1)","rgba(67,50,64,1)","rgba(128,5,18,1)","rgba(67,57,64,1)","rgba(66,5,64,1)","rgba(67,55,64,1)"];
			var rgb_back=["rgba(220,53,69,0.3)","rgba(0,255,0,0.5)","rgb(0,0,160,0.75)","rgba(255,128,64,0.75)","rgba(128,255,255,0.75)",
			"rgba(225,255,0,0.75)","rgba(128,128,0,0.75)","rgba(64,0,64,0.75)","rgba(128,0,0,0.75)","rgba(255,53,69,0.75)",
			"rgba(128,0,255,0.75)","rgba(67,5,64,0.75)","rgba(12,5,64,0.75)","rgba(67,5,78,0.75)","rgba(100,5,64,0.75)","rgba(78,56,64,0.75)","rgba(6,5,64,0.75)","rgba(67,50,64,0.75)","rgba(128,5,18,0.75)","rgba(67,57,64,1)","rgba(66,5,64,0.75)","rgba(67,55,64,0.75)"]
			var dataset_array=[];
			//setting data set in form of array
			for(i=0;i<$data.length;i++)
			{
				//label[i]=$text[i];
				//alert($data[i]);
				//alert(myChart.data.datasets[i].label);
					dataset_array[i]={
						label:$text[i] ,
						backgroundColor: rgb_back[i],
						borderColor: rgb[i],
						borderWidth: 2,
					   
					  
						  data:$data[i],
					  }
			}
						//alert(dataset_array);
						
						
					var ctx = document.getElementById(id).getContext('2d');
					//alert($data);
			var myChart = new Chart(ctx, {
				  
				type: 'bar',
				data: {
					labels: label,
					type:'bar',
				   datasets: dataset_array
					
					
				},
				  options: {
					 responsive: true,
				maintainAspectRatio: false,
					scales: {
						
						yAxes: [{
							ticks: {
								beginAtZero:true,
								steps: 100,
								stepValue: 100,
								max: maxi
							}
						}]
						
					}
				}
			});



		}
		
		</script>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5 logo_lit" style="background-image: url(images/logo.png);"></a>
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
	          <li class="active">
              <a href="monthlyexp.php">Monthly Expenses (CALENDER)</a>
	          </li>
	         <li>
             <a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
              <ul class="collapse list-unstyled" id="reportsSubmenu">
                <li>
                    <a href="employees.php">CATEGORY</a>
                </li>
				<li>
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
                
               
              </ul>
            </div>
          </div>
        </nav>
	
           <div class="container col-sm-5 col-md-10 col-lg-12 mt-5 ">
		   
    <div class="card card_box"  style='background-color:#fcfcfc;float:left;width:550px'>
	
		
	<?php
	error_reporting(0);
	$update_only_str=file_get_contents('main.json');
	$main_decode=json_decode($update_only_str,true);
	$date=$_REQUEST['date'];
	$view_date=DateTime::createFromFormat('d-m-Y', $date)->format('m-d-Y');
	echo "<h3 style='text-align:center'><b>$view_date";
	if($date==date("d-m-Y"))
		echo " (TODAY)";
	
	echo "</b></h3>";
	echo "<table class='table table-hover table-bordered'>
	
	<thead style='background-color:#323232;color:white;'><tr><td>Actual Expenses Details</td><td><a href='add_day_details.php?date=$date'><button class='btn btn-primary'>+ADD</button></td></a><td><a href='edit_day_details.php?date=$date'><button class='btn btn-info'>EDIT</button></a></td></tr></thead>
	
	
	";
	$category=array();
	$cat_array=array();
	$val_array=array();
	$values=array();
	$max=0;
	foreach($main_decode['daily-expenses']["$date"]['actual'] as $cat=>$value){
		array_push($category,$cat);
		array_push($values,$value);
		array_push($val_array,$values);
		if($value>$max)
			$max=$value;
		$values=array();
		echo "<tr><td>$cat</td><td>$$value</td></tr>";
	}
	array_push($cat_array,$category);
	
	
	echo "</table>";
	
	
	
	
	
	?>
		
	</div>
	
	
	
	
	
	
	<div class="card card_box"  style='background-color:#fcfcfc;float:left;margin-left:20px;width:550px;'>
	<?php
	
	
	 $date=$_REQUEST['date'];
	echo "<h3 style='text-align:center'><b></b></h3>";
	
	echo "<table class='table table-hover'>
	
	<thead style='background-color:#323232;color:white;'><tr><td>Workers Details</td><td><a href='add_day_workers.php?date=$date'><button class='btn btn-primary'>+ADD</button></a></td><td><a href='edit_day_workers.php?date=$date'><button class='btn btn-info'>EDIT</button></a></td></tr></thead>
	
	
	";
	foreach($main_decode['daily-expenses']["$date"]['Payroll_details'] as $name=>$details){
	
	$shifts=explode('-',$date);
	$day_l= date('D', strtotime($date));
	$shift=$main_decode['schedule'][$name][$day_l];
	echo "<tr><td>$name:</td><td> $shift (".$details['hours']."hr)</td> <td>$".$details['pay']."</td></tr>";
	
	

		
	}
	
	echo "</table>";
	
	
	
	
	
	?>
	
	</div>
	
	<div class="card card_box"  style='background-color:#fcfcfc;float:left;margin-left:20px;margin-top:50px;width:1180px;'>
	<?php
						s
	?>
	</div>
	</div>
	  
	  </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
  
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

</style>
<style>
		canvas{
			width:1080px !important;
			height:720px !important;
			
 
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