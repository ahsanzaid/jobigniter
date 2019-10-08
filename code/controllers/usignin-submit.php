<?php

if(!isset($_SESSION))
{
session_start();
}

if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['account'])){

    $user =  $app['database']->user_login($_POST['name'],md5($_POST['password']),$_POST['account']);
    
    if($_POST['account'] == 'user'){
        $_SESSION['user']['cv'] = $user[0]->cv;
        $_SESSION['user']['email'] = $user[0]->email;
        $_SESSION['user']['name'] = $user[0]->fname;
        $_SESSION['user']['id'] = $user[0]->uid;
    }
    else{
        $_SESSION['cuser']['email'] = $user[0]->email;
        $_SESSION['cuser']['name'] = $user[0]->cname;
        $_SESSION['cuser']['id'] = $user[0]->cid;
    }
    


echo 'success';
}
