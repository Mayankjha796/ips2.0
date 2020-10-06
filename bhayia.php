
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gatepass Details</title>
	<style>
	    @import url('https://fonts.googleapis.com/css?family=Roboto');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Roboto', sans-serif;
}

body{
  background: url('bg.jpg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 550px;
  background: rgba(0,0,0,0.8);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.wrapper .title h1{
  color: #309cca;
  text-align: center;
  margin-bottom: 25px;
}

.contact-form{
  display: flex;
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}

.input-fields,
.msg{
  width: 48%;
}

.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #c5ecfd;
  padding: 10px;
  color: #c5ecfd;
  width: 100%;
}

.msg textarea{
  height: 212px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #c5ecfd;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #c5ecfd;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #c5ecfd;
}

.btn {
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
}

@media screen and (max-width: 600px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
}
	</style>
	
</head>
<body>
	
<div class="wrapper">
  <div class="title">
    <h1>Gatepass</h1>
  </div>
  <div class="contact-form">
    <div class="input-fields">
        <form method="POST">
      <input type="text" class="input" placeholder="Name" required name="name">
      <input type="text" class="input" placeholder="Department" name="department">
      <input type="text" class="input" placeholder="Employe Id" name="eid">
      <input type="datetime-local" class="input" placeholder="Date & Time" name="date">
      <input type="text" class="input" placeholder="Location" name="location">
      <input type="text" class="input" placeholder="Purpose of leave" required name="pol">
      <input type="text" class="input" placeholder="Department head e-mail" required name="email">
    </div>
    <div class="msg">
      <h1 style="color: #c5ecfd; font-size: 20px; " >Cab Required<br><br>
      <input type="radio"  value="1" name="select">Yes<br><br>

      <input type="radio" value="1" name="select">No</h1><br>

      <h1 style="color: #c5ecfd; font-size: 20px; " >Leave<br><br>
        <input type="radio"  value="1" name="p">Personal<br><br>
        
        <input type="radio" value="1" name="p">Professional</h1><br>


      <div class="btn" >
          
      <button name="submit">submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $department=$_POST['department'];
     $eid=$_POST['eid'];
     $date=$_POST['date'];
     $location=$_POST['location'];
     
     $pol=$_POST['pol'];
     $email=$_POST['email'];
     $cab=$_POST['select'];
     $type=$_POST['p'];
     include("mechcon.php");
     $sql="INSERT INTO `gatepass`( `name`, `department`, `eid`, `date`, `location`, `purpose`, `email`, `cab`, `leavepurpose`) VALUES ('$name','$department','$eid','$date','$location','$pol','$email','$cab','$type')";
     $result=mysqli_query($con,$sql);
     if($result){
         $to = $email;
         $subject = "This is subject";
         
         $message = "<b>you are good to go</b>";
         
         
         $header = "From:mayankjha796@gmail.com \r\n";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "email sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
     }
     
 }
?>
	
</body>
</html>