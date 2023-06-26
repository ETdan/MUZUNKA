<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/OIG.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/playlist.css">
    <link rel="stylesheet" href="../style/addtrack.css">
    <title>MUZUNKA</title>
    </style>
</head>
<body>
    <div class="sup-con">

        <section class="side">
            <div class="head">
                <div class="head-top">
                    <div class="logo">
                        <img src="../images/OIG.jpg" alt="" style="height:200px">
                        <div class="main-logo">
                            <p class="main-logo-text">MUZUNKA</p>
                        </div>
                    </div>
                </div>
                <div class="head-bottom">
                    <div class="nav">
                        <div class="icon"><span class="material-symbols-outlined">graphic_eq</span><a href="http://localhost:3000/admin/dashbord.php"> Dashbord </a></div>
                        <div class="icon"><span class="material-symbols-outlined">music_note</span><a href="http://localhost:3000/admin/addtrack.php"> Add Trackes </a></div>
                        <div class="icon"><span class="material-symbols-outlined">queue_music</span><a href="http://localhost:3000/admin/addplaylist.php">Add Playlist </a></div>
                        <!-- <div class="icon"><span class="material-symbols-outlined">heart_plus</span><a href="http://localhost:3000/liked.php"> Liked </a></div> -->
                        <div class="icon"><span class="material-symbols-outlined">album</span> <a href="http://localhost:3000/admin/addartist.php"> Add Artist </a></div>
                        <div class="icon"><span class="material-symbols-outlined">art_track</span><a href="http://localhost:3000/admin/addalbum.php">Add Album </a></div>
                        <div class="icon"><span class="material-symbols-outlined">shield_person</span><a href="http://localhost:3000/admin/addadmin.php">Add Admin </a></div>
                        <div class="icon"><span class="material-symbols-outlined">radio</span><a href="http://localhost:3000/admin/addradio.php">Add Radio </a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main">
            <div class="top">
                <div class="account" style="color:red">
                    <img src="../images/pngwing.com (2).png" alt="" srcset="">
                    <p class="name"> Daniel asfaw</p>
                </div>
            </div>
            <div class="content"> 
                <div class="content-playlist">
                    <!-- <div class="form"> -->
                        <p class="addtrack-title">Add song</p>
                        <form class="addtrack-form" action="" method="post">
                            <label for="songName">Title</label>
                            <input type="text" name="songName" id="">
                            <label for="artistName">Artist</label>
                            <input type="text" name="artistName" id="">
                            <label for="albumName">Album</label>
                            <input type="text" name="albumName" id="">
                            <label for="generName">Gener</label>
                            <input type="text" name="generName" id="">
                            <label for="songFile">File</label>
                            <input type="file" name="songFile" class="file-input">
                            <button type="submit" class="submit">submit</button>
                        </form>
                    </div>
                <!-- </div> --> 
                
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