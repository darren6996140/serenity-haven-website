<?php
include("session.php");

if ($status == "admin"){
    header('Location: mainpageAdmin.php');
    exit();
}

elseif ($status == "agent"){
    header('Location: mainpageUser.php');
    exit();
}

elseif ($status == "owner"){
    header('Location: mainpageUser.php');
    exit();
}

elseif ($status == "security"){
    header('Location: mainpageSecurity.php');
    exit();
}

elseif ($status == "tenant"){
    header('Location: mainpageUser.php');
    exit();
}

else{
    die();
}

?>