<?php

require('./checklogin.php');

/* This page pulls double duty: it submits items (handed to it from add.php) to the database, and also provides a bit of feedback for the user that their submission went through. For efficiency's sake, all of the sections use this page to add new entries -- what's presented to the user changes depending on the section chosen. */

/* First we figure out what section we're working on, via the "type" passed from add.php. And we declare some global variables. */

	$type = $_POST["type"];
	
	$typehead = null;
	$titletitle = null;
	$descriptitle = null;
	$tablename = null;

/* Grabbing the functions file. */

	require('./cms_functions.php');

/* Asking the custom typevars() function to return a few variables based on $type. */

	typevars($type);

/* Assuming everything's kosher with the type, next we begin to assemble the entry for sending to the database. First, the date and time of this submission. */

	$submitted = date("Y-m-d H:i:s");
	
/* htmlspecialchars() neutralizes potentially dangerous code from submissions. A security measure. */

	$title = htmlspecialchars($_POST["title"]);
	$description = htmlspecialchars($_POST["description"]);

/* If one of the form fields was left blank, we catch the error here. This might be better served by a javascript onSubmit check for blank fields before the form is submitted. */

	if (!$title or !$description) {
		die("<p>One or both fields were left blank in the form. Please return to the previous page and correct before resubmitting.</p>");
	}
	
/* Here's the database connection info that will enable us to submit our new entry. */

	require('./cms_dbconnect.php');

/* Now we begin our SQL connection. I like to include unique messages in case of errors, making it easier to figure out where the problem lies. */

	$link = mysql_connect($dbhost, $dbuser, $dbpw) or die('Could not connect to database.');
	mysql_select_db($db) or die('Could not select database.');

/* Here we prepare to renumber the existing entries. */

	$ordquery = "SELECT id, ordering FROM $tablename ORDER BY ordering";
	$ordresult = mysql_query($ordquery) or die("Error with the order query: " . $mysql_error());

/* This renumbers everything so that it shows up after the new entry. Extremely spiffy. ;) */

	$ordbase = 2;

	while ($entries = mysql_fetch_row($ordresult)) {
		$thisid = $entries[0];
		$thisquery = "UPDATE $tablename SET ordering = $ordbase WHERE id = $thisid";
		$thisresult = mysql_query($thisquery) or die("Error with the renumber query: " . $mysql_error());
		$ordbase = $ordbase + 1;
	}

/* Next we insert the new entry into the database. */

	$query = "INSERT INTO $tablename (`id`, `submitted`, `$titletitle`, `$descriptitle`, `ordering`, `visible`) VALUES (\"\", \"$submitted\", \"$title\", \"$description\", \"1\", \"1\")";
	$result = mysql_query($query) or die("Error with the query:<br />$query");

	
/* And that's it! Assuming no errors above, the rest is simple feedback for the user. */

	mysql_close($link);

?>

<html>
	<head>
		<title>
			IEWL new <?php echo $typehead; ?> entry added
		</title>
		<link rel="stylesheet" href="./cms_style.css" type="text/css" charset="utf-8" />
	</head>
	<body>
		<h1>
			IEWL CMS
		</h1>
		<h2>
			New <?php echo $typehead; ?> entry added
		</h2>
		<div id="content">
<?php
		echo "<p class=\"service_title\">\n";
		echo "".$title."\n";
		echo "</p>\n";
		echo "<p class=\"service_description\">\n";
		echo "".$description."\n";
		echo "</p>\n";
		echo "<p><em>Submitted: $submitted</em></p>\n";
?>
		</div>
		<p><strong>Entry added.</strong></p>
		<ul>
			<li><a href="./">Return to CMS index</a></li>
			<li><?php echo "<a href=\"./add.php?type=$type\">Add another $typehead entry...</a>"; ?></li>
		</ul>
		<hr />
		<p>
			<a href="./logout.php">Log out of CMS...</p>
		</p>
	</body>
</html>
