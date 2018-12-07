<?php  			
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
 	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Passage Documentation";
$html  = <<<EOHTML
	<div id="midcolumn">
	<h2>$pageTitle</h2>
	<ul>
		<li>
			<a href="releases">Eclipse Release Documentation</a><br>
				Formal Eclipse release review documentation and IP Logs for the latest Passage releases.
		</li>
	</ul>
	</div>
EOHTML;
# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
