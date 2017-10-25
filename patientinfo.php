<html>
    <head>
        <title>Patient Registration</title>
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
		 $sql=mysql_query("SELECT * FROM patient");
		 $result=mysql_fetch_array($sql);
		 $select=mysql_query("SELECT * FROM patient");
		 echo "<table border=’1’>";
		 echo"<tr><th>Patient ID</th><th>Patient Name</th><th>Gender</th><th>Age</th><th>Contact No</th><th>Disease</th></tr>";
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
				echo $row['age'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['phone'];
				echo "</td>";
			    echo "<td>" ;
				echo $row['disease'];
				echo "</td>";
				echo "</tr>";
		 }
			echo "</table>";
		 ?>
		 </div>
		 </body>
		 </html>
		 