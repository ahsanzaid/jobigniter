<?php

$name='';

$categories =  $app['database']->categories();
$trendjobs =  $app['database']->trendingjobs();
require 'views/index.view.php';

