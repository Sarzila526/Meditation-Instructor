<?php session_start(); 
include '../models/postModel.php';
$result = getAllCourses();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="donate.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Dashboard</title>
</head>

<body>
<?php include '../css/_header.php';?>  
  <br> <br> <br> <br> <br> <br>
    <div class="container">
        <div class="flex-left">
            <a class="a" href="profile.php">My Profile</a>
            <a class="a"href="../controllers/logout.php">Logout</a>
            <a class="a" href="payment.php"> Salary </a> 
            <br> <br> <br>
            <?php
              if (mysqli_num_rows($result) > 0) 
            {
                while($row = mysqli_fetch_array($result))  {
            ?>
                  <div>
                    <p> <b> Course ID: W<?php echo $row["wc_id"] ?> </b></p> 
                    <p> Day : <?php echo $row["day"] ?></p>
                    <p> Starting Time: <?php echo $row["startTime"] ?></p>
                    <p> Ending Time: <?php echo $row["endTime"] ?></p>
                    <p> Topic : <?php echo $row["topic"] ?></p>
                    <p> Instructor ID: <?php echo $row["id"] ?></p>
                    <p> Status: <?php echo $row["status"] ?></p>
                  
                    <?php if(mysqli_num_rows($result) > 0)
                    {
                        ?>
                      <br>
                    </form>
                    <?php }  ?>
                    
                  </div>

          <?php    }

              }?>
        
        </div>
        <div class="flex-right">
            <form method="POST" action="../controllers/createPost.php" enctype="multipart/form-data">  
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
        <span class="underline"> ________________________________________ </span> <br><br>
        <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
  <br> <br> <br> <br>
  <?php include '../css/_footer.php';?>  
</html>