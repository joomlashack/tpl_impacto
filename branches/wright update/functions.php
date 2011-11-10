<?php
/**
 * @copyright	Copyright (C) 2005 - 2011 Joomlashack / Meritage Assets
 * @author		Jeremy Wilken - Joomlashack
 * @package		Wright
 *
 * Use this file to add any PHP to the template before it is executed
 */
 
// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

$load = false;
$styles = '';

// Adds custom styles to head
if(JRequest::getVar('task') == 'edit' || JRequest::getVar('layout') == 'form'){
	$styles .= '#main{width:940px; background:none;} #content{width:100%;} #sidebar1{display:none;} #sidebar2{display:none;}'.PHP_EOL;
	$load = true;
}
if ($load) $this->document->addStyleDeclaration($styles);
