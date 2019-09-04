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
	
<div id="midcolumn">
	<a href="https://wiki.eclipse.org/Passage"><h3>Eclipse Passage (License Management Solution)</h3></a>
	<div id="introText">
		<p>
		The Eclipse Passage project aims to provide rich and easily adaptable capabilities to define and control licensing constraints.
		</p>
		
		<div id="community">
		<p/>
		We will be happy to help with integration, you are welcome to:
		<p/>
		<li><a href="https://www.eclipse.org/forums/index.php/f/449/">initiate discussion</a></li>
		<li><a href="https://dev.eclipse.org/mhonarc/lists/passage-dev">contact developers</a></li>
		<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=passage&component=General">or request a change</a></li>
		</p>
		</p>
		</div>
	
		<div id="components">
		<p/>
		The Eclipse Passage represents several sets of components for license management:
		<p/>
		<li>Licensing Runtime Interfaces</li>
		<li>Licensing Operator Client</li>
		<li>Licensing Back-end Server</li>
		<li>Licensing Definition IDE Tools</li>
		</p>
		</p>
		</div>
	
		<div id="functionality">
		<p/>
		Eclipse Passage is primary focused to support OSGi-based products:
		<p/>
		<li>Capability-based licensing constraints definitions</li>
		<li>Component-based licensing constraints definitions</li>
		<li>More to come</li>
		</p>
		</p>
		</div>
	
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
		<p>
			<a href="https://projects.eclipse.org/projects/technology.passage/releases/0.6.0">
				<i>Eclipse Passage 0.6.0 (available)</i>
			</a>
			<p/>
			<a href="https://projects.eclipse.org/projects/technology.passage/releases/0.5.0">
				<i>Eclipse Passage 0.5.0 (available)</i>
			</a>
			<p/>
			<a href="https://projects.eclipse.org/projects/technology.passage/releases/0.4.0">
				<i>Eclipse Passage 0.4.0 (available)</i>
			</a>
			<p/>
		</p>
	</div>
</div>
EOHTML;
	# Generate the web page
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/passage/style.css"/>');
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $titlePage, $html);

?>
