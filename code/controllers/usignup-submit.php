<?php

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['phone'])  && isset($_POST['password'])) {
    $app['database']->user_signup($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['phone'],$_POST['city'],md5($_POST['password']));        
}
?>