<?php


include("lib/Pydj0.2/Pydj.inc.php");
include("lib/PHPMarkdownExtra1.2.4/markdown.php");


ob_start();

include("mds/index.md");

$sMd = ob_get_contents();

ob_end_clean();


$sTitle = "Cyb3r Web | General Coding Conventions";

$oPydj = new Pydj($sTitle);

$sStyle = <<<STYLE
body
{
	font-family:Georgia, serif;
}
h2
{
	border:0px solid #CCC;
	border-top-width:4px;
}
code
{
	font-famyly:courrier;
	background-color:#EEE;
	color:#666;
	border:1px solid #666;
	padding:2px;
	margin:2px;
}
STYLE;

$oPydj->Head()->Style($sStyle);

$oPydj->Tag("div")->HTML(Markdown($sMd));

$oPydj->Flush();

?>