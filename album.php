<?php 
include 'view/headers.php';
echo "<link rel='stylesheet' href='../style/playlist.css'>";
echo "<link rel='stylesheet' href='../style/trackes'>";
echo "<link rel='stylesheet' href='../style/radio.css'>";
?>
<style>
    .home-title{
        font-size: 3em;
        color: orange;
        transition: 2s;
    }
    .home-title:hover{
        color: black;
    }
</style>
<?php 
include 'view/top.php';
?>
<h1 class="home-title">ALBUMS</h1>
<div class="radio-setup">
    <div class="content-track">
            <div class="content-image">
                <img src="/images/Screenshot 2023-06-24 100429.png" alt="">
            </div>
            <div class="content-song-detail">
                <div class="content-song-name">wetata</div>
                <div>
                    <audio src="https://stream-154.zeno.fm/t5td4ky6hkeuv?zs=TzRUw_7XQbaIA8cEXbBt_g" id="id">
                        <source src="sounds/Wegdayit - Rega Bey Bereggae.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
    </div>

    <div class="content-track">
            <div class="content-image">
                <img src="/images/Screenshot 2023-06-24 100429.png" alt="">
            </div>
            <div class="content-song-detail">
                <div class="content-song-name">Sheger FM</div>
                <div>
                    <audio src="http://stream.zenolive.com/cwkxynwagt5tv" id="id">
                        <source src="sounds/Wegdayit - Rega Bey Bereggae.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
    </div>

    <div class="content-track">
            <div class="content-image">
                <img src="/images/Screenshot 2023-06-24 100429.png" alt="">
            </div>
            <div class="content-song-detail">
                <div class="content-song-name">BISRAT FM</div>
                <div>
                    <audio src="https://stream-159.zeno.fm/1cyn1as4v68uv?zs=yImzP1vkSCWja-MqfNhVxg" id="id">
                        <source src="sounds/Wegdayit - Rega Bey Bereggae.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
    </div>
  
    <div class="content-track">
            <div class="content-image">
                <img src="/images/Screenshot 2023-06-24 100429.png" alt="">
            </div>
            <div class="content-song-detail">
                <div class="content-song-name">EBC FM</div>
                <div>
                    <audio src="https://stream-156.zeno.fm/rb6wbrap7yzuv?zs=HdNGbcyZTUWhaRRIUg-e-w"id="id">
                        <source src="sounds/Wegdayit - Rega Bey Bereggae.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
    </div>


</div>
</section><!-- main -->

<!-- june 23 -->

</div><!-- sup-con -->
        <!-- PLAYER -->
    <!-- <script>
function myFunction() {
    var audio = new Audio('sounds/coin1.mp3');
    audio.play();
}
</script> -->
</body>
</html>