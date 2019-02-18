<?php

$conn = mysqli_connect('db', 'bolt', 'something-secure-here', 'bolt', '3306');

if(mysqli_connect_errno()){
    echo 'Failed to connect to MYsql' . mysqli_connect_errno();
}else {
    echo 'Database connected...';
}


?>