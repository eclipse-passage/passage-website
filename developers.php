<?php 
  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();
	include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Passage Getting Involved";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<ul>
<li>
	<a href="https://wiki.eclipse.org/Passage">
	Getting started with Passage Licensing System</a>
</li>
<li>
    <a href="https://github.com/eclipse/passage/">Browse the Git repository</a><br>
</li>
<li>
    <a href="https://dev.eclipse.org/mailman/listinfo/passage-dev">
    Passage Developers Mailing List</a><br>
</li> 
</ul>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>