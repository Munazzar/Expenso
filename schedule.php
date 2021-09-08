<!doctype html>
<html lang="en">
  <head>
  	<title>Schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
  		<a href="#" class="img logo rounded-circle mb-5 logo_lit" style="background-image: url(images/logo.png); "></a>
					<h4 style='text-align:center;color:white;font-family:georgia;font-weight:bold'> </h4>
	      <ul class="list-unstyled components mb-5">
	            <li class="active">
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
	         <li>
             <a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
              <ul class="collapse list-unstyled" id="reportsSubmenu">
                <li>
                    <a href="employees.php">CATEGORY</a>
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
                <li class="nav-item add">
                   <a href='schedule_edit.php'> <img src='images/schedule_edit.png' height='60px' width='60px;' ></a>
                </li>
               
               
              </ul>
            </div>
          </div>
        </nav>
	
           <div class="container col-sm-5 col-md-10 col-lg-12 mt-5 " style='overflow:scrolling'>
		   
    <div class="card card_box"  style='background-color:#fcfcfc' id='result_box'>

		<table class='table table-hover' id='table'>
	<?php
	error_reporting(0);
	
	$update_only_str=file_get_contents('main.json');
		$main_decode=json_decode($update_only_str,true);
		echo "<thead thead class='thead-dark'><tr><th>	<input type='checkbox' name='Picture' title='check this box while taking pictures for the employees' id='show_hide_check' onClick='show_hide()'></th>";
	foreach($main_decode["users"] as $key=>$th){
		echo "<th ><b>".$th["name"]."</b></th>";
		
	}
	echo "<th style='color:#dc7a16;' class='show_hide'><b>Today Pay</b></th></tr></thead>";
	$day_array=array();
	$week_array=array();
	$hours_name_arr=array();
	$week_pay=0;
		foreach($main_decode["w-days"] as $key=>$days)
		{
		$day_array[$key]=0;
			echo "<tr><td style='color:#f6932f;' class='h6'><b>$days</b></td>";
			foreach($main_decode['users'] as $name=>$value)
			{
				if(!array_key_exists($name,$week_array))
				{
					$week_array[$name]=0;
					
				}
				if($main_decode["schedule"]["$name"]["$key"]=="OFF")
				{
					echo "<td><a href='schedule_edit.php'>".$main_decode["schedule"]["$name"]["$key"]."</a></td>";
					
				}
				else
				{
					if(!array_key_exists($name,$hours_name_arr))
						$hours_name_arr[$name]=0;
					$hours_str=$main_decode["schedule"]["$name"]["$key"];
					$hours_array=explode("-",$hours_str);
					$hours_min_start=explode(":",$hours_array[0]);
					$hours_min_end=explode(":",$hours_array[1]);
					
					if($hours_min_start[0]<10)
					{
						$hours_min_start[0]+=12;
					}
					$hours_min_end[0]+=12;
					$hours=$hours_min_end[0]-$hours_min_start[0];
					$minus=$hours_min_start[1]/60;
					$plus=$hours_min_end[1]/60;
					$hours=$hours-$minus+$plus;
					
					$pay_cal=$main_decode['users']["$name"]['pay']*$hours;
					$week_pay+=$pay_cal;
					$day_array[$key]+=$pay_cal;
					 $week_array[$name]+=$pay_cal;
					 $hours_name_arr[$name]+=$hours;
					
					echo "<td ><b>".$main_decode["schedule"]["$name"]["$key"]." <span style='color:blue'>($hours)</span> </b></td>";
				}
			}
			echo "<td class='show_hide'><b>$ $day_array[$key]</td></tr>";
			
		}
		
		echo "<tr><td style='color:#7a440c;' class='h6 show_hide'><b>Pay per Week</b></td>";
		foreach($week_array as $names=>$week_pay_day)
			echo "<td class='show_hide'><b>$ $week_pay_day <span style='color:blue'>(".$hours_name_arr[$names].")</span></b></td>";
		echo "<td class='show_hide'><h6 style='color:red'><b>$ $week_pay</b></h6></td></tr>";
	?>
		</table>
		
	<button class='btn btn-primary' onClick='print()' style='width:75px;'>Print</button>	
	</div>
	
	</div>
	  
	  </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	  <script src="js/print.js"></script>
  </body>
  <script>
  function show_hide(){
	  
	  id=document.getElementById('show_hide_check');
	  value=id.value;
	  if(id.checked==true)
	  {
		   var cols = document.getElementsByClassName('show_hide');
		  for(i = 0; i < cols.length; i++) {
			cols[i].style.visibility = 'hidden';
		  }
	  }
	  else
	  {
		var cols = document.getElementsByClassName('show_hide');
		  for(i = 0; i < cols.length; i++) {
			cols[i].style.visibility = 'visible';
		  }
	  }
	  
  }
  
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
</html>