<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */



$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

if ($task === 'edit' || $layout === 'form')
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}




// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));


// Use of Google Font
if ($this->params->get('googleFont'))
{
	JHtml::_('stylesheet', 'https://fonts.googleapis.com/css?family=' . $this->params->get('googleFontName'));
	$this->addStyleDeclaration("
	h1, h2, h3, h4, h5, h6, .site-title {
		font-family: '" . str_replace('+', ' ', $this->params->get('googleFontName')) . "', sans-serif;
	}");
}

// Template color
// if ($this->params->get('templateColor'))
// {
	// $this->addStyleDeclaration('
	// body.site {
	// 	border-top: 3px solid ' . $this->params->get('templateColor') . ';
	// 	background-color: ' . $this->params->get('templateBackgroundColor') . ';
	// }
	// a {
	// 	color: ' . $this->params->get('templateColor') . ';
	// }
	// .nav-list > .active > a,
	// .nav-list > .active > a:hover,
	// .dropdown-menu li > a:hover,
	// .dropdown-menu .active > a,
	// .dropdown-menu .active > a:hover,
	// .nav-pills > .active > a,
	// .nav-pills > .active > a:hover,
	// .btn-primary {
	// 	background: ' . $this->params->get('templateColor') . ';
	// }');
// }

// Check for a custom CSS file
JHtml::_('stylesheet', 'user.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'bscustom.css', array('version' => 'auto', 'relative' => true));

// Check for a custom js file
JHtml::_('script', 'user.js', array('version' => 'auto', 'relative' => true));



// Adjusting content width
$position7ModuleCount = $this->countModules('position-7');
$position8ModuleCount = $this->countModules('position-8');

if ($position7ModuleCount && $position8ModuleCount)
{
	$span = 'col-6';
}
elseif ($position7ModuleCount && !$position8ModuleCount)
{
	$span = 'col-9';
}
elseif (!$position7ModuleCount && $position8ModuleCount)
{
	$span = 'col-9';
}
else
{
	$span = 'col-12';
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<jdoc:include type="head" />
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2018.css">
	<link href="/templates/protostar-custom/css/iconic/open-iconic-bootstrap.css" rel="stylesheet">
	<link href="/templates/protostar-custom/css/fonts/iconmonstr/css/iconmonstr-iconic-font.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="/templates/protostar-custom/js/jquery.bcSwipe.min.js" ></script>
	<script src="/templates/protostar-custom/js/application.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body class=" container <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	//. ($params->get('fluidContainer') ? ' fluid' : '')
	. ($this->direction === 'rtl' ? ' rtl' : '');
?>">

	<?php /* mostly navigation and other floating modules  */ ?>
	<?php if ($this->countModules('position-1')) : ?>				
		<jdoc:include type="modules" name="position-1" style="none" />
	<?php endif; ?>
	<!-- Body -->
	<!-- <div class="body test" id="top"> -->
	<!-- <div class="" id="top"> -->
			
				<!-- Header -->
				<header class="header d-none" role="banner">
					<div class="header-inner clearfix">
						<script>
						// <!-- <a class="brand pull-left" href="<?php //echo $this->baseurl; ?>/">
						// 	<?php //echo $logo; ?>
						// 	<?php //if ($this->params->get('sitedescription')) : ?>
						// 		<?php //echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
						// 	<?php //endif; ?>
						// </a> -->
						</script>
						<div class="header-search pull-right">
							<jdoc:include type="modules" name="position-0" style="none" />
						</div>
					</div>
				</header>
			
			
				<jdoc:include type="modules" name="banner" style="xhtml" />
			



			<div class="row no-gutters-sm ">	
				<?php if ($position8ModuleCount) : ?>
					<!-- Begin Sidebar -->
					<div id="sidebar" class="col-3">
						<div class="sidebar-nav">
							<jdoc:include type="modules" name="position-8" style="xhtml" />
						</div>
					</div>
					<!-- End Sidebar -->
				<?php endif; ?>
				<main id="content" role="main" class="<?php echo $span; ?>">
					<!-- Begin Content -->
					<jdoc:include type="modules" name="position-3" style="xhtml" />
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<div class="clearfix"></div>
					<jdoc:include type="modules" name="position-2" style="none" />
					<!-- End Content -->
				</main>
				<?php if ($position7ModuleCount) : ?>
					<div id="aside" class="col-3">
						<!-- Begin Right Sidebar -->
						<jdoc:include type="modules" name="position-7" style="well" />
						<!-- End Right Sidebar -->
					</div>
				<?php endif; ?>
			</div>	


	<!-- </div> -->
	<!-- Footer -->
	<footer class="footer row no-gutters-sm" role="contentinfo">
		<div class="col-12 ">
			<hr />
			<jdoc:include type="modules" name="footer" style="none" />
			<p class="pull-right">
				<a href="#top" id="back-top">
					<?php echo JText::_('TPL_PROTOSTAR_BACKTOTOP'); ?>
				</a>
			</p>
			<p>
				&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
			</p>
		</div>
	</footer>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
