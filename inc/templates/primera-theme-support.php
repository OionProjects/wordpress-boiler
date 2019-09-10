<h1>primera Theme Support</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="primera-general-form">
	<?php settings_fields( 'primera-theme-support' ); ?>
	<?php do_settings_sections( 'gavilan_primera_theme' ); ?>
	<?php submit_button(); ?>
</form>