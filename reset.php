<!DOCTYPE html>
<html  >
<head>
	<title> Password reset </title>
	<link rel="stylesheet" type="text/css" href="reset.css">

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
 <form action="reset.php" method="POST">

        <div class="loginbox">

      <div class="container">
            <div class="row">
  <div class="banner">
        <button type="submit" class="btn-primary1" name="submitButton">Submit</button>

    </div>
</div>
</div>


    <h2 >Reset Password</h2>
    <br></br>
    <br></br>


        <div class="groub">
    <input type="email" class="form-control email" id="exampleInputEmail1" placeholder="Email" name="logEmail" required="">
    </div>
  </form>

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

$sql= "SELECT email, password
 FROM db";

$result= $conn->query($sql);

if ($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      if(isset($_POST['submitButton'])) {
       $row['email'] . ' ' . $row['password'];
       if ($_POST['logEmail'] == $row['email']){
             echo "Success!";  
             $userMail= $_POST['logEmail'];
             $userPassword= $row['password'];
             echo "<html>";
             echo '<div class="createbox">';
             echo '<p class="aa">The message has been sent to your email</p>';
             echo '</div>';    
             header('m.php');        
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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submitButton'])){
  submitButton($userMail, $userPassword);
}
function submitButton($userMail, $userPassword){

  require 'PHPMailer.php';
  require 'SMTP.php';
  require 'Exception.php';

  //Create a new PHPMailer instance
  $mail = new PHPMailer;
  try {
      //Server settings
      $mail->SMTPDebug = 1;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';                   // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'sh3lny.it@gmail.com';                 // SMTP username
      $mail->Password = 'amsmsiah97';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to
      //Recipients
      $mail->setFrom('sh3lny.it@gmail.com', 'Password Reset');
      $mail->addAddress($userMail);     // Add a recipient
      //$mail->addAddress('contact@example.com');               // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      //$mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'This message sent from She3lny IT';
      $mail->Body  = 'Hello '. $userMail . ', How are you today? Hope you are doing well';
      $mail->Body .= ("\n");
      $mail->Body .= 'Here is your password: ' . $userPassword;
      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      header("location: m.php");

  } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
}



//$test1= $_POST['logPass'];
// echo $test1;

$conn->close();
?>

</body>
</html>