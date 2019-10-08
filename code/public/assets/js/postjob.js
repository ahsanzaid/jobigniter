$("#postjobform").validator().on("submit", function (event) {

    if (event.isDefaultPrevented()) {
        alert("Did you fill in the form properly?");
    } 
    else {
        event.preventDefault();
        var jname = $("input[name='jname']").val();
        var jdescrp = $("input[name='jdescrp']").val();
        var type = $("input[name='type']").val();
        var skill = $("input[name='skill']").val();
        var keywords = $("input[name='keywords']").val();
        var zipcode = $("input[name='zipcode']").val();
        var indus = $("input[name='indus']").val();
        var totpos = $("input[name='totpos']").val();
        var gender = $("input[name='gender']").val();
        var edu = $("input[name='edu']").val();
        var degtit = $("input[name='degtit']").val();
        var carrier = $("input[name='carrier']").val();
        var sal = $("input[name='sal']").val();
        var exper = $("input[name='exper']").val();
        var appdate = $("input[name='appdate']").val();
        var jcountry = $("input[name='jcountry']").val();
        var jcity = $("input[name='jcity']").val();
        var jlocation = $("input[name='jlocation']").val();
        

         $.ajax({
             type: "POST",
             url: "/job/jobpostsubmit",
             data: {'jname':jname,'jdescrp':jdescrp,'type':type,'skill':skill,'keywords':keywords,'zipcode':zipcode,'indus':indus,'totpos':totpos ,'gender':gender,'edu':edu,'degtit':degtit,'carrier':carrier,'sal':sal,'exper':exper,'appdate':appdate,'jcountry':jcountry,'jcity':jcity,'jlocation':jlocation},
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