<?php

require('./checklogin.php');

/* This is the script with which the user edits existing items in the database. It sends its data to edit_submit.php. */

/* For efficiency's sake, all of the sections use this page to edit entries -- what's presented to the user changes depending on the section chosen on the CMS index page. */

/* First we figure out what section we're working on, via the "type" passed from the main index page. And we declare some global variables. */

	$type = $_GET["type"];
	$invis = $_GET["invis"];
	
	$typehead = null;
	$titletitle = null;
	$descriptitle = null;
	$tablename = null;

/* Grabbing the functions file. */

	require('./cms_functions.php');
	
/* Asking the custom typevars() function to return a few variables based on $type. */

	typevars($type);

/* Assuming that's okay, here's the database connection that will enable us to retrieve all existing entries. */

	require('./cms_dbconnect.php');

/* We construct a database query to grab all entries for the appropriate section. */

	$link = mysql_connect($dbhost, $dbuser, $dbpw) or die("Could not connect to database: ".$mysql_error());
	mysql_select_db($db) or die("Error with the query: " . $mysql_error());
	if ($invis) {
		$query = "SELECT * FROM $tablename ORDER BY ordering";
	} else {
		$query = "SELECT * FROM $tablename WHERE visible = 1 ORDER BY ordering";
	}
	$result = mysql_query($query) or die("Error with the query: " . $mysql_error());
	/*
	$ordquery = "SELECT COUNT(*) FROM $tablename";
	$ordresult = mysql_query($ordquery) or die("Error with the count query: " . $mysql_error());
	$tablerows = mysql_fetch_row($ordresult);
	$numrows = $tablerows[0];
*/
	$ordquery = "SELECT `ordering` FROM $tablename ORDER BY ordering";
	$ordresult = mysql_query($ordquery) or die("Error with the count query: " . $mysql_error());
	$highest = 0;
	$orderings = array();
	while ($tablerows = mysql_fetch_row($ordresult)) {
		$orderings[] = $tablerows[0];
	}
	for ($or = 0; $or < count($orderings); $or++) {
		if ($orderings[$or] > $highest) {
			$highest = $orderings[$or];
		}
	}
?>

<html>
	<head>
		<title>
			IEWL CMS Edit existing <?php echo $typehead; ?> entries
		</title>
		<link rel="stylesheet" href="./cms_style.css" type="text/css" charset="utf-8" />
	</head>
	<body>
	<?php
	?>
		<h1>
			IEWL CMS
		</h1>
		<h2>
			Edit existing <?php echo $typehead; ?> entries
		</h2>
		<p><a href="./">Cancel and return to CMS index...</a></p>	
		<div id="content">
			<table id="edittable">
				<tr>
					<th>
						<?php echo "$titletitle"; ?>
					</th>
					<th>
						<?php echo "$descriptitle"; ?>
					</th>
					<th>
						public?
					</th>
					<th>
						order
					</th>
					<th>
						<br />
					</th>
				</tr>
<?php

/* We begin a loop to create an HTML form for each entry. */
	
	while ($entries = mysql_fetch_row($result)) {
		if ($entries[5]) {
			echo "<tr class=\"visible\">\n";
		} else {
			echo "<tr class=\"invisible\">\n";			
		}

		echo "<form action=\"edit_submit.php\" method=\"POST\" accept-charset=\"utf-8\">\n";
		echo "<input type=\"hidden\" name=\"type\" value=\"$type\">\n";
		echo "<input type=\"hidden\" name=\"id\" value=\"$entries[0]\">\n";
		echo "<input type=\"hidden\" name=\"submitted\" value=\"$entries[1]\">\n";
		echo "<input type=\"hidden\" name=\"oldposition\" value=\"$entries[4]\">\n";
		echo "<td>\n";
		echo "<input type=\"text\" name=\"title\" value=\"$entries[2]\">\n";
		echo "<br /><em>$entries[1]</em>\n";
		echo "</td>\n";
		echo "<td>\n";
		echo "<textarea name=\"description\" rows=\"20\" cols=\"40\">$entries[3]</textarea>\n";
		echo "</td>\n";
		echo "<td>\n";
		echo "<input type=\"radio\" name=\"visible\" value=\"1\"";
		if ($entries[5]) {
			echo " checked";
		}
		echo ">Yes<br />\n";
		echo "<input type=\"radio\" name=\"visible\" value=\"0\"";
		if (!$entries[5]) {
			echo " checked";
		}
		echo ">No\n";
		echo "</td>\n";
		echo "<td>\n";
		echo "<select size=\"1\" name=\"moveorder\">\n";
		for ($ord = 0; $ord <= $highest + 1; $ord++) {
			echo "<option value=\"$ord\"";
			if ($entries[4] == $ord){
				echo " selected";
			}
			echo ">$ord</option>\n";
		}
		echo "</select>\n";
		echo "</td>\n";
		echo "<td class=\"edittablebutton\">\n";
		echo "<input type=\"submit\" value=\"Submit...\">\n";
		echo "</td>\n";
		echo "</form>\n";
		echo "</tr>\n";
	}
?>
			</table>
		</div>
		<p><a href="./">Cancel and return to CMS index...</a></p>	
		<hr />
		<p>
			<a href="./logout.php">Log out of CMS...</p>
		</p>
	</body>
</html>
