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
<?php include'connection.php';

$sql="SELECT * from albums;";
$result=$conn->query($sql);
?>
<div class="radio-setup">
    <!-- <div class="content-track">
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
    </div> -->

    <?PHP 
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo"
                    <div class='content-track'>
                        <div class='content-image'>
                            <img src='$row[album_cover_image_url]'>
                        </div>
                        <div class='content-song-detail'>
                            <div class='content-song-name'>$row[album_title]</div>
                            <div>
                            </div>
                        </div>
                    </div>";
            }
          } else {
            echo "0 results";
          }
    ?>

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
<?php $conn->close()?>