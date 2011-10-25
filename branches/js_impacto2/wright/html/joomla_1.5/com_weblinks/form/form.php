<?php // @version $Id: form.php 8 2010-11-03 18:07:23Z jeremy $
defined('_JEXEC') or die('Restricted access');
?>

<script type="text/javascript">
   //<![CDATA[
function submitbutton(pressbutton)
{
        var form = document.adminForm;
        if (pressbutton == 'cancel') {
                submitform( pressbutton );
                return;
        }

        // do field validation
        if (document.getElementById('jformtitle').value == ""){
                alert( "<?php echo JText::_( 'Weblink item must have a title', true ); ?>" );
        } else if (document.getElementById('jformcatid').value < 1) {
                alert( "<?php echo JText::_( 'You must select a category.', true ); ?>" );
        } else if (document.getElementById('jformurl').value == ""){
                alert( "<?php echo JText::_( 'You must have a url.', true ); ?>" );
        } else {
                submitform( pressbutton );
        }
}
         //]]>
</script>

<div class="edit<?php echo $this->escape($this->params->get('pageclass_sfx')) ?>">

	<?php if($this->params->get('show_page_title',1)) : ?>
		<h1>
			<?php echo $this->escape($this->params->get('page_title')) ?>
		</h1>
	<?php endif; ?>


<form action="<?php echo $this->action ?>" method="post" name="adminForm" class="editor form-validate" id="adminForm">
	<fieldset>
		<legend><?php echo JText::_( 'Submit A Web Link' );?></legend>
		
		<div class="formelm">
			<label for="jformtitle"><?php echo JText::_( 'Name' ); ?>:</label>
			<input class="inputbox" type="text" id="jformtitle" name="jform[title]" size="50" maxlength="250" value="<?php echo $this->escape($this->weblink->title);?>" />
		</div>

		<div class="formelm">
			<label for="jformcatid"><?php echo JText::_( 'Category' ); ?>:</label>
			<?php echo $this->lists['catid']; ?>
		</div>
		
		<div class="formelm">
			<label for="jformurl"><?php echo JText::_( 'URL' ); ?>:</label>
			<input class="inputbox" type="text" id="jformurl" name="jform[url]" value="<?php echo $this->escape($this->weblink->url); ?>" size="50" maxlength="250" />
		</div>

		<div class="formelm">
			<label for="jformdescription"><?php echo JText::_( 'Description' ); ?>:</label>
			<textarea class="inputbox" cols="30" rows="6" id="jformdescription" name="jform[description]" style="width:300px"><?php echo htmlspecialchars( $this->weblink->description, ENT_QUOTES );?></textarea>
		</div>

		<div class="formelm">
			<label for="jformpublished"><?php echo JText::_( 'Published' ); ?>:</label>
			<?php echo $this->lists['published']; ?>
		</div>
		
		<div class="formelm">
			<label for="jformordering"><?php echo JText::_( 'Ordering' ); ?>:</label>
			<?php echo $this->lists['ordering']; ?>
		</div>

		<div class="formelm-buttons">
			<button type="button" onclick="submitbutton('save')">
					<?php echo JText::_('Save') ?>
			</button>
			<button type="button" onclick="submitbutton('cancel')" >
					<?php echo JText::_('Cancel') ?>
			</button>
		</div>
	</fieldset>

        <input type="hidden" name="jform[id]" value="<?php echo (int)$this->weblink->id; ?>" />
        <input type="hidden" name="jform[ordering]" value="<?php echo (int)$this->weblink->ordering; ?>" />
        <input type="hidden" name="jform[approved]" value="<?php echo $this->weblink->approved; ?>" />
        <input type="hidden" name="option" value="com_weblinks" />
        <input type="hidden" name="controller" value="weblink" />
        <input type="hidden" name="task" value="" />
        <?php echo JHTML::_( 'form.token' ); ?>
</form>
</div>