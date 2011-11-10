<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );

jimport('joomla.filesystem.file');
$headerjs = $this->getHeadData();
reset($headerjs['scripts']);
foreach ($headerjs['scripts'] as $script=>$type) {
    if ((JRequest::getCmd('task') != 'edit' and $mootools_enabled == "false" and strpos($script,'mootools.js')) or (JRequest::getCmd('task') != 'edit' and $caption_enabled == "false" and strpos($script,'caption.js'))) {
        unset($headerjs['scripts'][$script]);
    }
}
$this->setHeadData($headerjs);

function getColumnStyle ($left, $right) {
$editmode = false;
if (JRequest::getCmd('task') == 'edit' ) : $editmode = true; endif;

// get template params for processing
$app = & JFactory::getApplication();
$params_file = JPATH_THEMES.DS.$app->getTemplate().DS.'params.ini';

$content = '';
if (is_readable( $params_file ) ) {
   $content = file_get_contents( $params_file );
}
$params = new JParameter( $content );
$leftcolwidth	 = $params->get( 'leftcolwidth', '17' );
$rightcolwidth = $params->get( 'rightcolwidth', '7' );
$layoutstyle	 = $params->get("layoutstyle", "LRC");


// left only
if ($left && !$right) {
$colwidth = 24 - $leftcolwidth;
$colstyle = "l_".$colwidth;
}

// right only
if ($right && !$left) {
$colwidth = 24 - $rightcolwidth;
$colstyle = "r_".$colwidth;
}

// right and left
if ($left && $right) {
if ($layoutstyle == "LRC") {$colstyle = $leftcolwidth.'_'.$rightcolwidth.'_c';}
elseif ($layoutstyle == "CLR") {$colstyle = 'c_'.$leftcolwidth.'_'.$rightcolwidth;}
elseif ($layoutstyle == "LCR") {$colstyle = $leftcolwidth.'_c_'.$rightcolwidth;}
}

// wide
if (!$left && !$right) {
$colstyle = "w_wide";
}

//if ($editmode) $colstyle = "-wide";
if (JRequest::getCmd('task') == 'edit' ) {
	$colstyle = "w_wide";
}

return "$colstyle";
}
$colstyle = getColumnStyle($this->countModules( 'left' ),$this->countModules( 'right' ));


//count the modules in vertical positions u123
$leadermodulecount = $this->countModules('Leader1') + $this->countModules('Leader2') + $this->countModules('Leader3');
if ($leadermodulecount == "1") {$leadertdwidth = "grid_24";}
elseif ($leadermodulecount == "2") {$leadertdwidth = "grid_12";}
elseif($leadermodulecount == "3") {$leadertdwidth = "grid_8";}

//count the modules in footer positions f123
$footermodulecount = $this->countModules('Footer1') + $this->countModules('Footer2') + $this->countModules('Footer3');
if ($footermodulecount == "1") {$footertdwidth = "grid_24";}
elseif ($footermodulecount == "2") {$footertdwidth = "grid_12";}
elseif($footermodulecount == "3") {$footertdwidth = "grid_8";}


function getHeader() {
// get template params for processing
$app = & JFactory::getApplication();
$params_file = JPATH_THEMES.DS.$app->getTemplate().DS.'params.ini';
$content = '';
if (is_readable( $params_file ) ) {
   $content = file_get_contents( $params_file );
}
$params = new JParameter( $content );
$headline		= $params->get( 'headline', 'Impacto Template' );
$tagline		= $params->get( 'tagline', 'for Joomla' );
$headerstyle	= $params->get( 'headerstyle', 'image' );
$header_width	= $params->get( 'header_width', '244' );
$header_height	= $params->get( 'header_height', '73' );
$header_top_pad	= $params->get( 'header_top_pad', '15' );
$header_bot_pad	= $params->get( 'header_bot_pad', '10' );

$doc =& JFactory::getDocument();
$headerpadding = '#header {'
        . 'height: '.$header_height.'px;'
        . 'padding: '.$header_top_pad.'px 0px '.$header_bot_pad.'px 0px;'
        . '}';
$doc->addStyleDeclaration($headerpadding);


if ( JRequest::getVar('view') == 'frontpage' ) {
	if ($headerstyle == "image" || $headerstyle == "image_top") {
echo "<h1 id=\"graphic\" class=\"$headerstyle\"><a style=\"width:".$header_width."px;height:".$header_height."px;\" href=\"".JURI::base()."\" title=\"".$tagline."\">".$headline."</a></h1>";
}
if ($headerstyle == "text") {
echo "<h1 id=\"text-header\"><a href=\"".JURI::base()."\" title=\"".$headline."\">".$headline."</a></h1>"."<h2 id=\"text-slogan\">".$tagline."</h2>";
}
} else {
if ($headerstyle == "image" || $headerstyle == "image_top") {
echo "<span id=\"graphic\" class=\"$headerstyle\"><a style=\"width:".$header_width."px;height:".$header_height."px;\" href=\"".JURI::base()."\" title=\"".$tagline."\">".$headline."</a></span>";
}
if ($headerstyle == "text") {
echo "<span id=\"text-header\"><a href=\"".JURI::base()."\" title=\"".$tagline."\">".$headline."</a></span>"." <span id=\"text-slogan\">".$tagline."</span>";
}}
}
?>