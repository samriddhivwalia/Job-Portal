<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Jobs Portal</title>
    <?php 
    
    include('header_link.php'); 
    include('dbconnect.php'); 
    
    ?>
</head>
<body>

<?php   
    include('header.php'); 
    if(!isset( $_SESSION['userid'] ) ){
        header('Location: login.php');
      } 
    ?>
    
<h1>Jobs posted by all the companies</h1>
  
<?php


 $userid = $_SESSION['userid'];

  include('dbconnect.php');
  $sql = "select * from jobs";
  $rs = mysqli_query($con,$sql);
  while($data = mysqli_fetch_array($rs)){


    $_SESSION['jobid'] = $data['jobid'];
    $userid = $_SESSION['userid'];
?>
	   

       <div class="col-md-12 application" height="400px;" > 
              
                <h1><?= $data['title'] ?></h1>
                <h5><?= $data['categories'] ?></h5>
                <p>Desc :   <?= $data['description'] ?></p>
                <h3>Salary :   <?= $data['salary'] ?></h3>
                <h3>Timing :   <?= $data['timing'] ?></h3>
                <h3>Location :   <?= $data['location'] ?></h3>
                 
        </div>



       <?php
  }
  ?>

<br><br>
 <?php include('footer.php'); ?>

</body>
</html>
