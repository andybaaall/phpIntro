<!-- so we can write html in a php file, but we cannot write php in an html file  -->
<!-- furthermore, php files will only render html if they're delivered through a server  -->

<!-- if the server contains both an html and php file called 'index', the html file will be prioritised -->
<!-- we're only ever going to be writing .php files; get out of the habit of writing 'index.html', 'about.html' etc -->

<?php
	// php goes inside this tag, which indicates that we're writing php, rather than html

	// display_errors
	// post_max_size
	// upload_max_filesize
	//
	// these values can be edited in <Configuration File (php.ini) Path> eg. /etc/php/7.0/apache2
	// 'sudo nano -c php.ini' (-c tells us which line we're editing)

	// phpinfo();

	// variables in php
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
	die($string);	// this line prints out $string, then stops the script. Kind of like 'pause' in Chrome
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
	</body>
</html>
