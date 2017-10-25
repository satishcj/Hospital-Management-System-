<html>
    <head>
        <title>Staff Information</title>
		<style>
.center {
   margin-top: 50px;
    margin-left: 420px;
    margin-right: 200px;
    width: 31%;
    border: 3px solid #00a3e8;
    padding: 25px;
    text-align: center;
}
</style>
    </head>
    <body>
        <img src="Hospitaltitle.jpg" width="1348" height="150">
		<br>
		<br>
		<a href="http://localhost:1234/www/hospitalmainpage.html">Back</a>
		<div class="center">
		<?php
		$con=mysql_connect("localhost","root","admin");
		if (!$con)
		{
          die("Connection failed: ".mysql_connect_error());
        }
         mysql_select_db("mydb2",$con);
		 $sql=mysql_query("SELECT * FROM staff");
		 $result=mysql_fetch_array($sql);
		 $select=mysql_query("SELECT * FROM staff");
		 echo "<table border=’1’>";
		 echo"<tr><th>Staff ID</th><th>Staff Name</th><th>Gender</th><th>Position</th><th>Salary</th><th>Phone</th></tr>";
		 while($row=mysql_fetch_array($select))
		 {
				echo "<tr>";
			    echo "<td>" ;
				echo $row['ID'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['name'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['gender'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['position'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['salary'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['phone'];
				echo "</td>";
				echo "</tr>";
		 }
			echo "</table>";
		 ?>
		 </div>
		 </body>
		 </html>