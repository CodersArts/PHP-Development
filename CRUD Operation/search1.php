<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
	<meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
	<title>Search  Contacts</title> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<style type="text/css">
		.wrapper{
            width: 650px;
            margin: 0 auto;
			margin-top:50px;
        }
       p {
		   font-size:20px;
	   }
    </style>
</head> 
<body> 
	<div class="wrapper">
	<?php 
		if(isset($_POST['submit'])){ 
			if(isset($_GET['go'])){ 
				if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
					$name=$_POST['name']; 
					//connect  to the database 
					$db=mysql_connect  ("localhost", "root", "Naveen@4223") or die ('I cannot connect to the database  because: ' . mysql_error()); 
					//-select  the database to use 
					$mydb=mysql_select_db("student"); 
					//-query  the database table 
					$sql="SELECT  id, name, address, marks FROM student_record WHERE name LIKE '%".$name."%' OR address LIKE '%" . $name ."%'"; 
					//-run  the query against the mysql query function 
					$result=mysql_query($sql); 
					//-create  while loop and loop through result set 
					if(mysql_num_rows($result) > 0){
						while($row=mysql_fetch_array($result)){ 
							$Id =$row['id']; 
							$Name =$row['name']; 
							$Address=$row['address'];
							$Marks=$row['marks'];
							//-display the result of the array 
							echo "<table class='table table-bordered table-striped table-hover '>";
								echo "<thead>";
									echo "<tr>";
										echo "<th>#</th>";
										echo "<th>Name</th>";
										echo "<th>Address</th>";
										echo "<th>Marks</th>";
									echo "</tr>";
								echo "</thead>";
								echo "<tbody>";
									echo "<tr>";
										echo "<td>" . $row['id'] . "</td>";
										echo "<td>" . $row['name'] . "</td>";
										echo "<td>" . $row['address'] . "</td>";
										echo "<td>" . $row['marks'] . "</td>";
									echo "</tr>";
								echo "</tbody>";                            
							echo "</table>";
							echo "<p><a href='index.php' class='btn btn-primary'>Back</a></p>";
						} 
					} else {
						echo "<p>No matches found</p>";
						echo "<p><a href='index.php' class='btn btn-primary'>Back</a></p>";
					}
				} else { 
					echo  "<p>Please enter a search query</p>"; 
					echo "<p><a href='index.php' class='btn btn-primary'>Back</a></p>";
				} 
			} 
		} 
	?> 
	</div>
</body> 
</html> 
