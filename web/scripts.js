$(document).ready(function(){
    $("#change-color").click(function(){
        var color = $("#desired-color").val();
        console.log(color);
        $("#harry").css("background-color", color);
    });

    $("#fade").click(function(){
        var visiblity = $("#hermonie").css("visibility");
        if(visibility == "hidden"){
            $("#hermonie").fadein("slow");
            $("#hermonie").css("visibility","visible");
        }else{
            $("#hermonie").fadeout("slow");
            $("#hermonie").css("visibility","hidden");
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
