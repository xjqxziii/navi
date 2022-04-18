<?php $IP = $_SERVER['SERVER_ADDR'];?>
<?php $URL = $_SERVER['HTTP_HOST'];?>
<meta name="referrer" content="never">
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/new.css" />
    <link rel="shortcut icon" href="./favicon.ico">
    <title>玩客云</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="img">
                <a href="http://<?php echo $IP;?>:19999" target="_blank">
                    <img class="shake" src="img/png/netdata.svg" />
                </a>
            </div>
            <p>netdata</p>
        </div>
        <div class="box">
            <div class="img">
                <a href="http://<?php echo $IP;?>:7681" target="_blank">
                    <img class="shake" src="img/png/terminal.svg" />
                </a>
            </div>
            <p>超级终端</p>
        </div>
        <div class="box">
            <div class="img">
                <a href="/ariang/" target="_blank">
                    <img class="shake" src="img/png/AriaNg.png" />
                </a>
            </div>
            <p>AriaNg</p>
        </div>
        <div class="box">
            <div class="img">
                <a href="/baiduwp" target="_blank">
                    <img class="shake" src="img/png/baiduwp.png" />
                </a>
            </div>
            <p>Pandownload</p>
        </div>
        <div class="box">
            <div class="img">
                <a href="http://<?php echo $IP;?>:9080" target="_blank">
                    <img class="shake" src="img/png/qb.png" />
                </a>
            </div>
            <p>qBittorrent</p>
        </div>
        <div class="box">
            <div class="img">
                <a href="/default/tz.php" target="_blank">
                    <img class="shake" src="img/png/tz.png" />
                </a>
            </div>
            <p>探针</p>
        </div>
        <div class="box">
            <div class="img">
                <a href="http://<?php echo $IP;?>:8088" target="_blank">
                    <img class="shake" src="img/png/fb.png" />
                </a>
            </div>
            <p>FileBrowser</p>
        </div>
        <div class="box">
            <div class="img">
                <a href="https://h5-ocapp.onethingpcs.com/vPages/webapp/#/tasks" target="_blank">
                    <img class="shake" src="img/png/xunlei.png" />
                </a>
            </div>
            <p>onecloud</p>
        </div>

        <div class="box">
            <div class="img">
                <a href="./unzip.php" target="_blank">
                    <img class="shake" src="img/png/easyexplorer.png" />
                </a>
            </div>
            <p>unzip</p>
        </div>
    </div>
</body>

</html>
