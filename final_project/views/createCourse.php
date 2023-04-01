<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a post</title>
</head>
<body>
<?php include '../css/_header.php';?>  
<br> <br> <br> <br> <br> <br>
<div class="container" style="width:400px;">
<fieldset>
  <legend>
    <b><h3> Add Course </h3></b>
  </legend>   
    <form method="POST" action="../controllers/createCourse.php" enctype="multipart/form-data">  
        <b> <h3>Add Course</h3> </b>
        <label for="topic"> Topic : </label> <br>
        <input type="text" id="topic" name="topic"> <br><br>
        <label for="day"> Day : </label> <br>
        <input type="text" id="day" name="day"> <br><br>
        <label for="startTime"> Starting Time : </label> <br>
        <input type="time" id="startTime" name="startTime"> <br><br>
        <label for="endTime"> Ending Time : </label> <br>
        <input type="time" id="endTime" name="endTime"> <br><br>
        <label for="id"> Instructor ID : </label> <br>
        <input type="int" id="id" name="id"> <br><br>
        <label for="status"> Status : </label> <br>
        <input type="text" id="status" name="status"> <br><br><br>
        <span class="underline"> ___________________________ </span> <br><br>
        <input hidden type="text" name="wc_id" value="<?php echo$_SESSION["wc_id"] ?>" />
        <input type="submit" name="submit" value="Submit">
        </fieldset>
</form>
</div> 
<?php include '../css/_footer.php';?>  
</body>
</html>
