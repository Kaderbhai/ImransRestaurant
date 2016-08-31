<?php 
	define ('TITLE', 'Menu - Imrans Restaurant');
	include('include/header.php'); 
?>
	
	<div id="menu-items">
	
		<h1>Our Discusting Menu!</h1>
		<p>Menu is here want it, click it!</p>
		
		<hr>
		
		<ul>
			<?php foreach ($menu_items as $dish => $item) { ?>
			
			<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a> <sup>£</sup><?php echo $item['price']; ?></li>
			
			
			<?php }; ?>
		</ul>
	
	</div>

	
<?php	
	include('include/footer.php');	
?>
