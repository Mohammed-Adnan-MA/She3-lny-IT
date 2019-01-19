<!DOCTYPE html>
<html   lang="en">
<head>
	<title>Signup</title>

	<link rel="stylesheet" type="text/css" href="sign.css">

     <link href="https://fonts.googleapis.sscom/css?family=Indie+flower" rel="stylesheet">

</head>

<body>

       <div class="createbox">
  <form action="signup.php" method="POST">
    <h2> Create a new account </h2>
    <div class="header"></div>
    
    <p class="aa"> First Name </p>
    <input type="text" name="firstName" placeholder="Enter your first name">
    
    <p class="aa"> Last Name </p>
    <input type="text" name="lastName" placeholder="Enter your last name">

    <p class="aa"> Email </p>
    <input type="text" name="email" placeholder="Enter your email">

    <p class="aa"> Phone Number </p>
    <input type="text" name="phoneNo" placeholder="Enter your phone number">

    <p class="aa"> Password </p>
    <input type="password" name="password" placeholder="Enter your password">
 
    <p class="aa"> password Confirmation </p>
    <input type="password" name="passwordConfirm" placeholder="Enter your password">
    </br></br>
    <input type="submit" name="" value="sign up">
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
  session_start();
  $_SESSION['firstName']= $firstName;
  $url= "muser.php";
  header('Location: ' . $url);
  exit();
  }



  $conn->close();


?>
</body>
</html>
