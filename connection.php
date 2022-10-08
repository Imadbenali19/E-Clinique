<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "eclinique") ;
if(mysqli_connect_errno()){
    echo "Connection failed: " . mysqli_connect_error();
}


?> 