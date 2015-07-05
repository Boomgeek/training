$(document).ready(function (){
	//start load index content
    callContent("people_training.php");
    //end load index content

    //start event listener
    $('.menu-control').click(function() {
        $('.menu-control').removeClass('active');
        $(this).addClass("active");
    });

    $("#people-training-btn").click(function() {
        callContent("people_training.php");
    });

    $("#save-training-btn").click(function() {
    	callContent("save_training.php");
    });

    $("#edit-training-btn").click(function() {
        callContent("edit_training.php");
    });

    $("#report-training-btn").click(function() {
         $('#content').html(null);
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