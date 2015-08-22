<?php

/* Common functions for the other CMS scripts. */

function typevars($type) {

/* We set a few variables based on $type, using switch() */

/* $typehead is used in various points, indicating the chosen section for the user. */

/* $titletitle and $descriptitle are used to compensate for the different terminology used in each section: wl and fm are identical to ts in basic structure, but are named (and presented) differently. $tablename is the name of the associated SQL database table. */

/* First, we associate with the global variables. */

	global $typehead;
	global $titletitle;
	global $descriptitle;
	global $tablename;

	switch ($type) {
		case "wl":
			$typehead = "Weight Loss Services";
			$titletitle = "title";
			$descriptitle = "description";
			$tablename = "weightloss";
			break;
		case "fm":
			$typehead = "Family Medicine Services";
			$titletitle = "title";
			$descriptitle = "description";
			$tablename = "familymed";
			break;
		case "ts":
			$typehead = "Recognition";
			$titletitle = "signature";
			$descriptitle = "recognition";
			$tablename = "recognition";
			break;

/* If none of the three valid types were used, the script automatically sends the browser back to the main CMS index, using the header() function. This will only happen if someone manually edits the URL or tries to load this page without specifying a type. */

		default:
			header("Location: ../");
	}

}

?>
