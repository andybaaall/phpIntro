<?php
	$title = 'Home';
	require('templates/header.php');
 ?>

<!-- we could write html like this ...  -->
<!-- <ul> -->
	<!-- <li><a href="index.php">Home</a></li> -->
	<!-- <li><a href="contact.php">Contact</a></li> -->
	<!-- <li><a href="intro.php">Intro</a></li> -->
	<!-- <li><a href="about.php">About</a></li> -->
	<!-- <li><a href="deliveries.php">Deliveries</a></li> -->
<!-- </ul> -->

<!-- ...  or we could create a modular template, like this!  -->
<?php
	// include ('templates/navigation.php');
?>

<?php include ('templates/footer.php'); ?>

<?php
	// require() and include() basically do the same thing.
	// BUT.
	// if include() breaks, the rest of the page will render below the line that throws the error
	// it require() breaks, the whole rest of the page will break
	// so we use require() for stuff that we can't live without.
?>
