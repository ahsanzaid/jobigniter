$("#csignup").validator().on("submit", function (event) {

    if (event.isDefaultPrevented()) {
        alert("Did you fill in the form properly?");
    } 
    else {
        event.preventDefault();
        var cname = $("input[name='cname']").val();
        var email = $("input[name='email']").val();
        var location = $("input[name='location']").val();
        var city = $("input[name='city']").val();
        var provience = $("input[name='provience']").val();
        var country = $("input[name='country']").val();
        var image = $("input[name='image']").val();
        var password = $("input[name='password']").val();
       
         $.ajax({
             type: "POST",
             url: "/job/csignup_submit",
             data: {'cname':cname,'email':email,'location':location,'city':city,'provience':provience,'country':country,'image':image,'password':password},
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