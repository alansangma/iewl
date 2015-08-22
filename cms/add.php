<?php

require('./checklogin.php');

/* This is the form the user fills out to submit items to the database. It sends its data to add_submit.php. */

/* For efficiency's sake, all of the sections use this page to add new entries -- what's presented to the user changes depending on the section chosen on the CMS index page. */

/* First we figure out what section we're working on, via the "type" passed from the main index page. And we declare some global variables. */

	$type = $_GET["type"];
	
	$typehead = null;
	$titletitle = null;
	$descriptitle = null;
	$tablename = null;

/* Grabbing the functions file. */

	require('./cms_functions.php');
	
/* Asking the custom typevars() function to return a few variables based on $type. */

	typevars($type);

/* We are going to make a quick query to the database to determine the current ordering situation. */

	require('./cms_dbconnect.php');


/* And that's pretty much it. Nothing fancy on this page, just an exceedingly simple HTML form. */

?>

<html>
	<head>
		<title>
			IEWL CMS Add new <?php echo $typehead; ?> entry
		</title>
		<link rel="stylesheet" href="./cms_style.css" type="text/css" charset="utf-8" />
	</head>
	<body>
		<h1>
			IEWL CMS
		</h1>
		<h2>
			Add new <?php echo $typehead; ?> entry
		</h2>
		<div id="content">
			<form action="add_submit.php" method="POST" accept-charset="utf-8">
				<input type="hidden" name="type" value="<?php echo $type; ?>">
				<p>
					<?php echo $titletitle; ?><br /><input type="text" name="title" value="">
				</p>
				<p>
					<?php echo $descriptitle; ?><br /><textarea name="description" rows="20" cols="60"></textarea>
				</p>
				<p>
					<input type="submit" value="Add...">
				</p>
			</form>
		</div>
		<p><a href="./">Cancel and return to CMS index...</a></p>	
		<hr />
		<p>
			<a href="./logout.php">Log out of CMS...</p>
		</p>
	</body>
</html>
