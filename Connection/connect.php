<?php
    $DBname='sql8668148';
    $Servername='sql8.freesqldatabase.com';
    $Username='sql8668148';
    $password='At7eQl956j';

    $conn= new mysqli($Servername,$Username,$password,$DBname);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "connected ";
    }
    ?>