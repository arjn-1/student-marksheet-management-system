<?php

//connecting to the database
$db = mysqli_connect("localhost", "root", "", "marksheet");

$msg="";//new empty variable

//if  upload button is pressed
if(isset($_POST["upload"])){
    //get all the data from the form
    $rn = $_POST['rn'];
    $sn = $_POST['sn'];
    $stn = $_POST['stn'];
    $fn = $_POST['fn'];
    $mn = $_POST['mn'];
    $dob = $_POST['dob'];
    $gen = $_POST['gen'];
    $add = $_POST['add'];
    $sc = $_POST['sc'];
    $engint = $_POST['engint'];
    $engext = $_POST['engext'];
    $hinint = $_POST['hinint'];
    $hinext = $_POST['hinext'];
    $mathint = $_POST['mathint'];
    $mathext = $_POST['mathext'];
    $sciint = $_POST['sciint'];
    $sciext = $_POST['sciext'];
    $ssint = $_POST['ssint'];
    $ssext = $_POST['ssext'];
   
   
    // $image = $_FILES["putimage"]["name"];
    // $sign = $_FILES["putSign"]["name"];

    // $tempimg = $_FILES["putimage"]["tmp_name"];
    // $tempsign = $_FILES["putSign"]["tmp_name"];

    // $target = "images/".basename($image);
    // $dest = "sign/".basename($sign);

    
    $sql = "INSERT INTO form (rollno, schoolname , studentname ,fathername , mothername ,dob , gender ,address , schoolcode ,engint , engext ,hinint , hinext ,mathint , mathext ,sciint , sciext ,ssint , ssext ) VALUES ('$rn', '$sn', '$stn', '$fn','$mn', '$dob', '$gen','$add','$sc', '$engint', '$engext','$hinint', '$hinext', '$mathint','$mathext', '$sciint', '$sciext','$ssint', '$ssext')";
    mysqli_query($db, $sql);//stores the submitted data into the database table images

    //moving the image into the folder
    // if((move_uploaded_file($tempimg, $target)) && (move_uploaded_file($tempsign, $dest))){
    //   echo  $msg = "image uploaded successfully:";
    // }
    // else{
    //   echo  $msg = "Task Failed Successfully";
    // }

    //$result = mysqli_query($db, "SELECT * FROM posts");
}



?>














<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- responsive-->

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- <link href="./style3.css" rel="stylesheet" /> -->

    <title>Marksheet system</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><!--expand for resp collapsing and color schemes -->
  <a class="navbar-brand" href="#">Marksheet Management System</a><!--for your company, product, or project name. -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown"><!--for grouping and hiding navbar contents by a parent breakpoint. -->
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="result.php">Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="studentdetails.php">Marksheet Form</a>
      </li>
    </ul>
  </div>
</nav>
        <form action="" method="post">
        <h1>Student Marksheet Form</h1><hr>
        <table>
            <!-- <caption>Student Marsksheet Form</caption> -->
            <tr>
                <td>School Name: </td>
                <td><input type=text name="sn" size=30></td>
            </tr>
            <tr>
                <td>Roll Number: </td>
                <td><input type=text name="rn" size=30></td>
            </tr>
             <tr>
                <td>Student Name: </td>
                <td><input type=text name="stn" size=30></td>
            </tr>
            
            <tr>
                <td>Father's Name: </td>
                <td><input type=text name="fn" size=30></td>
            </tr>
            <tr>
                <td>Mother's Name: </td>
                <td><input type=text name="mn" size=30></td>
            </tr>
            <tr>
                <td>Date Of Birth: </td>
                <td><input type=text name=dob size=30></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type=radio name=gen size=30 value="Male">Male<input type=radio name=gen size=30 value="Female">Female</td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><input type=text name=add size=30></td>
            </tr>
            <tr>
                <td>School code: </td>
                <td><input type=text name=sc size=30></td>
            </tr>
            <!-- <tr>
                <td for="img">Photo: </td>
                <td><input type=file id=img name="img"></td>
            </tr>
            <tr>
                <td for="sign">Signature: </td>
                <td><input type=file id="sign" name="sign"></td>
            </tr> -->
            <h3>ENTER THE MARKS:</h3>
            <tr>
                <td>ENGLISH MARKS: </td>
                <td>Internal:     <input type=text name=engint size=30></td>
                <td>External:     <input type=text name=engext size=30></td>
            </tr>
            <tr>
                <td>HINDI MARKS: </td>
                <td>Internal:     <input type=text name=hinint size=30></td>
                <td>External:     <input type=text name=hinext size=30></td>
            </tr>
            <tr>
                <td>MATHEMATICS MARKS: </td>
                <td>Internal:     <input type=text name=mathint size=30></td>
                <td>External:     <input type=text name=mathext size=30></td>
            </tr>
            <tr>
                <td>SCIENCE MARKS: </td>
                <td>Internal:     <input type=text name=sciint size=30></td>
                <td>External:     <input type=text name=sciext size=30></td>
            </tr>
            <tr>
                <td>SOCIAL SCIENCE MARKS: </td>
                <td>Internal:     <input type=text name=ssint size=30></td>
                <td>External:     <input type=text name=ssext size=30></td>
            </tr>
            <tr>
            
            <!-- <td><input type=reset name = "reset"></td> -->
         </tr>
        </table>
        <div>
            <label for="inputimage">Image :</label>
            <br>
            <input
              type="file"
              id="inputimage"
              name="putimage"
              
            />
            <div>
            <label for="inputSign">Sign :</label>
            <br>
            <input
              type="file"
              id="inputSign"
              name="putSign"
              
            />
        <input type=submit name="upload" value="UPLOAD">
        </form>
    </body>
</html>