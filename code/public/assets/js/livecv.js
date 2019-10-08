$(document).ready(function(){
  $("#fullname").keyup(function(){
      var name = $("#fullname").val();
      $("#cvfullname").html(name);
    });

    $("#jobtitle").keyup(function(){
        var name = $("#jobtitle").val();
        $("#cvjobtitle").html(name);
      });

      $("#email").keyup(function(){
          var name = $("#email").val();
          $("#cvemail").html(name);
        });

        $("#site").keyup(function(){
            var name = $("#site").val();
            $("#cvsite").html(name);
          });

          $("#phone").keyup(function(){
              var name = $("#phone").val();
              $("#cvphone").html("m:"+name);
            });

            $("#personalp").keyup(function(){
                var name = $("#personalp").val();
                $("#cvpersonalp").html(name);
              });

              $("#workbtn").click(function(){

                  var title = $("#workjt").val();
                  var company = $("#workc").val();

                  var tc = title+'  @ '+company;

                  //$("#cvworkjt").append(title+"  @ "+company);
                  //Date Job
                  var from = $("#workf").val();
                  var to = $("#workt").val();

                  var date=from+"  -  "+to;

                  //$("#cvworkdate").html(from+"  -  "+to);
                  //Decription
                  var descp = $("#workjd").val();
                  //$("#cvworkjd").html(descp);
                  $("#xwork").remove();

                  var work = '<article><h2 id="cvworkjt">'+tc+'</h2><p class="subDetails" id="cvworkdate">'+date+'</p><p id="cvworkjd">'+descp+'</p></article>';
                  $("#workex").append(work);
                  $('#workjt').val('');
                  $('#workt').val('');
                  $('#workf').val('');
                  $('#workc').val('');
                  $('#workjd').val('');
                });

                $("#skillbtn").click(function(){
                    $("#xcvskill").remove();
                    var name = $("#skill").val();
                    $("#cvskill").append('<li>'+name+'</li>');
                    $('#skill').val('');
                  });

                  $("#edu4").click(function(){
                      $("#xcvedu").remove();
                      var edu1 = $("#edu1").val();
                      var edu2 = $("#edu2").val();
                      var edu3 = $("#edu3").val();
                      $("#cvedu").append('<article><h2>'+edu1+'</h2><p class="subDetails">'+edu2+'</p><p>'+edu3+'</p></article>');
                      $('#edu1').val('');
                      $('#edu2').val('');
                      $('#edu3').val('');
                    });

                    // $("#submitcvcustom").click(function(){
                    //     var cvdata = $("#orignalcv").html();
                    //     document.write('hello');
                    // });

                  


});
