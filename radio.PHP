<?php 
include 'view/headers.php';
include 'view/top.php';
$filename = "Wegdayit - Rega Bey Bereggae.mp3";

// Open the MP3 file and read its contents
// $file = fopen($filename, "r");
// $data = fread($file, filesize($filename));
// fclose($file);

// Find the position of the "duration" frame in the ID3v2 tag
$pos = strpos($data, "TLEN");

if ($pos === false) {
    // If the "duration" frame is not found, try to find the Xing header
    $pos = strpos($data, "Xing");

    if ($pos === false) {
        // If the Xing header is not found, assume a duration of 0
        $duration = 0;
        echo "not found\n";
    } else {
        // If the Xing header is found, extract the duration from it
        $data = substr($data, $pos + 4, 4);
        $duration = hexdec(bin2hex($data));
    }
} else {
    // If the "duration" frame is found, extract the duration from it
    $data = substr($data, $pos + 4, 4);
    $duration = hexdec(bin2hex($data));
}

// Output duration in minutes and seconds
echo "Duration: " . gmdate("i:s", $duration);
?>
<!-- <div class="test">
<p>test FM</p>
<audio controls>
    <source src="http://stream2.305stream.com:8042/live" type="audio/mpeg">
    Your browser doesn't support the HTML5 <audio> tag.
        </audio>
    </div> -->
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
<div class="sheger">
<p>SHEGER FM</p>
<audio controls>
    <source src="http://stream.zenolive.com/cwkxynwagt5tv" type="audio/mpeg">
    Your browser doesn't support the HTML5 <audio> tag.
        </audio>
    </div>
    <br>
    <div class="afro">

        <p>AFRO FM</p>
        <audio controls>
            <source src="http://stream.zeno.fm/fu367ky6hkeuv" type="audio/mpeg">
            Your browser doesn't support the HTML5 <audio> tag.
        </audio>    
    </div>
    <div class="anime">
        <p>anime FM</p>
        <audio controls>
            <source src="http://audio.misproductions.com/japan128k" type="audio/mpeg">
            <!-- Your browser doesn't support the HTML5 <audio> tag. -->
        </audio>
    </div>
    <div class="Jazz">
        <p>jazz FM</p>
        <audio controls>
            <source src="http://64.95.243.43:8002/stream/1/" type="audio/mpeg">
            <!-- Your browser doesn't support the HTML5 <audio> tag. -->
        </audio>
    </div>
    <div class="Jazz">
        <p>jazz FM</p>
        <audio controls>
            <source src="http://144.217.158.59:5120/stream/1/" type="audio/mpeg">
            <!-- Your browser doesn't support the HTML5 <audio> tag. -->
        </audio>
    </div>
    <!-- #EXTINF:-1 tvg-logo="http://radio.pervii.com/im/0/1562988670.jpg" group-title="JAZZ Radio - radio.pervii.com", Smooth Jazz Florida Worldwide - 128 kbit/s
http://144.217.158.59:5120/stream/1/ -->
    <div class="rap">
        <p>Rap FM</p>
        <audio controls>
            <source src="http://streams.bigfm.de/bigfm-oldschool-128-mp3" type="audio/mpeg">
            <!-- Your browser doesn't support the HTML5 <audio> tag. -->
        </audio>
    </div>
    <!-- #EXTINF:-1 tvg-logo="http://radio.pervii.com/logo/94123.jpg" group-title="RAP Radio - radio.pervii.com", bigFM Oldschool Rap and HipHop - 128 kbit/s
http://streams.bigfm.de/bigfm-oldschool-128-mp3 -->
    <div class="rap">
        <p>Rap FM</p>
        <audio controls>
            <source src="http://streams.bigfm.de/bigfm-oldschool-64-aac" type="audio/mpeg">
            <!-- Your browser doesn't support the HTML5 <audio> tag. -->
        </audio>
    </div>
    <!-- #EXTINF:-1 tvg-logo="http://radio.pervii.com/logo/94123.jpg" group-title="RAP Radio - radio.pervii.com", bigFM Oldschool - 128 kbit/s
http://streams.bigfm.de/bigfm-oldschool-64-aac
-->
    <div class="ragge">
        <p>ragge FM</p>
        <audio controls>
            <source src="http://s02.whooshserver.net:9091/live.mp3" type="audio/mpeg">
            <!-- Your browser doesn't support the HTML5 <audio> tag. -->
        </audio>
    </div>
    <!-- #EXTINF:-1 tvg-logo="http://radio.pervii.com/im/7/1551266037.jpg" group-title="REGGAE Radio - radio.pervii.com", Vibesfm.net - 96 kbit/s
http://s02.whooshserver.net:9091/live.mp3
-->
    <div class="ragge">
        <p>ragge FM</p>
        <audio controls>
            <source src="http://hd.lagrosseradio.info:8000/lagrosseradio-reggae-192.mp3" type="audio/mpeg">
            <!-- Your browser doesn't support the HTML5 <audio> tag. -->
        </audio>
    </div>
    <!--#EXTINF:-1 tvg-logo="http://radio.pervii.com/logo/97181.jpg" group-title="REGGAE Radio - radio.pervii.com", La Grosse Radio Reggae - Dub Dancehall Roots - From Paris - www.LaGrosseRadio.com - 192 kbit/s
    http://hd.lagrosseradio.info:8000/lagrosseradio-reggae-192.mp3
-->

<div class="jano">
    <p>jano FM</p>
    <audio controls>
        <source src="https://stream-159.zeno.fm/1cyn1as4v68uv?zs=yImzP1vkSCWja-MqfNhVxg" type="audio/mpeg">
        <!-- https://zeno.fm/_next/image/?url=https%3A%2F%2Fimages.zeno.fm%2Fx_coSsapKlumm6aEXNn-8eGe8UaiLb6zlpJZSyuuCpM%2Frs%3Afit%3A320%3A320%2Fg%3Ace%3A0%3A0%2FaHR0cHM6Ly9lZGl0b3IuemVub21lZGlhLmNvbS9yZXNvdXJjZXMvenNfc3RhdGlvbi82MzgxNTMvQ2FyZFdlYnNpdGUvaW1hZ2UucG5n.webp&w=1200&q=75 -->
    </audio>
</div>
<div class="bisrat">
    <p>bisrat FM</p>
    <audio controls>
        <source src="https://stream-159.zeno.fm/1cyn1as4v68uv?zs=yImzP1vkSCWja-MqfNhVxg" type="audio/mpeg">
        <!-- https://zeno.fm/_next/image/?url=https%3A%2F%2Fimages.zeno.fm%2Fasp7NCS89bGnaFljjHVhLnrNVxV6Z1AF8qMslVR7GU0%2Frs%3Afit%3A268%3A268%2Fg%3Ace%3A0%3A0%2FaHR0cHM6Ly9zdHJlYW0tdG9vbHMuemVub21lZGlhLmNvbS9jb250ZW50L3N0YXRpb25zL2FneHpmbnBsYm04dGMzUmhkSE55TWdzU0NrRjFkR2hEYkdsbGJuUVlnSUNBNExMd3pnZ01DeElPVTNSaGRHbHZibEJ5YjJacGJHVVlnSUNRX0tMRHRRb01vZ0VFZW1WdWJ3L2ltYWdlLz91cGRhdGVkPTE2NjE1NzE1ODcwMDA.webp&w=384&q=75 -->
    </audio>
</div>
<div class="Ethio FM 107.8">
    <p>Ethio FM 107.8 FM</p>
    <audio controls>
        <source src="https://stream-159.zeno.fm/72y045deqeruv?zs=NWR3FVc8SbWUTdGL2_uzHQ" type="audio/mpeg">
        <!-- Your browser doesn't support the HTML5 <audio> tag. -->
    </audio>
</div>
<div class="walta">
    <p>walta </p>
    <audio controls>
        <source src="https://stream-154.zeno.fm/t5td4ky6hkeuv?zs=TzRUw_7XQbaIA8cEXbBt_g" type="audio/mpeg">
        <!-- https://zeno.fm/_next/image/?url=https%3A%2F%2Fimages.zeno.fm%2F9I98ubcjY1NFS-7DI09VXLbslkHcDFsPBBDo3a6DgUQ%2Frs%3Afit%3A240%3A240%2Fg%3Ace%3A0%3A0%2FaHR0cHM6Ly9zdHJlYW0tdG9vbHMuemVub21lZGlhLmNvbS9jb250ZW50L3N0YXRpb25zL2FneHpmbnBsYm04dGMzUmhkSE55TWdzU0NrRjFkR2hEYkdsbGJuUVlnSURBX0lLMWhnc01DeElPVTNSaGRHbHZibEJ5YjJacGJHVVlnSUNBZ0lEeWlBb01vZ0VFZW1WdWJ3L2ltYWdlLz91cGRhdGVkPTE2NjE3NjM1MDUwMDA.webp&w=1200&q=100
 -->
    </audio>
</div>
<div class="ebc">
    <p>ebc </p>
    <audio controls>
        <source src="https://stream-156.zeno.fm/rb6wbrap7yzuv?zs=HdNGbcyZTUWhaRRIUg-e-w" type="audio/mpeg">
        <!-- https://zeno.fm/_next/image/?url=https%3A%2F%2Fimages.zeno.fm%2F9I98ubcjY1NFS-7DI09VXLbslkHcDFsPBBDo3a6DgUQ%2Frs%3Afit%3A240%3A240%2Fg%3Ace%3A0%3A0%2FaHR0cHM6Ly9zdHJlYW0tdG9vbHMuemVub21lZGlhLmNvbS9jb250ZW50L3N0YXRpb25zL2FneHpmbnBsYm04dGMzUmhkSE55TWdzU0NrRjFkR2hEYkdsbGJuUVlnSURBX0lLMWhnc01DeElPVTNSaGRHbHZibEJ5YjJacGJHVVlnSUNBZ0lEeWlBb01vZ0VFZW1WdWJ3L2ltYWdlLz91cGRhdGVkPTE2NjE3NjM1MDUwMDA.webp&w=1200&q=100-->
    </audio>
</div>
<!-- from other file -- /view/top.php -->
<?php 
    include 'view/bottom.php'
?>

