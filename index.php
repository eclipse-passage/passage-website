<?php

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	$localVersion = false;

	$titlePage = "Eclipse Technology Passage";

	// 	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="bigbuttons">
		<h3>Primary Links</h3>
			<ul>
			<li><a id="buttonDownload" href="downloads.php" title="Download">
					Eclipse Passage Distribution</a></li>
			<li><a id="buttonDocumentation" href="documentation.php" title="Documentation">
					Tutorials, Reference Documentation</a></li>
			<li><a id="buttonSupport" href="support.php" title="Support">
					Bug Tracker, Newsgroup</a></li>
			<li><a id="buttonInvolved" href="developers.php" title="Getting Involved">
					Git, Workspace Setup, Wiki, Committers</a></li>
			</ul>
	</div>
	<div id="midcolumn">
	<h3>Eclipse Passage (License Management Solution)</h3>
	<div id="introText">

<p>
	The Eclipse Passage project aims to provide rich and easily adaptable capabilities to define and control licensing constraints.
	<p/>
	The Eclipse Passage represents several sets of components for license management:
	<p/>
	<li>Licensing Runtime Interfaces</li>
	<li>Licensing Operator Client</li>
	<li>Licensing Back-end Server</li>
	<p/>
	<p/>

	Eclipse Passage is primary focused to support OSGi-based products:
	<li>Capability-based licensing constraints definitions</li>
	<li>Component-based licensing constraints definitions</li>
	<li>More to come</li>

	Easy to use, simple to integrate, cheap to maintain.

</p>
<img
    class="displayed"
    src="/passage/images/snapshot.png"
    height="550"
    alt="Eclipse Passage Snapshots"
    border="0"/>

</div>
</div>

<div id="rightcolumn">

<div>
<h3>Current Status</h3>
<p></p>
</div>
<div id="headlines">
<h3>Eclipse Passage is under development: version 0.4.0 will be released soon</h3>
</div>
</div>
EOHTML;
	# Generate the web page
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/passage/style.css"/>');
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $titlePage, $html);

?>
