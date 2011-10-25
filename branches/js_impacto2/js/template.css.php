<?php

defined('_JEXEC') or die;

$anchors = array(	"Joomla" => 10,				"How to Joomla" => 15,				"Free Joomla Template" => 20,						"Joomla Templates" => 35,								"Joomla Template" => 50,								"Template para Joomla" => 65,								"Template for Joomla" => 80,								"Joomla Extension" => 85,					"Joomla Extensions" => 90,					"Joomla Module" => 95,					"Joomla Training"=>100);
$links = array(		"Joomla" => "",				"How to Joomla" => "university/",	"Free Joomla Template" => "free-joomla-templates",	"Joomla Templates" => "professional-joomla-templates",	"Joomla Template" => "professional-joomla-templates",	"Template para Joomla" => "professional-joomla-templates",	"Template for Joomla" => "professional-joomla-templates",	"Joomla Extension" => "joomla-extensions",	"Joomla Extensions" => "joomla-extensions",	"Joomla Module" => "joomla-extensions",	"Joomla Training"  => "university/");
$endlines  = array(	": by JoomlaShack" => 10,	": from JoomlaShack" => 20,			" by JoomlaShack"=>30,								" from JoomlaShack" => 40,								" at JoomlaShack" => 50,								": by JoomlaShack.com" => 60,								": from JoomlaShack.com" => 70,								" by JoomlaShack.com" => 80,				" from JoomlaShack.com" => 90,				" - by Joomlashack.com" => 95,			" at JoomlaShack.com"=>100);

$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

$md5 = md5($url);
$nums = str_replace(array('a','b','c','d','e','f'), '', $md5);

$first = substr($nums,0,2);
$second = substr($nums,2,2);
$third  = substr($nums,4,2);

if(substr($first,0,1)=='0') { $first = substr($first,1,1); }
if(substr($second,0,1)=='0') { $second = substr($second,1,1); }
if(substr($third,0,1)=='0') { $third = substr($third,1,1); }

$anchor = '';
$endline = '';
foreach($anchors as $possibility=>$val) {;
  if($anchor=='' && $val>$first) { 
		$anchor = $possibility; 
  		if($second<66) { 
			$url = "http://www.joomlashack.com";
		} else { 
			$url = "http://www.joomlashack.com/".$links[$possibility]; 
		}
		foreach($endlines as $ends=>$v) {
			if($endline=='' && $v>$third) { $endline = $ends; }
		}
  }
}

$jstpl = '<div class="designer"><a href="'.$url.'">'.$anchor.$endline.'</a></div>';