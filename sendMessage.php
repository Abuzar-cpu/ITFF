<?php
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        $query = "INSERT INTO messages (name, email, subject, content) VALUES ('". $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["subject"] . "', '" . $_POST["message"] . "')";
        printf($query);
        include "db.php";
        if(!$con) {
            header("Location: index.php/?code=0"); // No Db Connection
        } else {
            $run = mysqli_query($con, $query);
            if(!$run) {
                echo "error";
                die();
            }
            header("Location: index.php/?code=1"); // Success
        }
        
    }
?>