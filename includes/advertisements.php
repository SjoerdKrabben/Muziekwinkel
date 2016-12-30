<?php
$dir = "images/advertenties";

$adverts = scandir($dir);
$adverts = array_diff($adverts, array(".", ".."));
?>

<div class="advertising-main">
	<div class="advertising-sub">
		<img src="images/advertenties/<?php echo $adverts[array_rand($adverts)]; ?>" alt="advertentie"></img>
	</div>
</div>
