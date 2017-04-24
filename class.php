<?php

class wubook_or {

	function __construct() {

		$this->version = "1.0";

	}

	function saved( $message ) {
		?>
		<div class="updated notice">
			<p>
				<?php echo $message; ?>
				<a href="<?php echo admin_url();?>admin.php?page=wb_settings" class="wb_back">
		<i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <?php echo __( 'Back', 'wubook_or' );?>
		</a>
			



			</p>
		</div> 
		<?php
	}

	function save() {

		$code_s = $_POST[ 'code_s' ];

		$leisure = $_POST[ 'rwleisure' ];

		$lang = $_POST[ 'rwlang' ];

		$failback_lang = $_POST[ 'rwflang' ];

		$default_nights = $_POST[ 'rwdfn' ];

		$bgcolor = $_POST[ 'rwbg' ];

		$textcolor = $_POST[ 'rwtxt' ];

		$buttoncolor = $_POST[ 'rwbu' ];

		$iconcolor = $_POST[ 'rwic' ];

		$bordercolor = $_POST[ 'rwbd' ];

		if ( $_POST[ 'rwdcode' ] == 'yes' ) {
			$dcode = 1;
		} else {
			$dcode = 0;
		}

		$dcodeval = $_POST[ 'rwdcodeval' ];

		if ( $_POST[ 'rwgoogle' ] == 'yes' ) {
			$wbgoogle = 1;
		} else {
			$wbgoogle = 0;
		}

		$openParams = $_POST[ 'rwcustom_url' ];

		$js .= "bordercolor: '" . $bordercolor . "',";
		
		$js .= "lang: '" . $lang . "',";
		
		$js .= "buttoncolor: '" . $buttoncolor . "',";
		
		$js .= "dcode: " . $dcode . ",";
		
		$js .= "failback_lang: '" . $failback_lang . "',";
		
		$js .= "wbgoogle: " . $wbgoogle . ",";
		
		$js .= "bgcolor: '" . $bgcolor . "',";
		
		$js .= "leisure: " . $leisure . ",";
		
		$js .= "dcodeval: '" . $dcodeval . "',";
		
		$js .= "iconcolor: '" . $iconcolor . "',";
		
		$js .= "textcolor: '" . $textcolor . "',";
		
		$js .= "openParams: '" . $openParams . "',";
		
		$js .= "default_nights: " . $default_nights;

		update_option( 'wubook_or_widget', $js );

		update_option( 'wubook_or_widget_code', $code_s );

	}

}

?>