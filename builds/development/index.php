<?php 
	require_once('./includes/functions.php');
	render('/header');
	//  require_once("./views/header.php");
?>
		<main>
			<?php include "./views/hero.php" ?>
			<?php include "./views/welcome.php" ?>
			<?php include "./views/new.php" ?>
			<?php include "./views/blade-ministries.php" ?>
			<?php include "./views/blade-events.php" ?>
			<?php include "./views/blade-beliefs.php" ?>
			<?php include "./views/staff.php" ?>
			<?php include "./views/picture-bar.php" ?>
			<?php include "./views/map.php" ?>
			<?php include "./views/footer.php" ?>
	</body>
</html>