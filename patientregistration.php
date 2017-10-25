<?php
		$id= $_POST['txt1'];
		$name= $_POST['txt2'];
		$gender= $_POST['txt3'];
		$age= $_POST['txt4'];
		$phone= $_POST['txt5'];
		$disease= $_POST['txt6'];
		$con=mysql_connect("localhost","root","admin");
		if (!$con)
		{
          die("Connection failed: ".mysql_connect_error());
        }
         mysql_select_db("mydb2",$con);
		 mysql_query("INSERT INTO patient VALUES ('$id','$name','$gender','$age','$phone','$disease')");
		 echo "<script type='text/javascript'>alert('Records Updated Successfully!')</script>";
        ?>