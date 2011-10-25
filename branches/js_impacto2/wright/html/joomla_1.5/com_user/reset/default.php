<?php // @version $Id: default.php 13 2010-11-05 16:28:16Z jeremy $
defined('_JEXEC') or die('Restricted access');
?>
<div class="reset<?php echo $this->escape($this->params->get('pageclass_sfx')) ?>">

	<?php if ($this->params->get('show_page_title')) : ?>
		<h1>
			<?php echo $this->escape($this->params->get('page_title')); ?>
		</h1>
	<?php endif; ?>

	<form action="<?php echo JRoute::_( 'index.php?option=com_user&task=requestreset' ); ?>" method="post" class="josForm form-validate">
		<p><?php echo JText::_('RESET_PASSWORD_REQUEST_DESCRIPTION'); ?></p>
		<fieldset>
			<div class="reset-field">
				<label for="email" class="hasTip" title="<?php echo JText::_('RESET_PASSWORD_EMAIL_TIP_TITLE'); ?>::<?php echo JText::_('RESET_PASSWORD_EMAIL_TIP_TEXT'); ?>"><?php echo JText::_('Email Address'); ?>:</label>
				<input id="email" name="email" type="text" class="required validate-email" />
			</div>
		</fieldset>
	
		<div>
			<button type="submit" class="validate"><?php echo JText::_('Submit'); ?></button>
			<?php echo JHTML::_( 'form.token' ); ?>
		</div>
	</form>
</div>