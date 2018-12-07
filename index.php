<?php

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());
	
	$localVersion = false;
	
	$titlePage 		= "Eclipse Technology Passage";
	
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

<p>The Eclipse Passage project aims to provide rich and easily adoptable capabilities to define and control licensing constraints.
	The usage story starts in Licensing Operator client:
	Define a product you would like to ship
	Generate a pair of keys for defined product
	Send the public key and product description to your development team
	Discuss the features with your marketing and map the features to the product
	Send the descriptions of the features to your development team
	Then development team needs to do the following:

	Embed the public key to your product
	Bind functionality to feature identifiers
	Include Licensing Runtime bundles to the product
	Well, you are ready for the product shipment, at least from Passage point of view. After some time you hopefully will have fantastic download rate and a lot of requests to obtain a license, you need to use Licensing Operator client again:

	Register licensee: either user or company
	Formulate the license conditions: allow a set of features for particular node or for some period or whatever you would like
	Encrypt the license file and send it to the user: you will need a product private key for it - but we hope you still have it in some safe place
	Finally, the Licensing Runtime is starting its work inside your product deployed to the customer environment using the simple algo:

	Collect the configuration requirements (feature identifiers to be controlled)
	Mine the license conditions using different approach, the default may be to inspect a subfolder @user.home
	Evaluate the mined conditions against current environment state (time now, running node id) to obtain feature permissions tickets
	Put both configuration requirements and feature permission tickets to the examiner to receive verdict (restrictions)
	Call restriction executors to have desired effect: show status bar reminder or block everything
</p>


<img class="displayed" src="/passage/images/snapshots.png" height="550" alt="Eclipse Passage Snapshots" border="0"/>

</div>
</div>

<div id="rightcolumn">

<div>
<h3>Current Status</h3>
<p></p>
</div>

<div id="headlines">
<h3>Eclipse Passage 0.3.3 Now Available</h3>
<p><i>March 07, 2019 -</i> Passage 0.3.3 for Eclipse 2018-12. Check the <a href="downloads.php">Download</a> link on how to get yours.</p> 
</div>


</div>
EOHTML;

	# Generate the web page
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/passage/style.css"/>');	
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $titlePage, $html);

?>
