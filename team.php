<?php 
	define ('TITLE', 'Team - Imrans Restaurant');
	include('include/header.php');
?>
	
	<div id="team-members" class="cf">
	
		<h1>Our Team at Imran's</h1>
		<p>Imran's Team are a mix of defunct useless individuals whos dislike for one another is only superceded by
		thier distaste for you.</p>
		
		<hr>
		
		<?php
			foreach ($team_members as $member) { 
		?>				
			
			<div class="member">
				<img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
				<h2><?php echo $member['name']; ?></h2>
				<p><?php echo $member['description']; ?></p>
			</div>
			
		<?php	
			};
		?>
	
	</div>

<?php
	include('include/footer.php');
?>