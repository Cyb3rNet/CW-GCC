<?php


include("Pydj.inc.php");


// Pydj
// Generates HTML documents


$sTitle = "My first Pydj document";


$pydj = new Pydj($sTitle);

$sStyle = <<<STYLE
	color:#666;
	text-decoration:underline;
STYLE;

$pydj->Tag("h1")->Attr("style", $sStyle)->Content("Hello World!");

$pydj->Tag("a")->Attr("href", "http://www.github.com")->Content("github.com");

$sStyle = <<<STYLE
	border:1px solid #000;
	margin:10px;
	padding:10px;
STYLE;

$pydj->Tag("div")->Tag("p")->Attr("style", $sStyle)->Content("This is a paragraph in a div.");

$pydj->Flush();


?>