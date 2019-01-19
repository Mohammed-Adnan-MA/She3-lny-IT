<!DOCTYPE html>
<html  >
<head>
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="login.css">

     <link href="https://fonts.googleapis.sscom/css?family=Indie+flower" rel="stylesheet">

</head>
<body>
     
	
        <style>
            
        *{margin:0; padding:0;}
        body{font-size: 20px;}
        .banner{position: relative ; width: 90% ; margin: 0 auto;}
       p6{font-size: 12px;color: rgba(0, 0, 0, 0.712);position: absolute;left:-1%;margin-top:54%;}

        .img1{position: absolute;left:14%;margin-top:52.5%;}
        .img2{position: absolute;left: 18%;margin-top:43%;}
        .btn-primary1{border-radius: 40px; text-align:center;color: white; position:absolute;left:37%;margin-top:40%;width:100px;height:40px;background: purple;padding:5px 10px;border: purple;}
        button:hover
    {

    background-color: purple;
    
    
    }

  </style>
 <form action="login.php" method="POST">

        <div class="loginbox">

      <div class="container">
            <div class="row">
  <div class="banner">
        
        <button type="submit" class="btn-primary1" name="submitButton">Login</button>
<img src="faceo.png" class="img1" width="80px"></img>
<img src="twit.png" class="img2" width="220px"></img>
<p6>Or login with</p6>
    </div>
</div>
</div>


    <h2 >Login</h2>
    <br></br>
    <br></br>


    

    <p> Don't have an account? <a href="signup.php">Create one</a></p>
    <div class="groub">
    <input type="email" class="form-control email" id="exampleInputEmail1" placeholder="Email" name="logEmail">
    </div>
    <div class="groub">
    <input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Password" name="logPass">
     </div>
  </form>


 <a href="#"></a>

</div>
<?php

  $servername= "localhost";
  $username= "root";
  $password= "";
  $dbname= "she3lnyit";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql= "SELECT email, password, id, firstName
   FROM db";
  
  $result= $conn->query($sql);

  $length= 0;
  if ($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        $length .=1;  
        $counter= $row['id'];
        if(isset($_POST['submitButton'])) {
            $row['email'] . ' ' . $row['password'];
         if ($_POST['logEmail'] == $row['email']){
           if ($_POST['logPass'] == $row['password']){
               $userMail= $_POST['logEmail'];
               $userPassword= $_POST['logPass'];
               $firstName= $row['firstName'];
               //echo ">>>" . $firstName;
               session_start();
               $_SESSION['firstName']= $firstName;
               $url= "muser.php";
               header('Location: ' . $url);
               exit();
           }
           else{
            echo "<html>";
            echo '<div class="createbox">';
            echo '<p class="aa">You have entered an invalid login!</p>';
            echo '</div>';    
            echo '<a id="pass" href="reset.php">Forgot password?</a>';
            break;
           }
         }
         
         elseif ($length == $counter){                    //To know the size of the colmns in mySql db and if the loop through it ends and never find the user info, return a red sign up popup.
                echo "<html>";
                echo '<div class="createbox">';
                echo '<p class="aa">You should sign up at first!</p>';
                echo '</div>';     
            }
         }
      }
  }
  else{
      echo "Nothing to show";
  }


    //TEST (not working)
  /*ini_set('SMTP', "smtp.gmail.com");
  ini_set('smtp_port', "465");
  ini_set('sendmail_from', "sh3lny.it@gmail.com");
  $msg= 'Hello Mohammed,\ How are you today?';
  $test= mail('muhmadreal400@yahoo.com','Hello There!',$msg);*/


  //$test1= $_POST['logPass'];
 // echo $test1;
$conn->close();
?>

</body>
</html>