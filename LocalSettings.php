<?php

# Control reading by anonymous users. Set this to true to enable everyone to read the wiki
$wgGroupPermissions['*']['read'] = true;

# Control writing by anonymous users. It is best to leave this to false to prevent spam
$wgGroupPermissions['*']['edit'] = false;

# Allow only people with valid email to edit pages. Turn this on to disable spam
$wgEmailConfirmToEdit = false;

$wgServer = "https://investopedia.tryvine.xyz";

$wgSitename = "Vine Investing Encyclopedia";

$wgDefaultSkin = "cavendish";

wfLoadExtension( 'TemplateStyles' );

wfLoadSkin( 'Cavendish' );

wfLoadExtension( 'VisualEditor' );
