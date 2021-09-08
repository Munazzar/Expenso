<!doctype html>
<html lang="en">
  <head>
  	<title>Edit Schedule -  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href='images/fav-icon.ico'>
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
	          <li>
              <a href="monthlyexp.php">Monthly Expenses (CALENDER)</a>
	          </li>
	         <li>
             <a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
              <ul class="collapse list-unstyled" id="reportsSubmenu">
                <li>
                     
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
              <i class="fa fa-bars">|||</i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item add">
                   <a href='schedule.php'> <button class='btn btn-success'>Save</button></a>
                </li>
                
               
              </ul>
            </div>
          </div>
        </nav>
	
           <div class="container col-sm-5 col-md-10 col-lg-12 mt-5 " >
		   
    <div class="card card_box"  style='background-color:#fcfcfc;overflow:auto;'>
	<p style='text-align:center;'>Please follow format HH:mmAM-HH:mm:PM   Eg: 10:45AM-11:00PM</p>
		<table class='table table-hover' id='users-table'>
	<?php
	
	$update_only_str=file_get_contents('main.json');
		$main_decode=json_decode($update_only_str,true);
		echo "<thead thead class='thead-dark'><tr><th></th>";
	foreach($main_decode["users"] as $key=>$th){
		echo "<th class='h6'><b>".$th["name"]."</b></th>";
		
	}
	echo "</tr></thead>";
		foreach($main_decode["w-days"] as $key=>$days)
		{
			echo "<tr><td style='color:#f6932f;' class='h6'>$days</td>";
			foreach($main_decode['users'] as $name=>$value)
			{
				echo "<td><div class='form-group col-lg-35'><input type='text' value='".$main_decode["schedule"]["$name"]["$key"]."' id='".$name.'-'.$key."' onChange=schedule_update(this.id); class='form-control'></div> </td>";
			}
			echo "</tr>";
			
		}

	?>
		</table>
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
  function schedule_update(id){
	  
	  var value=document.getElementById(id).value;
		 
		  if(window.XMLHttpRequest)
		{
			obj=new XMLHttpRequest();
		}
		else
		{
			obj=new ActiveXObject('Microsoft.XMLHTTP');
		}
		obj.open("POST","schedule_update.php?id="+id+"&value="+value,true);
		obj.send();
		obj.onreadystatechange=function()
		{
		if(obj.readyState==4 && obj.status==200)
		{
		
		
		
			
		
			
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

input[type=text], select, textarea {
  width:85px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


</style>
</html>