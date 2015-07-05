$(document).ready(function (){
	//start load index content
    callTable();
    //end load index content

    //start event listener
    $("#save-project-btn").click(function() {
        alert("อยู่ในช่วงทดสอบระบบ");
    });
    //end event listener
});

//start function zone
function callTable(){
    $.ajax({
        url: "./php/content_people_training.php",
        type: "POST",
        data: "",
        success: function(result) {
            $('#people-table').html(result);
        }
    });
}