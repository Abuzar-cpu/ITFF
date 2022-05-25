<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "admins" || $cat_get == "admins") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `admins` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `admins` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `admins` WHERE id = '".$id_get."' ");
					}
					header("location:"."admins.php");
				}
				
				if($cat == "messages" || $cat_get == "messages") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$subject = addslashes(htmlentities($_POST["subject"], ENT_QUOTES));
$content = addslashes(htmlentities($_POST["content"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `messages` (  `name` , `email` , `subject` , `content` ) VALUES ( '".$name."' , '".$email."' , '".$subject."' , '".$content."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `messages` SET  `name` =  '".$name."' , `email` =  '".$email."' , `subject` =  '".$subject."' , `content` =  '".$content."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `messages` WHERE id = '".$id_get."' ");
					}
					header("location:"."messages.php");
				}
				
				if($cat == "skills" || $cat_get == "skills") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$level = addslashes(htmlentities($_POST["level"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `skills` (  `name` , `level` ) VALUES ( '".$name."' , '".$level."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `skills` SET  `name` =  '".$name."' , `level` =  '".$level."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `skills` WHERE id = '".$id_get."' ");
					}
					header("location:"."skills.php");
				}
				?>