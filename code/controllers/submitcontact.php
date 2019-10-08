<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $trendjobs =  $app['database']->contact_insert($_POST['name'],$_POST['email'],$_POST['message']);
   echo 'success';
}