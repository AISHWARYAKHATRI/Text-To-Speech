<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>TTS Technology</title>
</head>
<body>
<div class="container forget-password">
            <div class="row">
                <div class="col-md-12 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                                <img src="./icons8-headset-60.png" alt="car-key" border="0">
                                <h2 class="text-center">Text to Speech Tool.</h2>
                                <p>Drop your text here.</p>
                                <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="text" name="text" placeholder="Text" class="form-control"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="submit" class="btn btn-lg btn-primary btn-block btnForget" value="Convert to Speech" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
    $txt = $_POST['text'];
    $txt = htmlspecialchars($txt);
    $txt = rawurlencode($txt);
    // echo $txt;
    $audio = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-US');
    // echo $audio;
    $speech = "<div style='text-align: center;'><audio controls='controls' src='data:audio/mpeg;base64,".base64_encode($audio)."' autoplay></audio></div>";
    echo $speech;
}
?>