<?php

if(isset($_GET['keyword']) && isset($_GET['city']) && isset($_GET['skill'])){

    $name = "Searched Jobs";
    $jobs =  $app['database']->search_jobs($_GET['keyword'],$_GET['skill'],$_GET['city']);
    require 'views/browsejob.view.php';

}
