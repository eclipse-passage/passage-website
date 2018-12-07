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
	<h3>Eclipse Passage (Licensing Tooling)</h3>
	<div id="introText">

<p>
    The Eclipse Passage project aims to provide rich and easily adoptable capabilities to define and control licensing constraints.
    The Eclipse Passage represent several components for licensing processing:
    <li>Licensing Operator Client</li>
    <li>Licensing Runtime Interfaces</li>
    <li>Licensing Backend Server</li>
    Eclipse Passage technology offer to use API for:
	<li>Licensing product definition</li>
	<li>Key pair generation for defined product</li>
	<li>Public key intedification in the user/product locations</li>
    <li>User(profile) definition for the licensing</li>
    <li>Feature and action definition for licensing purpose</li>
    <li>Fuctionality resctriction based on licensing parameters</li>

    Any licensing subsystem in general present API (low API) for external usage based on any scpecific language, which
    as common needs to be covered by plugins and as usual could not be used due to external dependencies exists, theuse
    are qute hard for integration and require additional level of licensing layer.
    On other side the Eclispe Passage which offer licensing system implenetation in Eclipse terminology way,
    operates with known identifiers for products, features, commands and other eclipse platform structure nodes.

    Simple for usage, simple for integrationg, simple for maintaince.

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
<h3>Eclipse Passage on the development</h3>
</div>
</div>
EOHTML;
	# Generate the web page
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/passage/style.css"/>');
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $titlePage, $html);

?>
