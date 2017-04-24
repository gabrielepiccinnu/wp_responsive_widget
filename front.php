<?php

function wb_or_shortcode() {

	?>

	<script>
    <?php
	echo get_option('wubook_javascript');
	?>
    </script>
	
	<div id="_wbord_">
	
		<a href="http://wubook.net" style="display: block; margin-top: 5px; text-decoration:none;border:none;" target="_blank">
                <img src="<?php echo plugins_url( 'i/booking_by_wu.gif', __FILE__ );?>" alt="Zak.Wubook.net" title="Soluzioni per la gestione Hotel" style="border:none;text-decoration:none;" />
            </a>

	</div>
	
	<script>
		var WuBook = new _WuBook( <?php echo get_option( 'wubook_or_widget_code' );?> );
		var wbparams = {
			<?php echo get_option( 'wubook_or_widget' );?>
		};
		WuBook.design_rwidget( "_wbord_", wbparams );
	</script>

	<?php

}

?>