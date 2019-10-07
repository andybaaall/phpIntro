<!-- so we can write html in a php file, but we cannot write php in an html file  -->
<!-- furthermore, php files will only render html if they're delivered through a server  -->

<!-- if the server contains both an html and php file called 'index', the html file will be prioritised -->
<!-- we're only ever going to be writing .php files; get out of the habit of writing 'index.html', 'about.html' etc -->
<?php
	// php goes inside this tag, which indicates that we're writing php, rather than html
	// anything we want to happen on load is going to go in this first php tag
	// (because php is a synchronous language)

	// display_errors
	// post_max_size
	// upload_max_filesize
	//
	// these values can be edited in <Configuration File (php.ini) Path> eg. /etc/php/7.0/apache2
	// 'sudo nano -c php.ini' (-c tells us which line we're editing)

	$title = 'Intro';
	require('templates/header.php');

	// phpinfo();

	// $phpinfo 		// there are no reserved words in PHP!
	$title = 'Introduction to PHP';

	$string 	= '"this is a string of text"';
	$integer 	= 3;		// whole numbers only
	$float 		= 3.254;	// anything that's not a whole number
	$boolean 	= false;

	$array 		= array('item 0', 'item 1', 'item 2');

		// objects in php
		class Me {
			function Me(){
				$this->name = 'Andy';
				$this->gender = 'Male';
			}
		}

		$myself = new Me();
		// echo $myself->name;

		// null
		// null != nothing
		$null = null;

		// constants
		define('PAGE_HEADER', 'Hello, world! This message was defined in a constant variable');	// define(); takes two values: an element's name, and the value we want to define

	// var dumping
	echo '<pre>';
	var_dump($array);
	echo '</pre>';

	// printing
	echo '<pre>';
	print_r($array);
	echo '</pre>';

	// die();
	// die($string);	// this line prints out $string, then stops the script. Kind of like 'pause' in Chrome

	// if / else in php
	if ($boolean === true) {
		echo '$boolean is set to true';
	} else {
		echo '$boolean is set to false';
	}

	// // loops in php
	// // php entities don't have a .length property, so we use the count() function
	// https://www.php.net/manual/en/function.count.php

	for ($i=0; $i < count($array); $i++) {
		echo '<br>';
		echo $array[$i];
	}

	// associative arrays!
	// kind of like index cards!
	// we can re-use our keys in other arrays
	// furthermore, we can nest associative arrays -
	// the key 'simon' could take the value array('colour' => red etc. etc.);
	echo '<br>';
	$favouriteColours = array(
		'simon' => 'green',
		'brayden' => 'red',
		'ryley' => 'blue'
	);

	// when we're working with associative arrays, we're going to use foreach() a lot
	foreach($favouriteColours as $person => $value){
		echo '<br>';
		echo $person . '\'s favourite colour is ' . $value; // (we concatenate in php using .)
	}

	// foreach() takes up to three args - an array, the key, and the value.
	// if there are only two args, the first value will be the array and the second will be the value
	// if there are three args, the first value will be the array, the second will be the key, and the third will be the value
	// the first two args are separated by 'as'; the second two are separated by '=>'

	// objects are hecka clunky in php, so we're just going to use assoc. arrays from now on:
	$class = array(
		'Simon' => array(
			'age' => 19,
			'colour' => 'green',
			'food' => 'Sushi',
			'town' => 'Ngaio',
			'fullLicence' => false
		),
		'Brayden' => array(
			'age' => 21,
			'colour' => 'purple',
			'food' => 'Sushi',
			'town' => 'Brown Owl',
			'fullLicence' => true
		),
		'Ryley' => array(
			'age' => 19,
			'colour' => 'red',
			'food' => 'Garlic Bread',
			'town' => 'Tawa',
			'fullLicence' => false
		),
		'Andy' => array(
			'age' => 26,
			'colour' => 'blue',
			'food' => 'Fish tacos',
			'town' => 'Lower Hutt',
			'fullLicence' => false
		),
		'Katherine' => array(
		  'age' => 18,
		  'colour' => 'Purple',
		  'food' => 'Pizza',
		  'town' => 'Tawa',
		  'fullLicence' => true
		),
		'Larissa' => array(
		  'age' => 19,
		  'colour' => ' kagreen',
		  'food' => 'food',
		  'town' => 'wadestown',
		  'fullLicence' => false
		),
		'Sophie' => array(
			'age' => 32,
			'colour' => 'peach',
			'food' => 'avocado',
			'town' => 'paraparaumu',
			'fullLicence' => true
		),
		'Annie' => array(
			'age' => 17,
			'colour' => 'blue',
			'food' => 'pizza',
			'town' => 'Taita',
			'fullLicence' => false
		)
	);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title ?></title>
	</head>
	<body>
		<?php
			// look out for stuff like this:
			// Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' in /var/www/html/phpIntro/index.php on line 31
			// often you're looking for an error on the line above the one that threw the error


			echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
		?>

		<h1> <?php echo PAGE_HEADER; ?> </h1>
		<p>Our string variable is: <?php echo $string; ?></p>
		<p>Our integer variable is: <?php echo $integer; ?></p>
		<p>Our float variable is: <?php echo $float; ?></p>
		<p>Our Boolean variable is: <?php echo $boolean; ?></p>
		<p>Our null variable is: <?php echo $null; ?></p>
		<p>Our boolean variable is: <?php echo $boolean; ?></p>
		<p>Our object's 'name' value is: <?php echo $myself->name; ?></p>
		<p>A value in our array is: <?php echo $array[0]; ?></p>
		<br>
		<br>

		<!-- here's one way of rendering information in a PHP array in your HTML -->
		<?php
			// foreach($class as $classMember => $details){
			// 	echo '<div>';
			// 	echo $classMember;
			// 	echo ' ' . $details['age'] . ' years old';
			// 	echo '</div>';
			// }
		?>

		 <!-- ... and here's a more elegant way -->
		<?php foreach($class as $classMember => $details): ?>
			<h3><?php echo $classMember; ?></h3>
			<p><?php echo $details['age']; ?> years old</p>
			<p><?php echo $details['colour']; ?> is their favourite colour</p>
			<p><?php echo $details['town']; ?> is their administrative unit</p>
			<p><?php echo $details['food']; ?> is their favourite food</p>

			<?php if ($details['fullLicence'] === true): ?>
				<p>They have their full licence</p>

		 	<?php else: ?> <!-- we don't need to close 'else:'; that's covered by 'endif;' -->
				<p>They do not have their full licence</p>
			<?php endif; ?>
		<?php endforeach; ?>





	</body>
</html>
