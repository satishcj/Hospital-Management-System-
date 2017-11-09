
<?php 
    include_once 'include/class.user.php';
    $user1 = new User();
 /*
    if (!$user1->get_session()){
      header("location:login.php");
    }*/
	
    if (isset($_POST['submit']))
	{
        extract($_POST);
        $patregister= $user1->pat_reg($dn,$phn,$pid, $pj, $pn, $pt,$pd);
        if ($patregister) {
            // Registration Success
            echo "<div style='text-align:center'>Registration successful <a href='index.php'>Click here</a> to login</div>";
        } else {
            // Registration Failed
            echo "<div style='text-align:center'>Registration failed. Username already exits please try again.</div>";
        }
    }
    if (isset($_GET['q'])){
        $user1->user_logout();
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<style>
form {
    border: 4px solid #f1e2f1;
}

input[type=text], input[type=password] {
    
    padding: 10px 15px;
    width : 50%
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 30px) {
    span.psw {
       display: bloc;
       float: none;
    }
}
</style>
<body>

<h1>PATIENT REGISTRATION FORM</h1>

<form action="" method="post">
 

  <div class="container">
    <label><b>Doctors name</b></label>
    <input type="text" placeholder="Enter Doctors name" name="dn" required>
    <br></br>
	
	<label><b>Pharmacist's name</b></label>
    <input type="text" placeholder="Enter Pharmacist name" name="phn" required>
    <br></br>
	
	<label><b>PatientID</b></label>
    <input type="text" placeholder="Enter PatientID" name="pid" required>
    <br></br>
	
	 <label><b>Patient joining date</b></label>
    <input type="text" placeholder="Enter Patient joining date" name="pj" required>
    <br></br>
	
    
    <label><b>Patient name</b></label>
    <input type="text" placeholder="Enter Patient name" name="pn" required>
    <br></br>
          <label><b>Patient treatment</b></label>
    <input type="text" placeholder="Enter Patient treatment" name="pt" required>
     <br></br>
	 
        
    <label><b>Patient drug</b></label>
    <input type="text" placeholder="Enter drug name" name="pd" required><br></br>
    
       <button type="submit" name="submit" onclick="return(submitreg())">SUBMIT</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>
<script>
      function submitreg() 
	  {
        var form = document.reg;
        if (form.dn.value == "") 
		{
          alert("Enter name.");
          return false;
        } else if (form.phn.value == "")
		{
          alert("Enter pharmasist name.");
          return false;
        } else if (form.pid.value == "") 
		{
          alert("Enter patient id:.");
          return false;
        } else if (form.pj.value == "") 
		{
          alert("Enter Join date:.");
          return false;
        }else if (form.pn.value == "")
		{
          alert("Enter Patient name.");
          return false;
		}
      }
    </script>
</body>
</html>
