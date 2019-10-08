<?php
$i = $_GET['job'];
$details = $app['database']->job_details($i);
$name=$details[0]->jname;
require 'views/job_details.view.php';