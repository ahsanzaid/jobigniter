<?php

if(isset($_POST['jname'])&&isset($_POST['jdescrp'])&&isset($_POST['type'])&&isset($_POST['skill'])&&isset($_POST['keywords'])&&isset($_POST['zipcode'])&&isset($_POST['indus']) && isset($_POST['totpos']) && isset($_POST['gender'])  && isset($_POST['edu']) &&  isset($_POST['degtit'])  && isset($_POST['carrier'])  && isset($_POST['sal'])  &&  isset($_POST['exper'])  && isset($_POST['appdate'])  &&  isset($_POST['jcountry'])  && isset($_POST['jcity'])  &&  isset($_POST['jlocation'])){
$app['database']->post_job($_POST['jname'],$_POST['jdescrp'],$_POST['type'],$_POST['skill'],$_POST['keywords'],$_POST['zipcode'],$_POST['indus'],$_POST['totpos'],$_POST['gender'],$_POST['edu'],$_POST['degtit'],$_POST['carrier'],$_POST['sal'],$_POST['exper'],$_POST['appdate'],$_POST['jcountry'],$_POST['jcity'],$_POST['jlocation']);
echo'success';
}