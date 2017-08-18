

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

   


    <!-- Bootstrap Core CSS -->
    

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	

<?PHP
include'config.php';


            

$q = $_GET['q'];
$sql="SELECT * FROM studentrecord WHERE ID LIKE '%$q%' OR Name LIKE '%$q%' OR Department LIKE '%$q%' ORDER BY Department ";
$result = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);

echo"Found ".$rows." Records";
    if($rows > 0) {
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
        echo'</tbody>';
        echo ' </table>';
        echo '</div>';
        echo '</div>';	 //  Close the row
            
    } //End- If 
        mysqli_free_result($result);
     
  
  

?>