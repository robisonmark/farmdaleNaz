<?php 
	require_once('./includes/functions.php');
	render('/header');
	//  require_once("./views/header.php");
?>
<main>
	<?php include "views/hero.php" ?>

	<?php include "views/welcome.php" ?>

	<?php include "views/new.php" ?>

	<?php include "views/ministries.php" ?>

	<?php include "views/events.php" ?>
	
	<?php include "views/about.php" ?>
	
		<?php include "views/beliefs.php" ?>
	
	<?php include "views/picture-bar.php" ?>

	<?php include "views/staff.php" ?>

	<?php include "views/map.php" ?>

	<?php include "views/baseline.php" ?>

<?php render('/footer');
// require_once("./views/footer.php"); ?>