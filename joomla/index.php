<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- joomla's included head -->
	<jdoc:include type="head" />
	<!-- / joomla's included head -->
	<?php 
		// Get parameters from template
		$activetitle = JFactory::getApplication()->getMenu()->getActive();
		$params = JFactory::getApplication()->getTemplate(true)->params;
		$this->setTitle( $activetitle->title . ' | ' . $this->params->get('sitetitle') );
		if ($this->params->get('bootskin') && $this->params->get('bootlocal') == false) {
		JFactory::getDocument()->addStyleSheet($this->params->get('bootskin'), 'text/css', $media, ['id'=>'bsmain']);
		} else {
		JFactory::getDocument()->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/bootstrap.min.css', 'text/css', $media, ['id'=>'bsmain']);}
		JFactory::getDocument()->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/template.css');
		if ($this->params->get('bkgrdimg')) {
		$bkgrdimg = $this->params->get('bkgrdimg');
		if ($this->params->get('pagebody') == '0') { $pagebody = 'body';} elseif ($this->params->get('pagebody') == '1') { $pagebody = '#container';} elseif ($this->params->get('pagebody') == '2') { $pagebody = '#content';}
		if ($this->params->get('bkgrdscroll') == '0') { $bkgrdscroll = '';} else { $bkgrdscroll = ' background-attachment: fixed;' ;}
				if ($this->params->get('pagebkgrd') == '0') {
		JFactory::getDocument()->addStyleDeclaration( $pagebody . ' {background-image: url(' . $bkgrdimg . '); background-repeat: no-repeat; background-position: center center; ' . $bkgrdscroll . '}' ) 
				;} else {
		JFactory::getDocument()->addStyleDeclaration( $pagebody  . ' {background-image: url(' . $bkgrdimg . '); background-repeat: repeat; ' . $bkgrdscroll . '}' ) ;}
		;}
		if ($this->params->get('googlefont')) {
		$gtextfonts = $this->params->get('googlefont');
		$gtextfonts = str_replace(' ', '+', $gtextfonts);		
		JFactory::getDocument()->addStyleSheet('//fonts.googleapis.com/css?family=' . $gtextfonts );
		JFactory::getDocument()->addStyleDeclaration( '	body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, p, .p, .google-font {font-family: "' . str_replace('+', ' ', $gtextfonts) . '", Helvetica !important;}' );}
		JFactory::getDocument()->addScript(JUri::base() . 'templates/' . $this->template . '/js/bootstrap.min.js');
		JFactory::getDocument()->addScript(JUri::base() . 'templates/' . $this->template . '/js/bsmenu.js');
		$customtag = '<!--[if lt IE 9]>' . "\n";
		$customtag .= '<script src="' . JUri::base() . 'templates/' . $this->template . '/js/html5shiv.min.js"></script>' . "\n";
		$customtag .= '<script src="' . JUri::base() . 'templates/' . $this->template . '/js/respond.min.js"></script>' . "\n"; 
		$customtag .= '<![endif]-->' . "\n";
		JFactory::getDocument()->addCustomTag($customtag);
	?>	
</head>

<body>
	<div id="container" class="container" ><!-- container 1 -->
<header role="banner">
	<div id="header" class="row"><!-- row 1A -->
		<div class="col-sm-12"><!-- col 1A1 -->
		<?php if ($this->params->get('headerimg')): ?>
				<img class="pull-left" src="<?php echo $this->params->get('headerimg'); ?>" alt="Page header image" />
			<?php if ($this->params->get('headertext') == '1'): ?>
				<div class="pull-right text-right"><!-- page header -->
					<h1><?php echo htmlspecialchars($this->params->get('sitetitle')); ?><br>
					<small><?php echo htmlspecialchars($this->params->get('subtitle')); ?></small></h1>
				</div><!-- / page header -->
			<?php endif; ?>
		<?php else : ?>
			<?php if ($this->params->get('headertext') == '1'): ?>
				<div><!-- page header -->
					<h1><?php echo htmlspecialchars($this->params->get('sitetitle')); ?><br>
					<small><?php echo htmlspecialchars($this->params->get('subtitle')); ?></small></h1>
				</div><!-- / page header -->
			<?php endif; ?>
		<?php endif; ?>
		</div><!-- / col 1A1 -->
	</div><!-- / row 1A -->
</header><!-- / banner -->
<!-- Skip navigation for AT (accessibility) -->
<a href="#content" class="sr-only sr-only-focusable" role="button">Skip to content</a>
<nav class="<?php if ($this->params->get('navinverse')) : echo 'navbar-inverse '; endif; ?> navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!-- enable brand image or brand name here -->
	</div><!-- / navbar-header -->			
	<div class="collapse navbar-collapse" id="navbar-collapse-1">				
		<jdoc:include type="modules" name="navbar" />
	</div><!-- / #navbar-collapse-1 -->
</nav><!-- / navigation -->
<section role="main">
	<?php $menu = & JSite::getMenu();
	if ( $this->countModules( 'user1' ) && $menu->getActive() == $menu->getDefault() ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-12"><!-- col 1B1 -->
			<jdoc:include type="modules" name="user1" />
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->	
	<div class="row"><!-- row 1C -->
		<div class="col-sm-12"><!-- col 1C1 -->
			<!-- joomla main component -->
			<jdoc:include type="component" />
			<!-- / joomla main component -->
		</div><!-- / col 1C1 -->
	</div><!-- / row 1C -->	
	<?php else: ?>
		<?php if ($this->countModules( 'right' )): ?>
		<div id="content" class="row"><!-- row 1b -->
			<div class="col-sm-9"><!-- col 1b1 -->
				<!-- joomla main component -->
				<jdoc:include type="component" />
				<!-- / joomla main component -->
			</div><!-- / col 1b1 -->
			<div class="col-sm-3"><!-- col 1B2 -->
				<jdoc:include type="modules" name="user1" />
			</div><!-- / col 1B2 -->
		</div><!-- / row 1b -->				
		<?php else: ?>
	<div id="content" class="row"><!-- row 1c -->
		<div class="col-sm-12"><!-- col 1c1 -->
			<!-- joomla main component -->
			<jdoc:include type="component" />
			<!-- / joomla main component -->
		</div><!-- / col 1c1 -->
	</div><!-- / row 1c -->	
		<?php endif; ?>
	<?php endif; ?>
</section><!-- / main -->
<footer role="contentinfo">
	<?php if ($this->countModules( 'footer' )): ?>
	<div class="row"><!-- row 1Y -->
		<div class="col-sm-12"><!-- col 1Y1 -->
			<jdoc:include type="modules" name="footer" />
		</div><!-- / col 1Y1 -->
	</div><!-- / row 1Y -->
	<?php endif; ?>
</footer><!-- / contentinfo -->
	</div><!-- / container 1 -->
<?php
if ($this->params->get('bs_tooltip') == '1') {
	$document = JFactory::getDocument();
	$document->addScriptDeclaration('
		(function($){   
    		$(document).ready(function(){ $("[data-toggle=tooltip]").tooltip(); });
		})(jQuery);
	');
}
if ($this->params->get('bs_popover') == '1') {
	$document = JFactory::getDocument();
	$document->addScriptDeclaration('
		(function($){   
    		$(document).ready(function(){ $("[data-toggle=popover]").popover(); });
		})(jQuery);
	');
}
?>
</body>
</html>