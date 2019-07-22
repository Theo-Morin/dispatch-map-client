<html>
<head>
	<meta charset="utf-8">
    <title>Dispatch service</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./public/assets/css/index.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <!--<script type="text/javascript" src="./public/assets/vendor/maphilight/maphilight.js"></script>-->
	  <script type="text/javascript" src="./public/assets/js/index.js"></script>
    <!--<script type="text/javascript">
    $(function() {
		$('.map').maphilight();
    });
    </script>-->
    <script>
        var mousePressed = false;
        var lastX, lastY;
        var ctx;

        function InitThis() {
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
            
        function clearArea() {
            // Use the identity matrix while clearing the canvas
            ctx.setTransform(1, 0, 0, 1, 0, 0);
            ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
        }
    </script>
    <script type="text/javascript">
    /*var canvas, ctx, flag = false,
        prevX = 0,
        currX = 0,
        prevY = 0,
        currY = 0,
        dot_flag = false;

    var x = $("#colorpunaise").val(),
        y = 2;
    
    function init() {
        canvas = document.getElementById('can');
        ctx = canvas.getContext("2d");
        w = canvas.width;
        h = canvas.height;
    
        canvas.addEventListener("mousemove", function (e) {
            findxy('move', e)
        }, false);
        canvas.addEventListener("mousedown", function (e) {
            findxy('down', e)
        }, false);
        canvas.addEventListener("mouseup", function (e) {
            findxy('up', e)
        }, false);
        canvas.addEventListener("mouseout", function (e) {
            findxy('out', e)
        }, false);
    }
    
    function draw() {
        ctx.beginPath();
        ctx.moveTo(prevX, prevY);
        ctx.lineTo(currX, currY);
        ctx.strokeStyle = $("#colorpunaise").val();
        ctx.lineWidth = y;
        ctx.stroke();
        ctx.closePath();
    }

    function erase() {
        var m = confirm("Want to clear");
        if (m) {
            ctx.clearRect(0, 0, w, h);
            document.getElementById("canvasimg").style.display = "none";
        }
    }
    
    function save() {
        document.getElementById("canvasimg").style.border = "2px solid";
        var dataURL = canvas.toDataURL();
        document.getElementById("canvasimg").src = dataURL;
        document.getElementById("canvasimg").style.display = "inline";
    }
    
    function findxy(res, e) {
        if (res == 'down') {
            prevX = currX;
            prevY = currY;
            console.log(e.clientX);
            console.log(e.clientY);
            currX = e.clientX - canvas.offsetLeft;
            currY = e.clientY - canvas.offsetTop;
            console.log(canvas.offsetLeft);
            console.log(currY);
    
            flag = true;
            dot_flag = true;
            if (dot_flag) {
                ctx.beginPath();
                ctx.fillStyle = x;
                ctx.fillRect(currX, currY, 2, 2);
                ctx.closePath();
                dot_flag = false;
            }
        }
        if (res == 'up' || res == "out") {
            flag = false;
        }
        if (res == 'move') {
            if (flag) {
                prevX = currX;
                prevY = currY;
                currX = e.clientX - canvas.offsetLeft;
                currY = e.clientY - canvas.offsetTop;
                draw();
            }
        }
    }*/
    </script>
    </head>
    <!--<body onload="init()">
        <canvas id="can" width="1920" height="1200" style="position:absolute;top:0%;left:50%;transform:translate(-50%, 0%);border:2px solid;z-index:3;"></canvas>
        <input type="button" value="clear" id="clr" size="23" onclick="erase()" style="position:absolute;top:55%;left:15%;">
        <input type="color" id="colorpunaise" value="#ff0000">
    </body>-->
    <body onload="InitThis();">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="JsCode.js"></script>
        <div align="center">
            <canvas id="myCanvas" width="500" height="200" style="border:2px solid black"></canvas>
            <br /><br />
            <button onclick="javascript:clearArea();return false;">Clear Area</button>
            <input type="color" id="colorpunaise" value="#ff0000">
        </div>
    </body>
    </html>