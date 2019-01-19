<!DOCTYPE html>
<html>
<head>
	<title>She3lny IT</title>
	<link rel="stylesheet" type="text/css" href="mm.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
    session_start();
    if(!isset($_GET['firstName'])){
      //header("Location: login.php");
      //exit();
     $username= $_SESSION['firstName'];
    }
    //exit();

?>

<div class="list">
<ul class=ul>
  <li><a href="#"><?php echo "Hello ". $username; ?></a></li>
  <li><a href="box.php">Make a CV</a></li>
  <li><a href="m2.php">Information</a></li>
  <li><a href="about.php">About us</a></li>


</ul>

</div>
<section id="wrapper" class="skewed">
    <div class="layer bottom">
      <div class="content-wrap">
        <div class="shadow">
          <h1>She3lny IT</h1>
     
        </div>
      </div>
    </div>
  
    <div class="layer top">
        <div class="content-wrap">
          <div class="content-body">
          <h2> She3lny IT</h2>
          <p>Creating online job application forms is pretty easy at she3lny IT </br>Whether you're managing an employee information, Collecting resumes or applications, we have a form for recruitment to employment.</br>With fully customizable employment forms, it's easy to collect information and make an engaging form.</br> Just choose one of the online employment from templates here and watch your form receives all the applicant information as responses.</br>Your employment form can include additional fields like company branding and an upload button for resumes.</br>What do you waiting for, get start with one of our free online employment form templates now.</p>
        
          </div>
         
        </div>
      </div>

      <div class="handle"></div>
     
      <script src="mmm.js"></script>
      </section>
<div class="button">
  <a class="a" href="#">login</a>
</div>

      <footer class=footer>
<div class="container" >
<a  herf="https://www.facebook.com/profile.php?id=100028211864026"><i class="fa fa-facebook"></i> </a>
<a  herf="https://www.linkedin.com/in/sh3lny-it-02252316b/"><i class="fa fa-instagram" ></i> </a>
<a  herf="https://twitter.com/sh3lny"><i class="fa fa-twitter"></i> </a>

</div>

</footer>


<?php
  $servername= "localhost";
  $username= "root";
  $password= "";
  $dbname= "she3lnyit";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  if (isset($_POST['email'])) {

  $firstName= $_POST["firstName"];
  $lastName= $_POST["lastName"];
  $email= $_POST["email"];
  //$phoneNo= $_POST["phoneNo"];
  $password= $_POST["password"];
  $passwordConfirm= $_POST["passwordConfirm"];
  

  $sql= "INSERT INTO db (firstName, lastName, email, password, passwordConfirm)
  VALUES ('$firstName', '$lastName', '$email', '$password', '$passwordConfirm')";
  
  if ($conn->query($sql) === TRUE) {
    
  } else {
      
  }
  }

  $conn->close();


?>

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