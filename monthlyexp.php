<!doctype html>
<html lang="en">
  <head>
  	<title> </title>
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
		  		<a href="#" class="img logo rounded-circle mb-5 logo_lit" style="background-image: url(images/);"></a>
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
                <li class="nav-item active">
                    <a class="nav-link" href="expenses_attributes.php">CATEGORY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="weekly_data.php">Weekly</a>
                </li>
				
              </ul>
            </div>
          </div>
        </nav>

         <div class="container col-sm-5 col-md-10 col-lg-8 mt-5 ">
    <div class="card card_box"  style='background-color:#fcfcfc'>
	<h6 style='text-align:center;padding:10px;color:#cc4d6c;font-weight: bold;'><a href="insert_data.php"> <img src='images/edit-exp.png' class='add' height='50px' width='50px;'></a>  </h6>
	 <form class="form-inline justify-content-center" style="padding:10px" >
            <label class="lead mr-2 ml-2" for="month"> Month</label>
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
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


            <label class="lead mr-2 ml-2" for="year">Year</label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
			<?php
			for($i=2018;$i<=3000;$i++)
				echo "<option value=$i>$i</option>"
			?>
            
								
        </select></form>
	
       <div class="form-inline justify-content-center" id='hdr_mth_yr'> 
		<img class="arrow-prev" src="images/prev.png" onclick="previous()">
	   <div class="w-75"><h3 class="card-header d-flex justify-content-center " id="monthAndYear"></h3></div>
	  <img class="arrow-next" src="images/next.png" onclick="next()">
       
	</div>
	   <table class="table table-responsive-sm " style='padding:10px;' id="calendar">
            <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            </thead>

            <tbody id="calendar-body">

            </tbody>
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

today = new Date();
currentMonth = today.getMonth();

currentYear = today.getFullYear();
selectYear = document.getElementById("year");
selectMonth = document.getElementById("month");

months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
colors_months=["#fb99bc","#fa85af","#f970a1","#f85c94","#f74887","#f7347a","#f7347a","#de2e6d","#c52961","#ac2455","#941f49","#7b1a3d"];
colors_mth_bg=["#feeaf1","#feeaf1","#feeaf1","#fdd6e4","#fdd6e4","#fdd6e4","#fcc2d7","#fcc2d7","#fcc2d7","#fbadc9","#fbadc9","#fbadc9"];

var monthAndYear = document.getElementById("monthAndYear");
			var exp_act_str=" ";
calculate_daily_exp();

showCalendar(currentMonth, currentYear);

function calculate_daily_exp(){
	
	
		  if(window.XMLHttpRequest)
		{
			obj3=new XMLHttpRequest();
		}
		else
		{
			obj3=new ActiveXObject('Microsoft.XMLHTTP');
		}
		obj3.open("POST","calculate_daily_exp.php",true);
		obj3.send();
		obj3.onreadystatechange=function()
		{
		if(obj3.readyState==4 && obj3.status==200)
		{

		//alert(obj3.responseText);
			
		
		}
		}
	
}
function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {

    let firstDay = (new Date(year, month)).getDay();

    tbl = document.getElementById("calendar-body"); // body of the calendar
	table_body=document.getElementById("calendar");
    // clearing all previous cells
    tbl.innerHTML = " ";
//table_body.style.backgroundColor=colors_mth_bg[month];
table_body.style.backgroundColor="#ffffff";
    // filing data about month and in the page via DOM.
    monthAndYear.innerHTML = months[month] + " " + year;
	monthAndYear.backgroundColor="white";
	hrd_mth_yr=document.getElementById("hdr_mth_yr");
	//hrd_mth_yr.style.backgroundColor=colors_months[month];
hrd_mth_yr.style.backgroundColor="white";
    selectYear.value = year;
    selectMonth.value = month;

	 
		
    // creating all cells
    let date = 1;
    for (let i = 0; i < 6; i++) {
        // creates a table row
        let row = document.createElement("tr");
		var flag=0;
        //creating individual cells, filing them up with data.
        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                cell = document.createElement("td");
                cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);
            }
            else if (date > daysInMonth(month, year)) {
				flag=1;
                break;
            }

            else {
				var val=" ";
                cell = document.createElement("td");
				mt=currentMonth+1;
				if(currentMonth<10)
					mt="0"+mt;
				if(date<10)
					val="0"+date+"-"+mt+"-"+currentYear;
				else
					val=date+"-"+mt+"-"+currentYear;
	
				var span=document.createElement("span");
				var div=document.createElement("div");
		
				cell.id=val;
				span.id=val+'span';
				cell.onmouseover=function(){day_details(this.id)};
				
				span.classList.add("tooltiptext");
				//span.innerHTML=val;
                cellText = document.createTextNode(date);
                if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.style.backgroundColor="#fcc44b";
                } // color today's date
                cell.appendChild(cellText);
				
				cell.appendChild(span);
				cell.classList.add("day_div");
				
				
				cell.setAttribute('onclick', 'dayclick(this.id);');
                row.appendChild(cell);
                date++;
            }


        }
		
        tbl.appendChild(row); // appending each row into calendar body.
    }

}



function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
}

function dayclick(id){
	day_id=document.getElementById(id);
	value=day_id.innerHTML;
	window.location.href="day_details.php?date="+id;
	
}
function day_details(id){
	

	if(window.XMLHttpRequest)
		{
			obj5=new XMLHttpRequest();
		}
		else
		{
			obj5=new ActiveXObject('Microsoft.XMLHTTP');
		}
		obj5.open("POST","get_act_data.php?val="+id,true);
		obj5.send();
		obj5.onreadystatechange=function()
		{
		if(obj5.readyState==4 && obj5.status==200)
		{
		rec=obj5.responseText;
		rec_arr=rec.split("-");
		exp_act_str="Exp:"+rec_arr[0]+"<br> Act:"+rec_arr[1];
		id_span=id+"span";
		//alert(exp_act_str);
		document.getElementById(id_span).innerHTML=rec;
		
			
		
		}
		}
	
}

</script>
<style>

body{

	background-color:#808080;
}
td{
	  border: 1px solid gray;
	  width:150px;
	  height:100px;
}

.day_div:hover{
	background-color:#fdad9b;
	
	
}

.arrow-next{
	height:50px;
}

.arrow-next:hover{
	opacity:0.5;
}
.arrow-next:active{
	opacity:1;
	
	transform: translateX(4px);
	
	
}



.arrow-prev{
	height:50px;
}

.arrow-prev:hover{
	opacity:0.5;
}
.arrow-prev:active{
	opacity:1;
	
	transform: translateX(-4px);
}

.a{
	display:inline;
	
}
.card_box{
	  box-shadow: 0 10px 8px 0 rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.5);
	
}

.logo_lit{
	
	box-shadow: 0 5px 8px 5px rgba(230, 230, 230, 5), 2px 2px 20px 5px rgba(230, 230, 230, 5);
	
}
.logo_lit:hover{
	
	box-shadow: 0 5px 8px 5px rgba(230, 230, 230, 8), 2px 2px 30px 5px rgba(230, 230, 230, 8);
	
}

.add{
	
	margin-left:15px;
}
.add:hover{
	opacity:0.5;
	cursor:pointer;
	
}

.tooltip {
 visibility:visible;
}
.tooltiptext {
  visibility: hidden;
  width: 300px;
  height:auto;
  margin-left:50px;
  margin-top:50px;
  background-color: #e5e5e5;
  color: black;
  font-weight:bold;
  text-align: center;
  border:1px solid black;

  padding: 10px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  

}

.day_div:hover .tooltiptext {
  visibility: visible;
  opacity:0.9;
}

</style>
</html>