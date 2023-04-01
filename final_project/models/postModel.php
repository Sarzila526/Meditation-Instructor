<?php
    require('db.php');

    function addCourse($day, $startTime, $endTime, $topic, $id, $status)
    {
        $con = getConnection();
        $sql = "insert into weeklycourses values (NULL, '$day', '$startTime', '$endTime', 
        '$topic', '$id','$status')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getAllCourses()
    {                                                            
        $con = getConnection();
        $sql = "SELECT * FROM weeklycourses";
        return mysqli_query($con, $sql);
    }

    function getAllCoursesByUserID($id)
    {
        $con = getConnection();
        $sql = "SELECT * FROM `weeklycourses` WHERE `id`='$id'";
        return mysqli_query($con, $sql);
    }

    function editCourse($wc_id, $day, $startTime, $endTime, $topic, $id, $status)
    {
        $con = getConnection();
        $sql = "UPDATE `weeklycourses` SET `day`='$day', `startTime`='$startTime', `endTime`='$endTime',
        `topic`='$topic', `id`='$id', `status`='$status' WHERE `wc_id`='$wc_id'";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /* function createPost($title, $description, $goal, $username, $img_url)
    {
        $con = getConnection();
        $sql = "insert into posts values (NULL, '$title', '$description', '$goal', '$username', '$img_url')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    } */

    function deleteCourse($wc_id)
    {
        $con = getConnection();
        $sql = "DELETE FROM `weeklycourses` WHERE `wc_id`='$wc_id'";
        if(mysqli_query($con, $sql))
        {
            return true;
        } else
        {
            return false;
        }
    }

    /* function donatePost($amount, $username){
        $con = getConnection();
        $sql = "insert into donation values(NULL, '$amount', '$username')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    } */
?>
