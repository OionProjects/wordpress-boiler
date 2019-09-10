<h1>Primera Custom CSS</h1>
<?php settings_errors(); ?>

<form id="save-custom-css-form" method="post" action="options.php" class="primera-general-form">
	<?php settings_fields( 'primera-custom-css-options' ); ?>
	<?php do_settings_sections( 'gavilan_primera_css' ); ?>
	<?php submit_button(); ?>
</form>