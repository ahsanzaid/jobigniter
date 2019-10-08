<?php


if (isset($_POST['cname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['location']) && isset($_POST['city'])  && isset($_POST['provience']) && isset($_POST['country'])) {
     $target_dir_db = "public\\\\assets\\\\img\\\\jobs\\\\";
     $target_dir = "public\assets\img\jobs\\";
     $target_file = $target_dir . basename($_FILES["image"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Check if image file is a actual image or fake image
     $check = getimagesize($_FILES["image"]["tmp_name"]);
     if($check !== false) {
        $format=$check["mime"];
        $format = str_replace('image/','',$format);
        $uni = uniqid();
        $target_file = $target_dir_db.$uni.".".$format;
        move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
        $app['database']->company_signup($_POST['cname'],$_POST['email'],md5($_POST['password']),$_POST['location'],$_POST['city'],$target_file,$_POST['provience'],$_POST['country']);        
        $uploadOk = 1;
        } 
    else {
        $uploadOk = 0;
    }
    echo "success";
         
}
else{
    echo 'Kaam Nahi Hua'.$_POST['name'];
}

?>