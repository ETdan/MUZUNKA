<?php
// Retrieve the URLs or file locations of music files from your database
$urls_or_file_locations = array(
  "../sounds/coin1.mp3",
  "coin1.mp3",
  "../coin1.mp3",
  "coin1.mp3"
);
?>

<!-- Loop through the URLs or file locations and create an audio element for each one -->
<?php foreach ($urls_or_file_locations as $url_or_file_location) { ?>
  <audio controls>
    <source src="<?php echo $url_or_file_location; ?>" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
<?php } ?>