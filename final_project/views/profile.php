<?php
  session_start();
  include '../models/postModel.php';
  $result = getAllCoursesByUserID($_SESSION["id"]);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <script src="./payment.js"></script>
    <title>Profile</title>
</head>
<style>
  .logout-btn{
    background-color:  rgb(25, 231, 97);
    color: #ffffff;
    cursor: pointer;
    width: 100px;
    margin-top: 20px;
    text-decoration: none;
    padding: 8px 12px;
  }
</style>

<body>
  <a class="logout-btn" href="../controllers/logout.php">Logout</a>
    <div class="container">
            <?php
              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
            ?>
                  <div>
                    <p> <b> Course ID: W<?php echo $row["wc_id"] ?> </b></p> 
                    <p> Day : <?php echo $row["day"] ?></p>
                    <p> Starting Time: <?php echo $row["startTime"] ?></p>
                    <p> Ending Time: <?php echo $row["endTime"] ?></p>
                    <p> Topic : <?php echo $row["topic"] ?></p>
                    <p> Instructor ID: <?php echo $row["id"] ?></p>
                    <p> Status: <?php echo $row["status"] ?></p>
                    <p> <a href="update.php?id=<?php echo $row['wc_id']; ?>"> Edit </a> 
                    <a href="../controllers/delete.php?id=<?php echo $row['wc_id']; ?>">Delete</a> </p>
                  </div>

          <?php    }

          }?>
</body>
</html>