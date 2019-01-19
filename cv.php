<!DOCTYPE html>
<html  >
<head>
	<title> cv </title>
	<link rel="stylesheet" type="text/css" href="bravo.css">

     <link href="https://fonts.googleapis.sscom/css?family=Indie+flower" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
  
<?php
$test="Test";

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "she3lnyit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['name'])) {
$name= $_POST["name"];
$phone= $_POST["phone"];
$email= $_POST["mail"];
$loc= $_POST["loc"];
$col= $_POST["col"];
$we= $_POST["we"];
$hob= $_POST["hob"];
$sum= $_POST["sum"];
$fm= $_POST["fm"];
$pic= $_POST['pic'];

 //Test
//echo $name, $phone, $email, $loc, $col, $we, $hob, $sum, $fm;

$sqli= "INSERT INTO cv (name, phone, email, loc, col, we, hob, sum, fm, pic)
VALUES ('$name', '$phone', '$email', '$loc', '$col', '$we', '$hob', '$sum', '$fm', '$pic')";


if ($conn->query($sqli) === TRUE) {
  
} else {
    
}
}

 //Create a pdf file from zero using fpdf class
//require("fpdf/fpdf.php");
//$pdf= new FPDF();
//$pdf->AddPage();
//$odf->setFont("Arial","B",16);
//$pdf->cell("","","Welcome",1,1,"C");
//$pdf->output();

 //Render an HTML page into a PDF file using dompdf class
/* require_once 'dompdf/autoload.inc.php';
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
use Dompdf\Dompdf;

$document = new Dompdf();
$html='

<style>
            
*{margin:0; padding:0;}
body{font-size: 20px;background-color: #949494;}
.banner{position: relative ; width: 90% ; margin: 0 auto;}
.img3{display: block;margin-left: auto;margin-right:auto}
.img2{position: absolute;margin-left: 310px;margin-top: -860px; }
.img4{position: absolute;margin-left: 785px;margin-top: -820px; }
.img5{position: absolute;margin-left: 785px;margin-top: -774px; }
.img6{position: absolute;margin-left: 785px;margin-top: -795px;}
p6{font-size: 12px;color: rgba(0, 0, 0, 0.712);position: absolute;left:-1%;margin-top:54%;}

p
{

width:800px;
font-size: 20px;
margin: 0px;
 margin-top: -850px;
 margin-left: 550px;

}

p1{

width:100%;

font-size: 10px;
 margin-top: -850px;
 margin-left: 800px;

border: 1 px solid #4caf50

}
p2
{


font-size: 10px;
margin-top: -850px;
margin-left: 800px;

}
p3
{
font-size: 10px;
margin-top: -850px;
margin-left: 800px;
}

p4
{
position: absolute;
font-size: 10px;
margin-top:-40px;
 margin-left: -300px;




}
p5
{
width:10px;
position: absolute;
font-size: 10px;
margin-top:100px;
 margin-left: -300px;
 font-weight: bold;


}
p25
{
width:10px;
position: absolute;
font-size: 10px;
margin-top:405px;
 margin-left: -300px;
 font-weight: bold;


}

p9
{
width:10px;
position: absolute;
font-size: 10px;
margin-top:80px;
 margin-left: -295px;
 color: #a4a4a6;
}
p7
{
width:300px;
position: absolute;
font-size: 20px;
margin-top:500px;
 margin-left: -500px;
 color: #a4a4a6;
 font-weight: bold;
}
p8
{
width:10px;
position: absolute;
font-size: 20px;
margin-top:160px;
 margin-left: -500px;
 color: #a4a4a6;
 font-weight: bold;
}
p10
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:140px;
 margin-left:-300px;
 font-weight: bold;

}


p11
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:140px;
 margin-left:-220px;

}
P12
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:180px;
 margin-left:-300px;
 font-weight: bold;

}
P13
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:180px;
 margin-left:-220px;

}
P14
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:220px;
font-weight: bold;
 margin-left:-300px;

}
P15
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:220px;
 margin-left:-220px;

}
p16
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:480px;
 margin-left:-250px;
}
p17
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:480px;
 margin-left:-150px;
}
p18
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:420px;
 margin-left:-250px;
}
p19
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:420px;
 margin-left:-150px;

}
p20
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:600px;
 margin-left:-150px; 
}

p21
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:700px;
 margin-left:-500px; 
 color: #a4a4a6;
}
p22
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:600px;
 margin-left:-500px; 
 color: #a4a4a6;
}
p23
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:650px;
 margin-left:-500px; 
 color: #a4a4a6;
}

p24
{
width:300px;
position: absolute;
font-size: 10px;
margin-top:550px;
 margin-left:-500px; 
 color: #a4a4a6;
}
p26
{
width:100px;
position: absolute;
font-size: 10px;
margin-top:200px;
 margin-left:-500px; 
 color: #a4a4a6;


}
p27
{
width:10px;
position: absolute;
font-size: 10px;
margin-top:535px;
 margin-left: -300px;
 font-weight: bold;

}











body {

border: #000;
margin: 0;
padding: 0;

background-color:#adadad;


}







.btn-primary1{border-radius: 40px; text-align:center;color: white; position:absolute;left:37%;margin-top:40%;width:100px;height:40px;background: purple;padding:5px 10px;border: purple;}
button:hover
{

background-color: purple;


}



</style>
<div class="loginbox">

<div class="container">
    <div class="row">

<div class="banner">


<img src="faoo.png"  class="img3" width="600px"></img>
<img src=<?php echo $pic; ?>   class="img2" width="200px"></img>
<img src="phone.png"   class="img4" width="10px"></img>
<img src="location.png"   class="img5" width="10px"></img>
<img src="email.png"   class="img6" width="10px"></img>

<p><?php echo $name; ?></p>
<p1><?php echo $phone; ?></p1>
<p2><?php echo $email; ?></p2>
<p3><?php echo $loc; ?></p3>
<!-- <p4>INFORMATION ENGINEERING</p4> -->
<p5><?php echo $we; ?></p5>
<p25><?php echo $col; ?></p25>
<p7><?php echo $fm; ?></p7>
<p8><?php echo $sum; ?></p8>
<!-- <p10>Fab 2018       </p10>
<p11>lead designer at x studio</p11>
<p12>Jan 2017</p12>
<p13>GRAFIC & WEB DESIGNER AT TUQA COMPANY </p13>
<p14>Apr 2016</p14>
<p15>AFIC & WEB DESIGNER AT EARTHLINK COMPANY</p15>
<p16>2010-2014</p16>
<p17>information ENGINEERING at nahrain university</p17>
<p18>2015-2017</p18>
<p19>master at technology university</p19>-->
<p20><?php echo $hob; ?></p20>
<!--<p21>Behance</p21>
<p22>Linkdine</p22>
<p23>Facebook</p23>
<p24>Instagrem</p24>
<p26>Provide administrative support to the VP of Worldwide Sales and the Directors of Marketing and Global Operations, managing schedules/calendars and overseeing event logistics. </p26>
<p27>Hobbies</p27>-->


</div>
</div>


</div>

<br></br>
<br></br>
';

$document->loadHtml('<h1>Hello</h1>');
$document->setPaper('A4','landscape');
$document->render();
$document->stream('CV');*/
$conn->close();


?>        
        
        
        
        
        
        
	
        <style>
            
        *{margin:0; padding:0;}
        body{font-size: 20px;background-color: #949494;}
        .banner{position: relative ; width: 90% ; margin: 0 auto;}
        .img3{display: block;margin-left: auto;margin-right:auto}
       .img2{position: absolute;margin-left: 310px;margin-top: -860px; }
       .img4{position: absolute;margin-left: 785px;margin-top: -820px; }
       .img5{position: absolute;margin-left: 785px;margin-top: -774px; }
       .img6{position: absolute;margin-left: 785px;margin-top: -795px;}
       p6{font-size: 12px;color: rgba(0, 0, 0, 0.712);position: absolute;left:-1%;margin-top:54%;}
    
p
{

  width:800px;
 font-size: 20px;
margin: 0px;
         margin-top: -850px;
         margin-left: 550px;

}

p1{

  width:100%;

font-size: 10px;
         margin-top: -850px;
         margin-left: 800px;

border: 1 px solid #4caf50

}
p2
{
 
 
font-size: 10px;
 margin-top: -850px;
 margin-left: 800px;

}
p3
{
  font-size: 10px;
 margin-top: -850px;
 margin-left: 800px;
}

p4
{
position: absolute;
font-size: 10px;
margin-top:-40px;
         margin-left: -300px;




}
p5
{
  width:10px;
  position: absolute;
font-size: 10px;
margin-top:100px;
         margin-left: -300px;
         font-weight: bold;


}
p25
{
  width:10px;
  position: absolute;
font-size: 10px;
margin-top:405px;
         margin-left: -300px;
         font-weight: bold;


}

p9
{
  width:10px;
  position: absolute;
font-size: 10px;
margin-top:80px;
         margin-left: -295px;
         color: #a4a4a6;
}
p7
{
  width:300px;
  position: absolute;
font-size: 20px;
margin-top:500px;
         margin-left: -500px;
         color: #a4a4a6;
         font-weight: bold;
}
p8
{
  width:10px;
position: absolute;
font-size: 20px;
margin-top:160px;
         margin-left: -500px;
         color: #a4a4a6;
         font-weight: bold;
}
p10
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:140px;
         margin-left:-300px;
         font-weight: bold;
      
}


p11
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:140px;
         margin-left:-220px;
      
}
P12
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:180px;
         margin-left:-300px;
         font-weight: bold;
      
}
P13
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:180px;
         margin-left:-220px;
      
}
P14
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:220px;
font-weight: bold;
         margin-left:-300px;
      
}
P15
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:220px;
         margin-left:-220px;
      
}
p16
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:480px;
         margin-left:-250px;
}
p17
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:480px;
         margin-left:-150px;
}
p18
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:420px;
         margin-left:-250px;
}
p19
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:420px;
         margin-left:-150px;

}
p20
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:600px;
         margin-left:-150px; 
}

p21
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:700px;
         margin-left:-500px; 
         color: #a4a4a6;
}
p22
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:600px;
         margin-left:-500px; 
         color: #a4a4a6;
}
p23
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:650px;
         margin-left:-500px; 
         color: #a4a4a6;
}

p24
{
  width:300px;
position: absolute;
font-size: 10px;
margin-top:550px;
         margin-left:-500px; 
         color: #a4a4a6;
}
p26
{
  width:100px;
position: absolute;
font-size: 10px;
margin-top:200px;
         margin-left:-500px; 
         color: #a4a4a6;

  
}
p27
{
  width:10px;
  position: absolute;
font-size: 10px;
margin-top:535px;
         margin-left: -300px;
         font-weight: bold;

}









        
        
        body {

border: #000;
margin: 0;
padding: 0;

background-color:#adadad;


}







        .btn-primary1{border-radius: 40px; text-align:center;color: white; position:absolute;left:37%;margin-top:40%;width:100px;height:40px;background: purple;padding:5px 10px;border: purple;}
        button:hover
    {

    background-color: purple;
    
    
    }

    

  </style>
        <div class="loginbox">

      <div class="container">
            <div class="row">

  <div class="banner">

        
    <img src="faoo.png"  class="img3" width="600px"></img>
  <img src=<?php echo $pic; ?>   class="img2" width="200px"></img>
  <img src="phone.png"   class="img4" width="10px"></img>
  <img src="location.png"   class="img5" width="10px"></img>
  <img src="email.png"   class="img6" width="10px"></img>
  
   <p><?php echo $name; ?></p>
   <p1><?php echo $phone; ?></p1>
    <p2><?php echo $email; ?></p2>
   <p3><?php echo $loc; ?></p3>
   <!-- <p4>INFORMATION ENGINEERING</p4> -->
   <p5><?php echo $we; ?></p5>
   <p25><?php echo $col; ?></p25>
   <p7><?php echo $fm; ?></p7>
   <p8><?php echo $sum; ?></p8>
   <!-- <p10>Fab 2018       </p10>
   <p11>lead designer at x studio</p11>
   <p12>Jan 2017</p12>
   <p13>GRAFIC & WEB DESIGNER AT TUQA COMPANY </p13>
   <p14>Apr 2016</p14>
   <p15>AFIC & WEB DESIGNER AT EARTHLINK COMPANY</p15>
   <p16>2010-2014</p16>
   <p17>information ENGINEERING at nahrain university</p17>
   <p18>2015-2017</p18>
   <p19>master at technology university</p19>-->
   <p20><?php echo $hob; ?></p20>
   <!--<p21>Behance</p21>
   <p22>Linkdine</p22>
   <p23>Facebook</p23>
   <p24>Instagrem</p24>
   <p26>Provide administrative support to the VP of Worldwide Sales and the Directors of Marketing and Global Operations, managing schedules/calendars and overseeing event logistics. </p26>
   <p27>Hobbies</p27>-->


</div>
</div>


</div>

<br></br>
<br></br>

<!--<a href="cv.php" download="CV.pdf">Download Me</a> -->

</body>
</html>