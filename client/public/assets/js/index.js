var socket = io.connect('https://socket.tinlan-tournament.com:8443', {secure: true});

socket.on('pointadd', function(id, x2, y2, texte, colorpunaise) {
    $(".container").append("<div onclick=\"delete_point('" + id + "')\" class=\"punaise\" id=\"" + id + "\" style=\"background-color:" + colorpunaise + ";margin-top:" + y2 + "px;margin-left:" + x2 + "px;\"></div>");
    if (texte != null) {
        var y3 = y2 + 5;
        var x3 = x2;
        var text = texte;
        $(".container").append("<div class=\"textepuce\" style=\"margin-top:" + y3 + "px;margin-left:" + x3 + "px;\" id=\"t" + id + "\">" + text + "</div>");
    }
});

socket.on('pointdelete', function(id) {
    $("#" + id).remove();
    $("#t" + id).remove();
});

socket.on('drawclear', function(){
    $(".canvasimg").remove();
    clearArea();
});

socket.on('drawadd', function(data){
    $("#savecanvs").append('<img draggable="false" class="canvasimg" style="position:absolute;top:0;z-index:2;left:50%;transform:translate(-50%,0);" src="' + data + '">');
});

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
            id: data,
            zone: zoneuh
        },
        function (data) {
            console.log(data);
        },
        'text'
    );
    $(target).find(".contain").append(document.getElementById(data));
}

function onclick_page(event) {
    var eventDoc = (event.target && event.target.ownerDocument) || document;
    var doc = eventDoc.documentElement;
    var scrleft = doc.scrollLeft;
    var scrtop = doc.scrollTop;
    var x = event.clientX + scrleft;
    var y = event.clientY + scrtop;
    $(".container").append("<div id=\"centre\">");
    var element = document.getElementById("centre");
    var rect = element.getBoundingClientRect();
    var y2 = y;
    var x2 = x - rect.left;
    var y3 = y2 + 5;
    var x3 = x2;
    var colorpunaise = $('#colorpunaise').val();
    console.log(x);
    console.log(y)
    var xn = x.toString();
    var id = "" + x + "" + y
    console.log(id);
    //console.log(colorpunaise);
    $(".container").append("<div onclick=\"delete_point('" + id + "')\" class=\"punaise\" id=\"" + id + "\" style=\"background-color:" + colorpunaise + ";margin-top:" + y2 + "px;margin-left:" + x2 + "px;\"></div>");
    if ($("#addtexte").val() != "") {
        var text = $("#addtexte").val();
        $(".container").append("<div class=\"textepuce\" style=\"margin-top:" + y3 + "px;margin-left:" + x3 + "px;\" id=\"t" + id + "\">" + $("#addtexte").val() + "</div>");
    }
    else
        var text = null;
    //alert('Vous avez cliqué au point de coordonnés: ' + x + ', ' + y );
    $("#centre").remove();
    console.log($("#addtexte").val());
    $.post(
        './newKey',
        {
            id: id,
            x: x2,
            y: y2,
            texte: text,
            color: colorpunaise,
        },
        function (data) {
            console.log(data);
        },
        'text'
    );
    socket.emit('addpoint', id, x2, y2, text, colorpunaise);
    $("#addtexte").val("");

    //setTimeout(function(){ document.location.reload(true); }, 200);
    //console.log(rect.bottom);
}
function delete_point(ev) {
    $.post(
        './deleteKey',
        {
            id: ev
        },
        function (data) {
            console.log(data);
        },
        'text'
    );
    socket.emit('deletepoint', ev);
    $("#" + ev).remove();
    $("#t" + ev).remove();
}
function switch_zone() {
    if ($("svg").length == 0)
        document.location = './map/true';
    else
        document.location = './map/false';
}

function loader() {
    $('.map').css('height', document.documentElement.clientHeight);
}