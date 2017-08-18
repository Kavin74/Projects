<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Records</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        
       

<style> 
input[type=text] {
    width: 150px;
    height:45px;
    margin-top:60px;
    margin-bottom:20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 20px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 80%;
}
.div1 {
    width: 300px;
    height: 100px;
    border: 1px solid blue;
}

#btnfilter {
    font-size: 16px;
    font-weight: bold;
    font-family: sans-serif;
}

.left-inner-addon i {
    position: absolute;
    padding: 10px 12px;
    pointer-events: none;
}

</style>


<script>

   function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

//AJAX SEARCH
function showUser(str) {
    if (str == "") {
        document.getElementById("result").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","search.php?q="+str,true);
        xmlhttp.send();
    }
}



</script>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.easing.min.js"></script>	
 <script src="js/jquery.scrollTo.js"></script>
 <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
 <script src="js/custom.js"></script>
    
</head>

<body data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1 style="text-align: center">STUDENT RECORD DATABASE</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
   

	

	<!-- Section: contact -->
        <section id="home">
    <div class="row"> 
        <div class="col-md-12">
            
            
                <div class="col-md-2">
                        <div class="form-group" style="margin-top:64px;">
                            
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Search By...</option>
                                <option value="NAME">Name</option>
                                <option value="REG_NO">Register No.</option>
                            </select>
                        </div>
                </div>
                <div class="col-md-10">

                    <form name="form1">
                    <div class="form-group">
                    <div class='container-fluid'>
                        <input type="text" name="search" placeholder="Search.." onkeyup="showUser(this.value);" />

        
                    </div>
                    </div>
                    </form>
                </div>



            </div>
    </div>        
</section>      
    
    
     <div class="row">
        <div class="container-fluid ">
            <div class="col-md-2">
                <button class="btn btn-success btn-md btn-block" id="btnfilter" onclick="myFunction();">Filter</button>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        
            <div class="col-md-12">
                <div class="panel panel-default" id="myDIV" style="display: none">
                    <div class="panel-body" >
                        <form name="form2" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                           
                          <div class="col-md-4">
                            <h5 style="margin-bottom:1px ">Department</h5>
                            <input type="checkbox" name="Dept[]" value="CSE">Computer Science<br>
                            <input type="checkbox" name="Dept[]" value="CIVIL" >Civil<br>
                            <input type="checkbox" name="Dept[]" value="ECE">Electronic communication<br>
                            <input type="checkbox" name="Dept[]" value="EEE" >Electrical &AMP; Electronics<br>
                            <input type="checkbox" name="Dept[]" value="MECH" >Mechanical<br>
                            <input type="checkbox" name="Dept[]" value="MECHAT" >Mechatronics<br>
                           </div>
                           <div class="col-md-3">
                              <h5 style="margin-bottom:1px ">Percentage(%)</h5>
                              <input type="radio" name="percent" value="60"> (60% and above)<br>
                              <input type="radio" name="percent" value="65"> (65% and above)<br>
                                <input type="radio" name="percent" value="70"> (70% and above) <br>
                                <input type="radio" name="percent" value="75"> (75% and above)<br>
                                <input type="radio" name="percent" value="80"> (80% and above)
                            
                           </div>
                           <div class="col-md-2">
                               
                               <button class="btn btn-success btn-md btn-block" name="btnsearch" id="btnsearch" type="submit">Search</button>
                           </div>   
                           
                           
                        </form>
                     
                </div>
            </div>
        </div>
    </div>
    </div>
    	<!-- /Section: contact -->

       <div class="row" style="margin-top: 2em; margin-bottom: 2em;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Student Results
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                
                            </div>    
                                <div id="result">
                                    <?php
    require 'config.php';
    if(isset($_POST["btnsearch"])){
        if(!empty(($_POST['Dept']))){
            $count =  count($_POST['Dept']);
            
              $tablerow=0;
            foreach($_POST['Dept'] as $dept){
               $sql="SELECT * FROM studentrecord WHERE Department = '$dept'";
                   
                   
        $result = mysqli_query($conn,$sql);
        $rec=0;
        $rows = mysqli_num_rows($result);
        $rec=$rows+$rec;
        
        if($rows > 0) {
            if($tablerow==0){
	echo '<div class="row">';	// Start a new row
            
            echo'<div class="col-sm-12">';
            echo '<table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">';
            echo '<thead>';
            
            echo'<tr role="row">';
            echo ' <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 200px;">Name</th>';
            echo ' <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 190px;">Register No.</th>';
            echo '<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 140px;">Department</th>';
            echo ' <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 110px;">Year</th>             ';      
            echo '<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 108px;">Percent</th>';
            echo ' <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 108px;">History of Arrears</th>';
            echo ' <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 108px;">No. of Arrears</th>';
            echo ' </tr>';
            echo '</thead>';
            echo ' <tbody>';
             $tablerow+=1;
            }
          
        while ($item = mysqli_fetch_array($result)){
	      // Check if it's new row
            
            echo ' <tr class="gradeA odd" role="row">';
            echo'<td class="sorting_1">'.$item['Name'].'</td>';
            echo '<td>'.$item['ID'].'</td>';
            echo '<td>'.$item['Department'].'</td>';
            echo '<td>'.$item['Year'].'</td>';
            echo '<td>'.$item['Percent'].'</td>';
            echo '<td>'.$item['HOA'].'</td>';
            echo '<td>'.$item['NOA'].'</td></tr>';
        } // End-while
        	 //  Close the row
            
        }
        mysqli_free_result($result);
    }
    echo'</tbody>';
        echo ' </table>';
        echo '</div>';
        echo '</div>';
        }
        echo "     ".$rec."   Records Found";
    }
?>
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Student Records will be displayed here.....</div>
                                            
                                    </div>
                                </div>    
                                 
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
        </div> <!--/. row -->
            
        <div class="row">
            
        </div>
        
        
      
	<footer  style="margin-top: 125px ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					
                   
				</div>
			</div>	
		</div>
	</footer>
        
   

</body>
</html>




