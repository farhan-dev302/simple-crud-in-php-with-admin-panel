<?php

$con = mysqli_connect('localhost', 'root', "", "management" );
if(mysqli_connect_error())
{
    echo 'Connection Fail'.mysqli_connect_error();
}
?>