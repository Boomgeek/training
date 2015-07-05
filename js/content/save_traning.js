$(document).ready(function (){
	//start load index content
    
    //end load index content

    //start event listener
    $("#save-project-btn").click(function() {
        alert("อยู่ในช่วงทดสอบระบบ");
    });
    //end event listener
});

//start function zone
function callContent(source){
    $.ajax({
        url: "./content/" + source,
        type: "POST",
        data: "",
        success: function(result) {
            $('#content').html(result);
        }
    });
}