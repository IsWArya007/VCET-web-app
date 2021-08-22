<!DOCTYPE html>
<html lang="en" dir='ltr'>
<head>

	<meta charset="utf-8">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}

 .button4 {background-color: #e7e7e7; color: black; border-radius:12px;} 	


</style>
<body style="color: AntiqueWhite; font-family: Italic" bgcolor="Black">
	<form method="post" action="trypdffile.php" enctype="multipart/form-data" target="_blank">
	 <h2 style="font-family: Italic; color:red"><center>VIEW STUDENTS DETAILS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></h2>
	 <div class="main">
    	<div class="register">
    		<form action="" method="POST">
    		<table  class="table table-dark">
    			<tr>
    				<th scope="col">Name</th>
    				<th scope="col">Department</th>
    				<th scope="col">Section</th>
					<th scope="col">Batch</th>
					<th scope="col">Email</th>
    				<th scope="col">CompanyName</th>
					<th scope="col">Type</th>
					<th scope="col">File</th>
					
    			</tr> <br>
			
    		</form></form>
			<?php
			
				if(isset($_POST["submit"]))
    			{
    			$link = mysqli_connect('localhost', 'root','', 'file-management');
 
                // Check connection
                if($link === false){
               die("ERROR: Could not connect. " . mysqli_connect_error());
               }
             

    			
    				$CompanyName=$_POST["company"];
 //echo $CompanyName;
    				$query1="SELECT fname,department, section ,batch ,email,company_name ,letter,name FROM files WHERE company_name='$CompanyName' ";
    				//$query_run=mysqli_query($link,$query);
//echo $query_run['fname']; 
$result = $link->query($query1);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
<tr>
                       	<td><?php echo $row['fname'];?></td>
                       	
                       	<td><?php echo $row['department'];?></td>
                       	<td><?php echo $row['section'];?></td>
                       	<td><?php echo $row['batch'];?></td>
                       	<td><?php echo $row['email'];?></td>
						<td><?php echo $row['company_name'];?></td>
						<td><?php echo $row['letter'];?></td>
						
						
						<td><?php echo $row['name']; ?></td>
                    <td><a href="uploads/<?php echo $row['name']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['name']; ?>" download>Download</td>
                       </tr>
					  
 <?php }
} else {
  echo "0 results";
}
				}
				

    				
    		
    		?>