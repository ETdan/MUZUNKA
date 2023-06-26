<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/oig.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/trackes.css">
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
                        <div class="icon"><span class="material-symbols-outlined">music_note</span><a href="http://localhost:3000/trackes.php"> Trackes </a></div>
                        <div class="icon"><span class="material-symbols-outlined">queue_music</span><a href="http://localhost:3000/playlist.php"> Playlist </a></div>
                        <div class="icon"><span class="material-symbols-outlined">heart_plus</span><a href="http://localhost:3000/liked.php"> Liked </a></div>
                        <div class="icon"><span class="material-symbols-outlined">album</span> <a href="http://localhost:3000/artist.php"> Artist </a></div>
                        <div class="icon"><span class="material-symbols-outlined">art_track</span><a href="http://localhost:3000/album.php"> Album </a></div>
                        <div class="icon"><span class="material-symbols-outlined">radio</span><a href="http://localhost:3000/radio.php"> Radio </a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main">
            <div class="top">
                <div class="account">
                    <img src="images/pngwing.com (2).png" alt="" srcset="">
                    <p class="name"> Daniel asfaw</p>
                </div>
            </div>
            <div class="content"> 
            <?php include'connection.php';
                $sql="SELECT * from song;";
                $result=$conn->query($sql);
            ?>
            <div class = 'content-playlist-song'>
                <?PHP 
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $duration=$row['duration'];
                            $duration=number_format($duration/60 , 2, ':', ':');
                            /**
                             * 
                             * 
                             * add user id to the query below
                             * 
                             * 
                             */
                            $sql="select * from likes where song_id=$row[id];";
                            $r=$conn->query($sql);
                            $s="";
                            if($r->num_rows==0)
                                $s="<span class='material-symbols-outlined' data-id='$row[id]'>heart_plus</span></a>";

                            echo"
                            <div class='content-track' data-url='$row[file_location]' id='$row[id]'>
                            <div class='content-image'>
                                <img src='$row[song_image_url]'>
                            </div>
                            <div class='content-song-detail'>
                                <div class='content-song-name'>$row[artist]</div>
                                <div class='content-artist'>$row[title]</div>
                                <div>
                                    <audio src='$row[file_location]' >
                                        <source src='$row[file_location]' type='audio/mpeg'>
                                    </audio>
                                </div>
                                    
                            </div>
                            <div class='content-like'>
                                $s
                            </div>
                            <div class='content-duration'>$duration</div>
                            <div class='content-kebab'>+</div>
                        </div>";
                        }
                      } else {
                        // echo "0 results";
                      }
                ?>

        <div class="content-track" data-url="sounds/Wegdayit - Rega Bey Bereggae.mp3">
            <div class="content-image">
                <img src="/images/OIG.jpg" alt="">
            </div>
            <div class="content-song-detail">
                <div class="content-song-name">eri</div>
                <div class="content-artist">teshome asegd</div>
                <div>
                    <audio src="sounds/Wegdayit - Rega Bey Bereggae.mp3" id="id">
                        <source src="sounds/Wegdayit - Rega Bey Bereggae.mp3" type="audio/mpeg">
                    </audio>
                    <progress class="audioProgress" value="0" max="1"></progress>
                </div>
                    
            </div>
            <div class="content-like">
                <span class="material-symbols-outlined">heart_plus</span><a href="http://localhost:3000/liked.php"></a>
            </div>
            <div class="content-duration">3:36</div>
            <div class="content-kebab">+</div>
        </div>

        <div class="content-track">
            <div class="content-image">
                <img src="/images/OIG.jpg" alt="">
            </div>
            <div class="content-song-detail">
                <div class="content-song-name">coin</div>
                <div class="content-artist">teshome asegd</div>
                <div>
                    <audio src="sounds/coin1.mp3" id="id">
                        <source src="sounds/coin1.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
            <div class="content-like">
                <span class="material-symbols-outlined">heart_plus</span><a href="http://localhost:3000/liked.php"></a>
            </div>
            <div class="content-duration">3:36</div>
            <div class="content-kebab">+</div>
        </div>
        
        <div class="content-track">
            <div class="content-image">
                <img src="/images/OIG.jpg" alt="">
            </div>
            <div class="content-song-detail">
                <div class="content-song-name">wetata</div>
                <div class="content-artist">teshome asegd</div>
                <div>
                    <audio src="sounds/coin1.mp3" id="id">
                        <source src="sounds/Wegdayit - Rega Bey Bereggae.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
            <div class="content-like">
                <span class="material-symbols-outlined">heart_plus</span><a href="http://localhost:3000/liked.php"></a>
            </div>
            <div class="content-duration">3:36</div>
            <div class="content-kebab">+</div>
        </div>
        <!--  -->
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
        
    </div>
                
            </div>
    <section class="player" data-url="">
        <div class="player-controls">
            
            <span class="material-symbols-outlined" id="prevSong">
                skip_previous
            </span>
    
            <span class="material-symbols-outlined" id="playSong" >
            play_arrow
            </span>
    
            <!-- <span class="material-symbols-outlined" id="pauseSong" >
            pause_circle
            </span> -->
            <!--  -->
            <span class="material-symbols-outlined" id="nextSong">
            skip_next
            </span>
            
            <!-- <span class="material-symbols-outlined">
            pause_circle
            </span> -->
        </div>
        <div class="player-info">
            <div class="player-info-image"><img src="../images/OIG.jpg" alt=""></div>
            <div class="player-info-info">
                <div class="player-info-info-name">
                    <div class="player-info-info-info-name">
                        <span>song_name</span> : 
                        <span>Artist</span>
                    </div>
                    <div class="player-info-info-info-duration">3:30</div>
                </div>
                <div class="player-info-info-data"><div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">.</div>
                </div></div>
            </div>
        </div>
    </section>

    </section>
        
    </div>
<script>
var contentTrack=document.querySelectorAll(".content-track");
var likebutton=document.querySelectorAll(".content-like");

var playerimage=document.querySelector(".player-info-image");
var playername=document.querySelector(".player-info-info-info-name");
var playerduration=document.querySelector(".player-info-info-info-duration");

var player=document.querySelector(".player");
var playSong=document.getElementById("playSong");
var pauseSong=document.getElementById("pauseSong");
var nextSong=document.getElementById("nextSong");
var prevSong=document.getElementById("prevSong");

var audio=document.getElementById("id");
var first=0;

var progress;

contentTrack.forEach(function(track){
    track.addEventListener("click",function(e){
        
        //  attempt 1 to stop a song when another is played
        // if(!first)
        //     first=1;
        // else
        //     audio.pause();
        //  attempt 1 to stop a song when another is played
            if(!audio.paused){
                audio.pause();
                audio=track.children[1].children[2].children[0];
                playerimage.children[0].setAttribute("src",track.children[0].children[0].getAttribute("src"));
                playername.children[0].textContent=track.children[1].children[0].textContent;
                playername.children[1].textContent=track.children[1].children[1].textContent;
                playerduration.textContent=(track.children[3].textContent);
                audio.play();
                // var updateProgressBar = setInterval(function() {
                //     progress = audio.currentTime / audio.duration;
                //     progressBar.value = progress;
                //     if (progress >= 1) {
                //       clearInterval(updateProgressBar);
                //       audio.pause();
                //       audio.currentTime = 0;
                //       progressBar.value = 0;
                //       playButton.innerHTML = "Play";
                //     }
                // },100);
            }
            else
            {
                audio=track.children[1].children[2].children[0];
                playerimage.children[0].setAttribute("src",track.children[0].children[0].getAttribute("src"));
                playername.children[0].textContent=track.children[1].children[0].textContent;
                playername.children[1].textContent=track.children[1].children[1].textContent;
                playerduration.textContent=(track.children[3].textContent);
                if(audio.duration > 0 && !audio.paused)
                {
                    audio.pause();
                    playSong.textContent="pause_circle";
                }
                else
                {
                    audio.play();
                    playSong.textContent="play_arrow";
    
                }
                // clearInterval(updateProgressBar);
    
                player.setAttribute("data-url",track.getAttribute("data-url"));
                console.log(player.getAttribute("data-url"));
            }
            

        })
    })

playSong.addEventListener("click",function(e){
    // audio.play();
    if(audio.duration > 0 && !audio.paused)
    {
        audio.pause();
        e.target.textContent="pause_circle";
    }
    else
    {
        audio.play();
        e.target.textContent="play_arrow";
    }
})

likebutton.forEach(function(like) {
  like.addEventListener('click', function(e) {
    var liked_song = like.children[0].getAttribute('data-id');
    console.log(liked_song);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        like.innerHTML = "";
      }
    };
    xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']?>", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("liked_song=" + liked_song);
  });
});
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_POST['liked_song'])) {
        header("Location: http://localhost:3000/index.php");
        // exit;
    } else {
        $liked_song = $_POST['liked_song'];
        $sql = "INSERT INTO likes VALUES (3,$liked_song);";
        if($conn->query($sql))
        echo "<script>document.body.innerHTML = '<h1>aaaaaaaaaaaaaaaaaaaaaaa</h1>';</script>";
        else
        echo $conn->error;
    }
}
?>
</body>
</html>
<?php $conn->close()?>