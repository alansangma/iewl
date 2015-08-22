// JavaScript Document
// Fixes April 06 change to IE's handling of ActiveX, Flash, and other controls
// from: http://www.amarasoftware.com/flash-problem.htm (among others)
// Put this in pages:
// <!-- script type="text/javascript" src="include/ieupdate.js" --><!-- /script -->

theObjects = document.getElementsByTagName("object");
for (var i = 0; i < theObjects.length; i++) {
	theObjects[i].outerHTML = theObjects[i].outerHTML;
}