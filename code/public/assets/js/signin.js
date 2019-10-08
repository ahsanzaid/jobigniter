$("#signinform").validator().on("submit", function (event) {

    if (event.isDefaultPrevented()) {
        alert("Did you fill in the form properly?");
    } 
    else {
        event.preventDefault();
        var name = $("#name").val();
        var password = $("#password").val();
        var account = $("#account").val();
        if(account == 'JobSeeker'){
            account = 'user';
        }
        else{
            account = 'company';
        }
         $.ajax({
             type: "POST",
             url: "/job/usignin_submit",
             data: {"name" : name , "password" : password ,"account":account},
             success : function(text){
                 if (text == "success"){
                    window.location.href = "/job/";
                 } 
                 else{
                  alert(text);
                 }
             }
         });     
       
    }

});



//$("#signinsubmit").click(function() {

    // var name = $("#name").val();
    // var password = $("#password").val();
    
    //  $.ajax({
    //      type: "POST",
    //      url: "/job/usignin_submit",
    //      data: {"name" : name , "password" : password},
    //      success : function(text){
    //          if (text == "success"){
    //              alert('Succesfully Sign In');
    //          } else {
    //           alert(text);
    //          }
    //      }
    //  });     
    
  //});
  
  
  
  