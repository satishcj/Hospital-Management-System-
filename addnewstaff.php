<?php
		$id= $_POST['txt1'];
		$name= $_POST['txt2'];
		$gender= $_POST['txt3'];
		$position= $_POST['txt4'];
		$salary= $_POST['txt5'];
		$phone= $_POST['txt6'];
		$con=mysql_connect("localhost","root","admin");
		if (!$con)
		{
          die("Connection failed: ".mysql_connect_error());
        }
         mysql_select_db("mydb2",$con);
		 mysql_query("INSERT INTO staff VALUES ('$id','$name','$gender','$position','$salary','$phone')");
		 echo "<script type='text/javascript'>alert('Records Updated Successfully!')</script>";
        ?>