<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="oig.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="style/home.css">
    <title>MUZUNKA</title>
    </style>
</head>
<body>
    <div class="sup-con">

        <section class="side">
            <div class="head">
                <div class="head-top">
                    <div class="logo">
                        <img src="images/OIG.jpg" alt="" style="height:200px">
                        <div class="main-logo">
                            <p class="main-logo-text">MUZUNKA</p>
                        </div>
                    </div>
                </div>
                <div class="head-bottom">
                    <div class="nav">
                        <div class="icon"><span class="material-symbols-outlined">graphic_eq</span><a href="http://localhost:3000/index.php"> HOME </a></div>
                        <div class="icon"><span class="material-symbols-outlined">queue_music</span><a href="http://localhost:3000/playlist.php"> Playlist </a></div>
                        <div class="icon"><span class="material-symbols-outlined">heart_plus</span><a href="http://localhost:3000/liked.php"> Liked </a></div>
                        <div class="icon"><span class="material-symbols-outlined">album</span> <a href="http://localhost:3000/.php"> Artist </a></div>
                        <div class="icon"><span class="material-symbols-outlined">art_track</span><a href="http://localhost:3000/album.php"> Album </a></div>
                        <div class="icon"><span class="material-symbols-outlined">radio</span><a href="http://localhost:3000/radio.php"> Radio </a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main">
            <div class="top">
                <div class="account" style="color:red">
                    <img src="images/pngwing.com (2).png" alt="" srcset="">
                    <p class="name"> Daniel asfaw</p>
                </div>
            </div>
            <div class="content"> 
                <div class="content-track">
                    <div class="content-image">
                        <img src="/images/OIG.jpg" alt="">
                    </div>
                    <div class="content-song-detail">
                        <div class="content-song-name">wetata</div>
                        <div class="content-artist">teshome asegd</div>
                    </div>
                    <div class="content-like">
                        <span class="material-symbols-outlined">heart_plus</span><a href="http://localhost:3000/liked.php"></a>
                    </div>
                    <div class="content-duration">3:36</div>
                    <div class="content-kebab">:</div>
                </div>
                <!-- <audio controls>
                    <img src="/images/OIG.jpg" alt="">
                    <source src="./sounds/coin1.mp3" type="audio/mpeg">
                </audio> -->
                <audio controls>
                    <source src="./sounds/Wegdayit - Rega Bey Bereggae.mp3" type="audio/mpeg">
                </audio>
                
            </div>
        </section>
        
    </div>
    <!-- <script>
function myFunction() {
    var audio = new Audio('sounds/coin1.mp3');
    audio.play();
}
</script> -->
</body>
</html>