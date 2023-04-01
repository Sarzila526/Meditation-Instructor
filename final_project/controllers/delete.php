<?php 
    require('../models/postModel.php');

    if(isset($_GET['id']))
    {
        $postId = $_GET['id'];
        $wcourse = deleteCourse($wc_id);
        if($wcourse)
        {
            header('location: ../views/dashboard.php');
        }
        else
        {
            echo "Did not work";
        }
    }

?>