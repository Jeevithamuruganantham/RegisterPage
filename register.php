<style>
*{
    margin:5px;
    padding:5px;
    
}

.container{
   margin: 100px 400px;
   font-family:georgia;
   border: 3px solid #495867;
   
}
.header{
   color: brown;
   text-transform: uppercase;
   text-align:center;
}
.middle{
   font-size: 20px;
}
.middle input{
   padding: 8px 100px;
   
}
.rad{
    font-size:13px
}
.rad label{
    font-size:20px;
}
.but input{
    font-size:15px;
    margin-left:100px;
    background-color:brown;
    color:white;
    border:0px;
    font-family:georgia

}
.but input:hover, select:hover {
  border-color: transparent;
  box-shadow: 0 0 0 2px #52796f;
  background-color:#52796f;
}
.footer{
    text-align:center;
}


</style>

<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Register form</h1>
        </div>

        <form  action="" name="form" method="post"  onSubmit="return checkvalid()" >


        <div class="middle">
            <label>First Name</label><br>
            <input type="text" name="Name" placeholder="First name" value="<?php echo set_value('Name' ,$this->input->post('Name')); ?>"><br><br>
            <label>Last Name</label><br>
            <input type="text" name="name" placeholder="Last Name" value="<?php echo set_value('name',$this->input->post('name'));?>"><br><br>
            <div class="rad">
                <label>Gender</label><br>
                <input type="radio" name="gender" value="Male"<?php if($row['gender'] == 'Male') { echo "checked=checked"; }?>/>Male<br>
                <input type="radio" name="gender" value="Female"<?php if($row['gender']=='Female') {echo "checked-checked";}?>/>Female<br>
                <input type="radio" name="gender" value="Other"<?php if($row['gender']=='Other'){echo"checked-checked";} ?>/>Other<br>
            </div><br>
            <label>Country</label>
            <select name="Country">
                <option value="country" <?php if($nom["Country"]=="Country"){echo "selected-selected";}?> >Country</option>
                <option value="India" <?php if($nom["Country"]=="India"){echo "selected-selected";}?>>India</option>
                <option value="Australia" <?php if($nom["Country"]=="Australia"){echo "selected-selected";}?>>Australia</option>
                <option value="Malaysia" <?php if($nom["Country"]=="Malaysia"){echo "selected-selected";}?>>Malaysia</option>
            </select><br><br>
            <label>Email</label><br>
            <input type="text" name="email" placeholder="email" value="<?php echo set_value('email',$this->input->post('email'));?>"><br><br>
            <label>Password</label><br>
            <input type="password" name="Password" placeholder="Password" value="<?php echo set_value('Password',$this->input->post('Password'));?>"><br><br>
            <div class="but">
                <input type="submit" name="submit" value="submit">
            </div>
        </div>
        </form>
        <div class="footer">
            <p>Already have an account? <a href="#">Sign in</a></p>
        </div>
    </div>
</body>

<script type='text/javascript'>                

function validateEmail(elementValue){
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	return emailPattern.test(elementValue);
}



function checkvalid()
{
  
  var formValue = document.form;
	
 if (formValue.Name.value=="") 
	 {
  alert('Enter the First Name');
  formValue.Name.focus();
  return false;
  } 
  if (formValue.name.value=="") 
	 {
  alert('Enter the Last Name');
  formValue.name.focus();
  return false;
  } 	
		
  if (formValue.email.value=="") 
	 {
  alert('Enter the Email Name');
  formValue.email.focus();
  return false;
  } 
  var validate_email_id = validateEmail(formValue.email.value);
	
	if(validate_email_id == false) 
	{
		alert("Enter Valid Email address");
		formValue.email.focus();
		formValue.email.value = "";
		return false;
	}
  		
  if (formValue.Password.value=="") 
	 {
  alert('Enter the Password Name');
  formValue.Password.focus();
  return false;
  } 	
  if (formValue.gender.value=="")
  {
    alert('enter the gender');
    formValue.gender.focus();
    return false;
  }
	
 
	
	
}

</script>
</html>