<?php
include("session.php");

if ($status == "admin"){
    header('Location: mainpageAdmin.php');
    exit();
}

elseif ($status == "agent"){
    header('Location: mainpageAgent.php');
    exit();
}

elseif ($status == "owner"){
    header('Location: mainpageOwner.php');
    exit();
}

elseif ($status == "security"){
    header('Location: mainpageSecurity.php');
    exit();
}

elseif ($status == "tenant"){
    header('Location: mainpageTenant.php');
    exit();
}

else{
    die();
}

?>