<?php
/** $Id: default_address.php 8 2010-11-03 18:07:23Z jeremy $ */
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if ( ( $this->contact->params->get( 'address_check' ) > 0 ) &&  ( $this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode ) ) : ?>
<div class="contact-address">
	<address>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
     <?php if ( $this->contact->params->get( 'address_check' ) > 0 ) : ?>
           <tr>
            <td width="40" valign="top" rowspan="6">

		<span class="jicon-none">
			<?php echo $this->contact->params->get( 'marker_address' ); ?>
		</span>
                </td>
         </tr>

	<?php endif; ?>

	<?php if ( $this->contact->address && $this->contact->params->get( 'show_street_address' ) ) : ?>
        <tr>
            <td valign="top">
		<span class="contact-street">
				<?php echo nl2br($this->escape($this->contact->address)); ?>
		</span>
            </td>
        </tr>
	<?php endif; ?>

	<?php if ( $this->contact->suburb && $this->contact->params->get( 'show_suburb' ) ) : ?>
        <tr>
            <td valign="top">
		<span class="contact-suburb">
			<?php echo $this->escape($this->contact->suburb); ?>
		</span>
        </td>
        </tr>
	<?php endif; ?>

	<?php if ( $this->contact->state && $this->contact->params->get( 'show_state' ) ) : ?>
        <tr>
            <td valign="top">
		<span class="contact-state">
			<?php echo $this->escape($this->contact->state); ?>
		</span>
            </td>
         </tr>
	<?php endif; ?>

	<?php if ( $this->contact->postcode && $this->contact->params->get( 'show_postcode' ) ) : ?>
         <tr>
            <td valign="top">
		<span class="contact-postcode">
			<?php echo $this->escape($this->contact->postcode); ?>
		</span>
            </td>
         </tr>
	<?php endif; ?>

	<?php if ( $this->contact->country && $this->contact->params->get( 'show_country' ) ) : ?>
        <tr>
            <td valign="top">
		<span class="contact-country">
			<?php echo $this->escape($this->contact->country); ?>
		</span>
            </td>
        </tr>
	<?php endif; ?>
    </table>
	</address>
</div>
<?php endif; ?>

<?php if ( ($this->contact->email_to && $this->contact->params->get( 'show_email' )) ||
			($this->contact->telephone && $this->contact->params->get( 'show_telephone' )) ||
			($this->contact->fax && $this->contact->params->get( 'show_fax' )) ||
			($this->contact->mobile && $this->contact->params->get( 'show_mobile' )) ||
			($this->contact->webpage && $this->contact->params->get( 'show_webpage' )) ) : ?>
<div class="contact-contactinfo">

	<?php if ( $this->contact->email_to && $this->contact->params->get( 'show_email' ) ) : ?>
	<p>
		<span class="jicon-none">
			<?php echo $this->contact->params->get( 'marker_email' ); ?>
		</span>
		<span class="contact-emailto">
			<?php echo $this->contact->email_to; ?>
		</span>
	</p>
	<?php endif; ?>

	<?php if ( $this->contact->telephone && $this->contact->params->get( 'show_telephone' ) ) : ?>
	<p>
		<span class="jicon-none">
			<?php echo $this->contact->params->get( 'marker_telephone' ); ?>
		</span>
		<span class="contact-telephone">
			<?php echo nl2br($this->escape($this->contact->telephone)); ?>
		</span>
	</p>
	<?php endif; ?>

	<?php if ( $this->contact->fax && $this->contact->params->get( 'show_fax' ) ) : ?>
	<p>
		<span class="jicon-none">
			<?php echo $this->contact->params->get( 'marker_fax' ); ?>
		</span>
		<span class="contact-fax">
			<?php echo nl2br($this->escape($this->contact->fax)); ?>
		</span>
	</p>
	<?php endif; ?>

	<?php if ( $this->contact->mobile && $this->contact->params->get( 'show_mobile' ) ) :?>
	<p>
		<span class="jicon-none">
			<?php echo $this->contact->params->get( 'marker_mobile' ); ?>
		</span>
		<span class="contact-mobile">
			<?php echo nl2br($this->escape($this->contact->mobile)); ?>
		</span>
	</p>
	<?php endif; ?>

	<?php if ( $this->contact->webpage && $this->contact->params->get( 'show_webpage' )) : ?>
	<p>
		<span class="jicon-none">
		</span>
		<span class="contact-webpage">
			<a href="<?php echo $this->escape($this->contact->webpage); ?>" target="_blank">
				<?php echo $this->escape($this->contact->webpage); ?></a>
		</span>
	</p>
	<?php endif; ?>

	<?php if ( $this->contact->misc && $this->contact->params->get( 'show_misc' ) ) : ?>
	<p>
		<span class="jicon-none">
			<?php echo $this->contact->params->get( 'marker_misc' ); ?>
		</span>
		<span class="contact-misc">
			<?php echo nl2br($this->contact->misc); ?>
		</span>
	</p>
	<?php endif; ?>

</div>
<?php endif; ?>


