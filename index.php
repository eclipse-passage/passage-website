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
	<div>
		<img
    		class="displayed"
   	 		src="/passage/images/title.png"
    		height="200"
    		alt="Eclipse Passage Title"
    		border="0"/>		
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
<div id="headlines">
	<h3>Eclipse Passage 0.4.0</h3>
	<p>
		<a href="https://www.eclipse.org/projects/what-is-incubation.php">
			<img class="project-image center-block margin-bottom-20 img-responsive" typeof="foaf:Image" src="https://projects.eclipse.org/sites/all/modules/custom/pmi/project_state/images/incubating.png" alt="Incubating - Eclipse Passage">
		</a>
		<p/>
		<a href="https://projects.eclipse.org/projects/technology.passage/releases/0.4.0">
			<i>The first release of Eclipse Passage at Eclipse Foundation is in progress.</i>
		</a>
	</p>
</div>
</div>
EOHTML;
	# Generate the web page
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/passage/style.css"/>');
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $titlePage, $html);

?>
