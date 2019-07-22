function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var target = ev.target;
    var data = ev.dataTransfer.getData("text");
    console.log($("#" + target.id).children('.contain').attr("id"));
    console.log(data);
    var zoneuh = $("#" + target.id).children('.contain').attr("id");
    $.post(
        './moovePatrouille',
        {
            id : data,
            zone : zoneuh
        },
        function(data){
            console.log(data);
        },
        'text'
    );
    $(target).find(".contain").append(document.getElementById(data));
}
function onclick_page(event)
{
    var x = event.clientX;
    var y = event.clientY;
    $(".container").append("<div id=\"centre\">");
    var element = document.getElementById("centre");
    var rect = element.getBoundingClientRect();
    var y2 = y;
    var x2 = x - rect.left;
    var y3 = y2 + 5;
    var x3 = x2;
    var colorpunaise = $('#colorpunaise').val();
    console.log(colorpunaise);
    $(".container").append("<div onclick=\"delete_point('" + y + "" + x + "')\" class=\"punaise\" id=\"" + y + "" + x + "\" style=\"background-color:" + colorpunaise + ";margin-top:" + y2 + "px;margin-left:" + x2 + "px;\"></div>");
    if($("#addtexte").val() != "")
    {
        var text = $("#addtexte").val();
        $(".container").append("<div class=\"textepuce\" style=\"margin-top:" + y3 + "px;margin-left:" + x3 + "px;\" id=\"t" + y + "" + x + "\">" + $("#addtexte").val() + "</div>");
    }
    else
        var text = null;
    //alert('Vous avez cliqué au point de coordonnés: ' + x + ', ' + y );
    $("#centre").remove();
    console.log($("#addtexte").val());
    $.post(
        './newKey',
        {
            id : x +  "" + y,
            x : x2,
            y : y2,
            texte : text,
            color : colorpunaise,
        },
        function(data){
            console.log(data);
        },
        'text'
    );
    $("#addtexte").val("");
    setTimeout(function(){ document.location.reload(true); }, 200);
    //console.log(rect.bottom);
}
function delete_point(ev)
{
    $.post(
        './deleteKey',
        {
            id : ev
        },
        function(data){
            console.log(data);
        },
        'text'
    );
    $("#" + ev).remove();
    $("#t" + ev).remove();
}
function switch_zone()
{
    if($("svg").length == 0)
        document.location = './map/true';
    else
        document.location = './map/false';
}