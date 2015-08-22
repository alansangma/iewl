<?php

require('./checklogin.php');

/* This page pulls double duty: it submits edited items (handed to it from edit.php) to the database, and also provides a bit of feedback for the user that their submission went through. For efficiency's sake, all of the sections use this page to add new entries -- what's presented to the user changes depending on the section chosen. */

/* First we figure out what section we're working on, via the "type" passed from edit.php. And we declare some global variables. */

	$type = $_POST["type"];
	
	$typehead = null;
	$titletitle = null;
	$descriptitle = null;
	$tablename = null;

/* Grabbing the functions file. */

	require('./cms_functions.php');

/* Asking the custom typevars() function to return a few variables based on $type. */

	typevars($type);

/* Assuming everything's kosher with the type, next we begin to assemble the entry for sending to the database. First, $id and the date and time of this submission. */

	$id = $_POST["id"];
	$submitted = $_POST["submitted"];
	
/* htmlspecialchars() neutralizes potentially dangerous code from submissions. A security measure. */

	$title = htmlspecialchars($_POST["title"]);
	$description = htmlspecialchars($_POST["description"]);

/* If one of the important form fields was left blank, we catch the error here. This might be better served by a javascript onSubmit check for blank fields before the form is submitted. */

	if (!$title or !$description) {
		die("<p>One or both of the title and description fields were left blank in the form. Please return to the previous page and correct before resubmitting.</p>");
	}

/* Checking the desired visibility of this item. */

	$visible = $_POST["visible"];

/* Checking to see if the user wants to change the position of this item. */

	$oldposition = $_POST["ordering"];
	$moveorder = $_POST["moveorder"];

	if ($moveorder == $oldposition) {
		$ordering = $oldposition;		// the old position is maintained
	} else {
		$ordering = $moveorder;			// a new position is assigned
		$changeothers = 1;				// we will be adjusting other items' order numbers
	}

/* Here's the database connection info that will enable us to submit our new entry. */

	require('./cms_dbconnect.php');
	
/* Now we begin to construct our SQL query. I like to include unique messages in case of errors, making it easier to figure out where the problem lies. */

	$link = mysql_connect($dbhost, $dbuser, $dbpw) or die("Could not connect to database: " . $mysql_error());
	mysql_select_db($db) or die("Error with the query: " . $mysql_error());
	$query = "REPLACE INTO $tablename (`id`, `submitted`, `$titletitle`, `$descriptitle`, `ordering`, `visible`) VALUES (\"$id\", \"$submitted\", \"$title\", \"$description\", \"$ordering\", \"$visible\")";
	$result = mysql_query($query) or die("Error with the query: " . $mysql_error());

/* If changes need to be made to other entries' order numbers, we do it here. */

	if ($changeothers) {
		$ordquery = "SELECT id, ordering FROM $tablename WHERE ordering >= $ordering AND id != $id ORDER BY ordering";
		$ordresult = mysql_query($ordquery) or die("Error with the order query: " . $mysql_error());
		$ordbase = $ordering + 1;

/* This renumbers everything after the newly changed entry ordering number, while maintaining the new order. Extremely spiffy. ;) */

		while ($entries = mysql_fetch_row($ordresult)) {
			$thisid = $entries[0];
			$thisquery = "UPDATE $tablename SET ordering = $ordbase WHERE id = $thisid";
			$thisresult = mysql_query($thisquery) or die("Error with the renumber query: " . $mysql_error());
			$ordbase = $ordbase + 1;
		}
	}

/* And that's it! Assuming no errors above, the rest is simple feedback for the user. */

	mysql_close($link);

?>

<html>
	<head>
		<title>
			IEWL existing <?php echo $typehead; ?> entry edited
		</title>
		<link rel="stylesheet" href="./cms_style.css" type="text/css" charset="utf-8" />
	</head>
	<body>
		<h1>
			IEWL CMS
		</h1>
		<h2>
			Existing <?php echo $typehead; ?> entry edited
		</h2>
		<div id="content">
<?php
		echo "<p class=\"service_title\">\n";
		echo "".$title."\n";
		echo "</p>\n";
		echo "<p class=\"service_description\">\n";
		echo "".$description."\n";
		if ($visible) {
			echo "<br /><br />(public)\n";
		} else {
			echo "<br /><br />(not public)\n";
		}
		echo "<br /><br />(ordering: #$ordering)\n";
		echo "</p>\n";
?>
		</div>
		<p><strong>Entry edited.</strong></p>
		<ul>
			<li><a href="./">Return to CMS index</a></li>
			<li><?php echo "<a href=\"./edit.php?type=$type&amp;invis=1\">Edit another $typehead entry...</a>"; ?></li>
		</ul>
		<hr />
		<p>
			<a href="./logout.php">Log out of CMS...</p>
		</p>
	</body>
</html>
