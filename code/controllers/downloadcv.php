<?php
if(!isset($_SESSION)){
session_start();
}

if(isset($_POST['encv'])){

$my_file = 'public/CV/upper.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));
$data = $data . $_POST['encv'];
$my_file = 'public/CV/'.uniqid();
$handle = fopen($my_file.'.html', 'w');
fwrite($handle,$data);



require 'APIms/pdfcrowd.php';
try{
$client = new \Pdfcrowd\HtmlToPdfClient("ahsanzaid", "91bca0fde1079e47599ec2916ca2e911");

    // create output stream for conversion result
    $output_stream = fopen($my_file.'.pdf', "wb");

    // run the conversion and write the result into the output stream
    $client->convertFileToStream($my_file.'.html', $output_stream);

    // close the output stream
    fclose($output_stream);
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}
     
  
$trendjobs =  $app['database']->uploadcv($_SESSION['user']['id'],$my_file.'.pdf');

$_SESSION['user']['cv'] = $my_file.'.pdf';

  
  
  
  
echo 'success';
}
?>