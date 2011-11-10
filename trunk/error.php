<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$mainframe =& JFactory::getApplication('site');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $mainframe->getCfg('sitename');?> - <?php echo $this->error->code ?> - <?php echo $this->title; ?></title>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/error.css" type="text/css" />
	
</head>
<body>
	<div align="center">
		<div id="outline">
		<div id="errorboxoutline">
			<div id="errorboxbody">
				<div id="errorboxheader">
					<h1><a href="<?php echo $this->baseurl ?>"><?php echo $mainframe->getCfg('sitename');?></a></h1>
					<?php echo $this->error->code ?> - <?php echo $this->error->message ?>
				</div>
				<div class="inside">
					<?php
					// search
					$document	= &JFactory::getDocument();
			    $search	= $document->loadRenderer('module');
			    $searchopt	= array('style' => 'raw');
			    $module		= JModuleHelper::getModule('mod_search');
			    $module->params	= "button_text=Search\nbutton=1\nbutton_pos=right";
			    echo $search->render($module, $searchopt);
					
					?>
			<p><strong><?php echo JText::_('You may not be able to visit this page because of:'); ?></strong></p>
				<ol>
					<li><?php echo JText::_('An out-of-date bookmark/favourite'); ?></li>
					<li><?php echo JText::_('A search engine that has an out-of-date listing for this site'); ?></li>
					<li><?php echo JText::_('A mis-typed address'); ?></li>
					<li><?php echo JText::_('You have no access to this page'); ?></li>
					<li><?php echo JText::_('The requested resource was not found'); ?></li>
					<li><?php echo JText::_('An error has occurred while processing your request.'); ?></li>
				</ol>
			<p><strong><?php echo JText::_('Please try one of the following pages:'); ?></strong></p>
				<?php
				// menu
				$document	= &JFactory::getDocument();
				$renderer	= $document->loadRenderer('modules');
				$options	= array('style' => 'raw');
				$position	= 'menu';
				echo $renderer->render($position, $options, null);
				
				
				?>
			<p><?php echo JText::_('If difficulties persist, please contact the system administrator of this site.'); ?></p>
			<div id="techinfo">
			<p><?php echo $this->error->message; ?></p>
			<p>
				<?php if($this->debug) :
					echo $this->renderBacktrace();
				endif; ?>
			</p>
			</div>
			</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
