<?php


// Simple GET Pages Routes And Simple Pages Routes
$router->get('job','controllers/index.php');
$router->get('job/cvbuilder','controllers/cvbuilder.php');
$router->get('job/aboutus','controllers/aboutus.php');
$router->get('job/login','controllers/login.php');
$router->get('job/logout','controllers/logout.php');
$router->get('job/browsejob','controllers/browsejob.php');
$router->get('job/contact','controllers/contact.php');
$router->get('job/postjob','controllers/postjob.php');
$router->get('job/csignup','controllers/company-signup.php');
$router->get('job/usignup','controllers/user-signup.php');
$router->get('job/jobdetails','controllers/job_details.php');
$router->get('job/search','controllers/job_search.php');

$router->get('job/mail','APIms/mymail.php');

// Simple POST Pages Routes And Simple Pages Routes
$router->post('job/userlogin','controllers/userlogin.php');//csignup_submit
$router->post('job/csignup_submit','controllers/csignup-submit.php');//csignup_submit
$router->post('job/usignup_submit','controllers/usignup-submit.php');
$router->post('job/submitcontact','controllers/submitcontact.php');
$router->post('job/downloadcv','controllers/downloadcv.php');
$router->post('job/jobpostsubmit','controllers/jobpostsubmit.php');
$router->post('job/usignin_submit','controllers/usignin-submit.php');//csignup_submit
