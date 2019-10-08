$("#submitcv").click(function() {

  var encv = $("#orignalcv").html();
  var cv   = encv;
      encv = encv +'</body> </html>';
   // Initiate Variables With Form Content
   $.ajax({
       type: "POST",
       url: "/job/downloadcv",
       data: {"encv" : encv},
       success : function(text){
           if (text == "success"){
            window.location.href = "/job/";
            alert('Your Cv is ready to download');
           } else {
            alert(text);
           }
       }
   });     
  
});



