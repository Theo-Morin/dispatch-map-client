var mousePressed = false;
var lastX, lastY;
var ctx;

function InitThis() {
    canvas = document.getElementById('myCanvas');
    $("#myCanvas").attr("width", $(".map").width());
    $("#myCanvas").attr("height", $(".map").height());
    ctx = document.getElementById('myCanvas').getContext("2d");

    $('#myCanvas').mousedown(function (e) {
        mousePressed = true;
        Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, false);
    });

    $('#myCanvas').mousemove(function (e) {
        if (mousePressed) {
            Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, true);
        }
    });

    $('#myCanvas').mouseup(function (e) {
        mousePressed = false;
    });
    $('#myCanvas').mouseleave(function (e) {
        mousePressed = false;
    });
}

function Draw(x, y, isDown) {
    if (isDown) {
        ctx.beginPath();
        ctx.strokeStyle = $('#colorpunaise').val();
        ctx.lineWidth = 2;
        ctx.lineJoin = "round";
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(x, y);
        ctx.closePath();
        ctx.stroke();
    }
    lastX = x; lastY = y;
}

function erase() {
    var m = confirm("Si vous continuez les dessins sur la carte disparaitront.");
    if (m) {
        $.post(
            './deleteDessin',
            {},
            function(){
                $("#savecanvs").remove();
                socket.emit('cleardraw');
                clearArea();
            },
            'text'
        );
    }
}

function clearArea() {
    // Use the identity matrix while clearing the canvas
    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
}

function save() {
    var dataURL = canvas.toDataURL();
    $("#savecanvs").append('<img draggable="false" class="canvasimg" style="position:absolute;top:0;z-index:2;left:50%;transform:translate(-50%,0);" src="' + dataURL + '">');
    $.post(
        './newDessin',
        {
            img : dataURL
        },
        function(data){
            console.log(data);
            socket.emit('adddraw', dataURL);
        },
        'text'
    );
}