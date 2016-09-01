<?php 
	define ('TITLE', 'Menu Item - Imrans Restaurant');
	include('include/header.php'); 
	
	function strip_bad_char( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
		return $output;
	}
	
	if (isset($_GET['item'])) {
		
		$menu_item = strip_bad_char( $_GET['item'] );
		
		$dish = $menu_items[$menu_item];
		
	}
	
	//Calculate suggested Tip
	function suggested_tip($cost, $tip) {
		
		$total_tip = $cost * $tip;
		
		echo sprintf('%01.2f', $total_tip);
	}
	
?>
	
	<hr>
	
	<div id="dish">
		<h1><?php echo $dish[title]; ?> <span class="price"><sup>£</sup><?php echo $dish[price]; ?></span></h1>
		
		<p><?php echo $dish[blurb]; ?></p>
		
		<br>
		
		<p><strong>Suggested Beverage: <?php echo $dish[drink]; ?></strong></p>
		
		<p><em>Suggested Tip: <sup>£</sup><?php suggested_tip($dish['price'], 0.3); ?></em></p>
		
	</div>
	
	<hr>
	
	<a href="menu.php" class="button previous">&laquo; Back to Menu</a>
	
<?php	
	include('include/footer.php');	
?>

		
