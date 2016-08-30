<?php include('arrays.php'); ?>
<ul>
	<?php 
	foreach  ($nav_items as $item) {
		echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
	}
	
	?>
</ul>