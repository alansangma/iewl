<?php
require('./checklogin.php');

?>
<html>
	<head>
		<title>
			IEWL CMS
		</title>
		<link rel="stylesheet" href="./cms_style.css" type="text/css" charset="utf-8">
	</head>
	<body>
		<h1>
			IEWL CMS Index
		</h1>
		<table border="1" cellspacing="0" cellpadding="10">
			<tr>
				<th>
					Sections
				</th>
				<th colspan="3">
					Activities
				</th>
			</tr>
			<tr>
				<td>
					Weight Loss <a href="../weight_loss.php">(view)</a>
				</td>
				<td>
					<a href="add.php?type=wl">Add entry</a>
				</td>
				<td>
					<a href="edit.php?type=wl">Edit public entries</a>
				</td>
				<td>
					<a href="edit.php?type=wl&amp;invis=1">Edit all</a>
				</td>
			</tr>
			<tr>
				<td>
					Family Medicine <a href="../family_medicine.php">(view)</a>
				</td>
				<td>
					<a href="add.php?type=fm">Add entry</a>
				</td>
				<td>
					<a href="edit.php?type=fm">Edit public entries</a>
				</td>
				<td>
					<a href="edit.php?type=fm&amp;invis=1">Edit all</a>
				</td>
			</tr>
			<tr>
				<td>
					Recognition <a href="../recognition.php">(view)</a>
				</td>
				<td>
					<a href="add.php?type=ts">Add entry</a>
				</td>
				<td>
					<a href="edit.php?type=ts">Edit public entries</a>
				</td>
				<td>
					<a href="edit.php?type=ts&amp;invis=1">Edit all</a>
				</td>
			</tr>
		</table>
		<hr />
		<p>
			<a href="../">Return to main index</a>
		</p>
		<hr />
		<p>
			<a href="./logout.php">Log out of CMS...</p>
		</p>
	</body>
</html>
