<!doctype html>
<html lang="en">
  <head>
  	<title>ADD CATEGORY -  </title>
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
		  		<a href="#" class="img logo rounded-circle mb-5 logo_lit" style="background-image: url(images/logo.png);"></a>
				<h4 style='text-align:center;color:white;font-family:georgia;font-weight:bold'> </h4>
	        <ul class="list-unstyled components mb-5">
	          <li>
	              <a href="schedule.php">Schedule</a>
	          </li>
	          <li >
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
	          <li class='active'>
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
	
           <div class="container col-sm-5 col-md-10 col-lg-8 mt-5 ">
		   
    <div class="card card_box"  style='background-color:#fcfcfc'>
	<form id='cat_form' method='POST' action='expenses_attributes.php'>
		<table class='table table-hover' id='users-table'>
	<?php
	
		$update_only_str=file_get_contents('main.json');
		$main_decode=json_decode($update_only_str,true);
		echo "<thead thead class='thead-dark'><tr>";
		echo "<th>CATEGORY <span><img src='images/cat_add.png' class='add' width='50px' heigh='50px' onClick='add_cat()'></span> <span><button class='btn btn-success' style='margin-left:10px;' onClick='update_cat()'>Save</button></span></th>";
		echo "</tr></thead>";
		foreach($main_decode["expenses"] as $key=>$cat)
		{
			echo "<tr>
			
			<td><input type='text' value='$cat' class='form-control' name='$key'></td>
			
			
			</tr>";
			
		}
		
		if(isset($_POST['0']))
		{
			//print_r($_POST);
			$i=0;
			foreach($_POST as $key=>$value)
			{
				
				//echo $token[1];
				
				//echo $value;
				//print_r($_POST);
				if($value=="")
				{
					unset($main_decode['expenses'][$i]);
				$i++;
				continue;
				}
				$main_decode['expenses'][$i]=$value;
				$i++;
				//echo "<tr><td>$key</td><td>$value</td></tr>";
			}
			//print_r($main_decode['expenses']);
			//print_r($main_decode);
			$jsonData = json_encode($main_decode);
			file_put_contents('main.json', $jsonData);
			echo "<div class='alert alert-success' id='alert_box' role='alert'>
			Chategory Data Updated Successfully!!
			</div>";

		}

	?>
		</table>
		</form>
	</div>
	</div>
	  
	  </div>
		</div>
<?php


?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  <script>
  function add_cat(){
	  
	  cat_form=document.getElementById('cat_form');
	  input_tag=document.createElement('input');
	  input_tag.classList.add("form-control");
	  att=document.createAttribute('name');
	  att.value=cat_form.elements.length+1;
	  input_tag.setAttributeNode(att);
	users_table=document.getElementById('users-table');
	
	
	
	 users_table.appendChild( document.createElement('tr').appendChild(document.createElement('td').appendChild(input_tag)));
	  

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

</style>
</html>