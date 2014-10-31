<?php 
	if(is_active_sidebar('sidebar-widgets')) {
		echo '<aside id="sidebar" class="small-12 large-4 columns">';
		do_action('foundationPress_before_sidebar'); 
		dynamic_sidebar('sidebar-widgets'); 
		do_action('foundationPress_after_sidebar'); 
		echo '</aside>';
	}
?>
