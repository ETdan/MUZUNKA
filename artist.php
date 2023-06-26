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
include 'connection.php';


$sql="SELECT * from artists;";
$result=$conn->query($sql);
?>
<h1 class="home-title">ARTISTS</h1>

<div class="radio-setup">

    <?PHP 
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo"
                    <div class='content-track'>
                        <div class='content-image'>
                            <img src='$row[artist_image_url]'>
                        </div>
                        <div class='content-song-detail'>
                            <div class='content-song-name'>$row[artist_name]</div>
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