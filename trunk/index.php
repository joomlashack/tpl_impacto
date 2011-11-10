<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
// require(YOURBASEPATH .DS."stylecook.php");
?>
<?php
	$headerstyle				= $this->params->get("headerstyle", "graphic");
	$headline           = $this->params->get("headline", "Impacto");
	$tagline            = $this->params->get("tagline", "A Professional Joomla! Template");
	$style              = $this->params->get("style", "style1");
	$maincolwidth       = $this->params->get("maincolwidth", "10");
	$leftcolwidth       = $this->params->get("leftcolwidth", "10");
	$rightcolwidth      = $this->params->get("rightcolwidth", "10");
	$layoutstyle	      = $this->params->get("layoutstyle", "LRC");
	$mootools_enabled   = ($this->params->get("mootools_enabled", 1)  == 0)?"false":"true";
	$caption_enabled    = ($this->params->get("caption_enabled", 1)  == 0)?"false":"true";
	$footerheight	    	= $this->params->get("footerheight", "210");
// require( YOURBASEPATH.DS."style.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<script type="text/javascript" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/jquery.min.js"></script>

<?php require(YOURBASEPATH . DS . "stprefs.php");?>
<link rel="shortcut icon" href="images/favicon.ico" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/960_24_col.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/layout.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/template.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/superfish.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/<?php echo $style ?>.css" type="text/css" />
<style type="text/css" media="screen">#wrap {padding-bottom: <?php echo $footerheight;?>px;}#footer {margin-top: -<?php echo $footerheight;?>px;height: <?php echo $footerheight;?>px;}	</style>


<script type="text/javascript" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/jquery.imgr.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/jquery.innerfade.js"></script>
	<script type="text/javascript">
	jQuery('document').ready(function($){
	// superfish
	jQuery('#nav ul.menu')
	.find('li.current_page_item,li.current_page_parent,li.current_page_ancestor,li.current-cat,li.current-cat-parent')
	  .addClass('current')
	  .end()
	  .superfish({
	});
	// rounded images
	jQuery(".round img").imgr({radius:"8px"});
	// fading testimonials
	jQuery('.testimonials').innerfade({
	animationtype: 'fade', 
	speed: 'normal', 
	timeout: 4000,
	type: 'sequence',
	containerheight: '3.5em'});
});
</script>

<jdoc:include type="head" />



<!--[if IE 6]>
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/ie.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 7]>
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/ie7.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 8]>
<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/ie8.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->


</head>
<body<?php if ($this->countModules( 'bodyclass' )) : ?> class="<jdoc:include type="modules" name="bodyclass" style="raw" />"<?php endif; ?>>
<div id="pagewrap">
		<div id="header" class="<?php echo $headerstyle;?>">
			<div class="innerwrap">
				<?php if ($this->countModules( 'topmenu' )) : ?>
					<div id="topnav">
					<jdoc:include type="modules" name="topmenu" style="none" />
					</div>
				<?php endif; ?>	
			<?php getHeader();?>
			</div><!--innerwrap-->
		</div><!--header-->
	
  <?php if ($this->countModules( 'menu' )) : ?>
		<div id="nav">
			<div class="innerwrap">
			<jdoc:include type="modules" name="menu" style="none" />
			</div><!--innerwrap-->
		</div><!--nav-->
	<?php endif; ?>
	
	<div id="wrap">
		<div class="container_24" id="container">
		
		<?php if($this->countModules('Leader1') or $this->countModules('Leader2') or $this->countModules('Leader3')) : ?>
		<div id="leader">
		 	  <?php if ($this->countModules( 'Leader1' )) : ?>
		 	    <div class="<?php echo $leadertdwidth; ?>">
		 	      <jdoc:include type="modules" name="Leader1" style="xhtml" />
		 	    </div>
		 	  <?php endif; ?>
		 	  <?php if ($this->countModules( 'Leader2' )) : ?>
		 	    <div class="<?php echo $leadertdwidth; ?>">
		 	      <jdoc:include type="modules" name="Leader2" style="xhtml" />
		 	    </div>
		 	  <?php endif; ?>
		 	  <?php if ($this->countModules( 'Leader3' )) : ?>
		 	    <div class="<?php echo $leadertdwidth; ?>">
		 	      <jdoc:include type="modules" name="Leader3" style="xhtml" />
		 	    </div>
		 	  <?php endif; ?>
		 	  <div class="clear"></div>
		</div><!--/#leader-->
		<?php endif; ?>

		<div class="mid_<?php echo $colstyle;?>">
		      <!-- content grid -->
		      <?php // left only
		      if ($this->countModules( 'left' ) && (!$this->countModules( 'right' ) && JRequest::getCmd('task') != 'edit' )) : ?>
	          <div class="grid_<?php echo 24 - $leftcolwidth. " push_".$leftcolwidth;?>">
	        <?php endif; ?>
	        
		      <?php // right only
		      if ($this->countModules( 'right' ) && (!$this->countModules( 'left' ) && JRequest::getCmd('task') != 'edit' )) : ?>
	          <div class="grid_<?php echo 24 - $rightcolwidth;?>">
	        <?php endif; ?>
	        
		      <?php // left and right
		      if ($this->countModules( 'right' ) && ($this->countModules( 'left' ) && JRequest::getCmd('task') != 'edit' )) : ?>
				
					<?php if ($layoutstyle == "LRC") {
					$totalpush = $rightcolwidth + $leftcolwidth;
					$contentwidth = 24 - $totalpush;
					$pushit = ' push_'.$totalpush;
					} elseif ($layoutstyle == "CLR") {
					$totalpush = $rightcolwidth + $leftcolwidth;
					$contentwidth = 24 - $totalpush;
					$pushit = "";
					} elseif ($layoutstyle == "LCR") {
					$totalpush = $rightcolwidth + $leftcolwidth;
					$contentwidth = 24 - $totalpush;
					$pushit = ' push_'.$leftcolwidth;
					};?>
					<div class="grid_<?php echo $contentwidth;?><?php echo $pushit;?>">
					<?php endif; ?>
	        
	        <?php // wide
		      if (!$this->countModules( 'right' ) && (!$this->countModules( 'left' )) || JRequest::getCmd('task') == 'edit') : ?>
	        <div class="grid_24">
	        <?php endif; ?>
	
				<?php if ($this->countModules( 'above_content' ) && JRequest::getCmd('task') != 'edit' ) : ?>
					<!-- above_content Module -->
		    <div id="banner">
		      <jdoc:include type="modules" name="above_content" style="xhtml" />
		    </div>
					<!-- /end above_content Module -->
		    <?php endif; ?>
		    

		    <div id="content">
				<div id="message"><jdoc:include type="message" /></div>
				
				<?php if (JRequest::getVar('view') != 'frontpage' && $this->countModules( 'breadcrumbs' )) : ?>
	        <jdoc:include type="modules" name="breadcrumbs" style="none" />
	      <?php endif; ?>
        
				<!-- Begin Content -->
				<jdoc:include type="component" />
		    </div><!--/content-->

				<?php if ($this->countModules( 'below_content' ) && JRequest::getCmd('task') != 'edit' ) : ?>
					<!-- below_content Module -->
	      <div id="inset">
	      	<jdoc:include type="modules" name="below_content" style="xhtml" />
	      </div>
					<!-- /below_content Module -->
	      <?php endif; ?>
				</div><!--/content grid-->
				</div><!--/content-->
				
		<!-- left sidebar grid -->
		<?php if ($this->countModules( 'left' ) && JRequest::getCmd('task') != 'edit' ) : ?>
			
		<?php // left only
		  if ($this->countModules( 'left' ) && (!$this->countModules( 'right' ))) : ?>
			<div class="grid_<?php echo $leftcolwidth;?> pull_<?php echo 24 - $leftcolwidth;?>">
		<?php endif; ?>
			
		<?php // left and right
			if ($this->countModules( 'right' ) && ($this->countModules( 'left' ))) : ?>
				
		<?php if ($layoutstyle == "LRC") {
			$totalpush = $rightcolwidth + $leftcolwidth;
			$contentwidth = 24 - $totalpush;
			$pushit = ' pull_'.$contentwidth;
			} elseif ($layoutstyle == "CLR") {
			$totalpush = $rightcolwidth + $leftcolwidth;
			$contentwidth = 24 - $totalpush;
			$pushit = "";
			} elseif ($layoutstyle == "LCR") {
			$totalpush = $rightcolwidth + $leftcolwidth;
			$contentwidth = 24 - $totalpush;
			$pushit = ' pull_'.$contentwidth;
			};?>
			<div class="grid_<?php echo $leftcolwidth;?><?php echo $pushit;?>">
		<?php endif; ?>
			
			<div class="sidebar">
				<jdoc:include type="modules" name="left" style="xhtml" />
			</div><!--/sidebar-->
			
		</div><!--/left sidebar grid-->
		<?php endif; ?>
		
		<?php if ($this->countModules( 'right' ) && JRequest::getCmd('task') != 'edit' ) : ?>
		<!-- right sidebar grid -->
		
		<?php // right only
		  if (!$this->countModules( 'left' ) && ($this->countModules( 'right' ))) : ?>
			<div class="grid_<?php echo $rightcolwidth;?>">
			<?php endif; ?>
			
		<?php // left and right
			if ($this->countModules( 'right' ) && ($this->countModules( 'left' ))) : ?>
	
		<?php if ($layoutstyle == "LRC") {
			$totalpush = $rightcolwidth + $leftcolwidth;
			$contentwidth = 24 - $totalpush;
			$pushit = ' pull_'.$contentwidth;
			} elseif ($layoutstyle == "CLR") {
			$totalpush = $rightcolwidth + $leftcolwidth;
			$contentwidth = 24 - $totalpush;
			$pushit = "";
			} elseif ($layoutstyle == "LCR") {
			$totalpush = $rightcolwidth + $leftcolwidth;
			$contentwidth = 24 - $totalpush;
			$pushit = "";
			};?>
			<div class="grid_<?php echo $rightcolwidth;?><?php echo $pushit;?>">
			<?php endif; ?>


			<div class="sidebar">
			<jdoc:include type="modules" name="right" style="xhtml" />
			</div><!-- /right sidebar -->
			
			</div><!-- /right sidebar grid -->
		<?php endif; ?>
		
		<div class="clear"></div>
		</div><!--/mid-->
		</div><!--/wrap-->
		</div><!-- /pagewrap -->
		
		  
		  <div id="footer">
				<div class="container_24">
		  		  <?php if ($this->countModules( 'Footer1' )) : ?>
						<div class="<?php echo $footertdwidth; ?>">
		  		     <div class="inside">
		  		        <jdoc:include type="modules" name="Footer1" style="xhtml" />
		  		      </div>
		  		   </div>
		  		   <?php endif; ?>
		
		  		   <?php if ($this->countModules( 'Footer2' )) : ?>
							<div class="<?php echo $footertdwidth; ?>">
								<div class="inside">
									<jdoc:include type="modules" name="Footer2" style="xhtml" />
								</div>
		  		     </div>
		  		   <?php endif; ?>
		  		   	
		  		   <?php if ($this->countModules( 'Footer3' )) : ?>
							<div class="<?php echo $footertdwidth; ?>">
								<div class="inside">
									<jdoc:include type="modules" name="Footer3" style="xhtml" />
								</div>
							</div>
		  		   <?php endif; ?>
		  		   <div class="clear"></div>
		
						
						<div id="bottom"><jdoc:include type="modules" name="copyright" style="none" /></div>
						<?php if ($this->countModules( 'headerad' )) : ?>
							<div id="headerad">
			            <jdoc:include type="modules" name="headerad" style="raw" />
			        </div>
						<?php endif; ?>
						<div class="copy"><?php require(YOURBASEPATH .DS."js".DS."template.css.php"); ?></div>
				</div><!-- /container_24 -->
		  	</div><!-- /#footer -->
		
	</body>
</html>