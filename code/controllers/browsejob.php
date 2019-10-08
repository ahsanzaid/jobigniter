<?php

$name = "Browse Jobs";
$jobs =  $app['database']->browse_jobs();

require 'views/browsejob.view.php';