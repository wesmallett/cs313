$(document).ready(function(){
    $("#change-color").click(function(){
        var color = $("#desired-color").val();
        console.log(color);
        $("#harry").css("background-color", color);
    });

    $("#fade").click(function(){
        var display = $("#hermonie").css("display");
        if(display == "none"){
            $("#hermonie").fadeIn("slow");
        }else{
            $("#hermonie").fadeOut("slow");
        }
    });
});

function alertClicked(){
    alert("Clicked!");
}

function changeColor(){
    var color = document.getElementById('desired-color').value;
    console.log(color);
    document.getElementById('harry').style.backgroundColor = color;
}
