<?php
    require('../models/postModel.php');

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $result = getPostById($postId);

        if (mysqli_num_rows($result) > 0){
            while ($row = $result->fetch_assoc()){
                $title = $row['title'];
                $description = $row['description'];
                $goal = $row['goal'];
                $id = $row['id'];
            }
        }
    }

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $goal = $_POST['goal'];

        $status = updatePost($title, $description, $goal, $postId);

        if($status){
            header('location: ../views/dashboard.php');
        }else{
            echo "Did not work";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update a post</title>
</head>
<body>
    <form method="post" action="">  
        <h3>Update post</h3>
        <label>Title:</label> <br/>
        <input type="text" placeholder="Post title" name="title" value="<?php echo $title; ?>" /> 
        </br/>
        <label>Description:</label> <br/>
        <input type="text" placeholder="Description" name="description" value="<?php echo $description; ?>"/> 
        <br />
        <label>Goal:</label> <br/>
        <input type="text" placeholder="$Goal" name="goal" value="<?php echo $goal; ?>"/>
        <br />
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>