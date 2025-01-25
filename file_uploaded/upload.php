<?php

echo "<pre>";



$user_profile = $_FILES['user_profile'];


//destination  
$destination = "profile_picture/". time() . $user_profile['name'];


//move_uploaded_file


move_uploaded_file( $user_profile["tmp_name"], $destination );






?>