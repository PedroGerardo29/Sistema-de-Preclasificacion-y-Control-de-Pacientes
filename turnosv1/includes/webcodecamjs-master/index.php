<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WebCodeCamJS</title>
    </head>
    <body>
        <div  id="QR-Code">
            <div class="panel panel-info">
                <div class="panel-heading hide">
                        <select class="form-control" id="camera-select"></select>
                        <div class="form-group">
                            <input id="image-url" type="text" class="form-control" placeholder="Image url">
                            <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                            <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span></button>
                            <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span></button>
                            <button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span></button>
                            <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span></button>
                        </div>
                    </div>
                <div class="panel-body text-center">
                    <div class="col-col-xs-12">
                        <div class="well col-xs-12" >
                            <canvas class="col-xs-12" id="webcodecam-canvas" style="height:240px; "></canvas>
                            <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                        </div>
                        <div class="hide" >
                            <label id="zoom-value" style="width:100">Zoom: 1</label>
                            <input id="zoom" onchange="Page.changeZoom;" type="range" min="10" max="10" value="10">
                            <label id="brightness-value" >Brightness: 0</label>
                            <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                            <label id="contrast-value" style="width:100">Contrast: 0</label>
                            <input id="contrast" onchange="Page.changeContrast();" type="range" min="0" max="64" value="0">
                            <label id="threshold-value" style="width:100">Threshold: 0</label>
                            <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                            <label id="sharpness-value" style="width:100">Sharpness: off</label>
                            <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                            <label id="grayscale-value" style="width:100">grayscale: off</label>
                            <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                        </div>
                    </div>
                    <div class="col-md-6 hide" >
                        <div class="thumbnail hie" id="result">
                            <div class="well hide">
                                <img width="320" height="240" id="scanned-img" src="">
                            </div>
                            <div class="caption hide">
                                <p id="scanned-QR"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="includes/webcodecamjs-master/js/filereader.js"></script>
        <script type="text/javascript" src="includes/webcodecamjs-master/js/qrcodelib.js"></script>
        <script type="text/javascript" src="includes/webcodecamjs-master/js/webcodecamjs.js"></script>
        <script type="text/javascript" src="includes/webcodecamjs-master/js/main.js"></script>
        <script>
            $(document).ready(function (){
                $("#play").trigger('click');
            });
        </script>
    </body>
</html>