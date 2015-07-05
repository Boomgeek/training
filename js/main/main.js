$(document).ready(function (){
	//start load index content
    callContent("people_traning.php");
    //end load index content

    //start event listener
    $('.menu-control').click(function() {
        $('.menu-control').removeClass('active');
        $(this).addClass("active");
    });

    $("#people-traning-btn").click(function() {
        callContent("people_traning.php");
    });

    $("#save-traning-btn").click(function() {
    	callContent("save_traning.php");
    });

    $("#edit-traning-btn").click(function() {
        callContent("edit_traning.php");
    });

    $("#report-traning-btn").click(function() {
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