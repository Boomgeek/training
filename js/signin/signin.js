$(document).ready(function (){
    $("#signinBtn").click(function() {
		callSignin();
    });
});

//start function zone
function callSignin(){
        $.ajax({
            url: "./php/check_signin.php",
            type: "POST",
            data: "user="+$('#inputUsername').val()+"&password="+$('#inputPassword').val()+"&mode=signin",
            success: function(result) {
                var res = result.split(":");
                if(res[0]== "Error"){
                    alert("Signin failed: "+res[1]);
                }else if(res[0]== "Success"){
                    window.location.replace("./index.php");
                }
            }
        });
}