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
    $(".container").append("<div onclick=\"delete_point('" + y + "" + x + "')\" class=\"punaise\" id=\"" + y + "" + x + "\" style=\"margin-top:" + y2 + "px;margin-left:" + x2 + "px;\"></div>");
    if($("#addtexte").val() != "")
        $(".container").append("<div class=\"textepuce\" style=\"margin-top:" + y3 + "px;margin-left:" + x3 + "px;\" id=\"t" + y + "" + x + "\">" + $("#addtexte").val() + "</div>");
    //alert('Vous avez cliqué au point de coordonnés: ' + x + ', ' + y );
    $("#centre").remove();
    console.log($("#addtexte").val());
    $("#addtexte").val("");
    //console.log(rect.bottom);
}
function delete_point(ev)
{
    $("#" + ev).remove();
    $("#t" + ev).remove();
}
function switch_zone(map)
{
    if($("svg").length == 0)
        document.location = './map/true';
    else
        document.location = './map/false';
}