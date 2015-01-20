<?php
/**
 * @package     Wright
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row-fluid');
$containerClass = 'container';
if ($gridMode == 'row-fluid') {
    $containerClass = 'container-fluid';
}

$bgGradient = $this->params->get('impacto_gradient_content','1');
$bgGradientClass = " addGradient";
if ($bgGradient == 0) {
	$bgGradientClass = "";
}