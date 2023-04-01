<?php

  require('../models/postModel.php');
  if(isset($_POST['submit']))
  {
    $day = $_POST['day'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $topic = $_POST['topic'];
    $id = $_POST['id'];
    $status = $_POST['status'];

    if($day != null && $startTime != null && $endTime != null && $topic != null 
       && $id != null && $status != null)
    {
              // INSERT INTO DATABASE
              $wcourse = createCourse($day,$startTime,$endTime,$topic,$id,$status);
              if($wcourse)
              {
                header('location: ../views/dashboard.php');
              }
              else
              {
                header('location: ../views/dashboard.php');
              }
          }
    else{
        $message = 'Please fill out all the fields';
        echo "<script>alert('$message');</script>";
   }
}
 ?>
