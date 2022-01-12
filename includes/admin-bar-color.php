<?php
// Targets the style id for wpadminbar and assigns the user selected settings from the customizer
function change_admin_bar_color() { ?>
<style>
	#wpadminbar {
		background: <?php echo get_theme_mod( 'cabc_color_handle' ); ?>;
	}
</style>
<?php
}
