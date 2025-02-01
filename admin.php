<?php

function wb_or_settings()
{

	$wb_or = new wubook_or;

	if (isset($_GET['save']) && !empty($_GET['save'])) {

		$wb_or->save();
		$wb_or->saved(__('Widget settings successfully saved!', 'wubook_or'));
	}

?>

	<div class="wrap">
		<h2><i class="fa fa-bed" aria-hidden="true"></i> <?php echo __('WuBook widget', 'wubook_or'); ?> ( <?php echo __('Online Reception', 'wubook_or'); ?> )</h2>

		<div class="wb_block" style="width: 65%;margin-right: 5%;">

			<?php

			if (isset($_GET['edit']) && !empty($_GET['edit'])) {

				$ww = get_option('wubook_or_widget') . ',';

			?>
				<form method="POST">
					<input type="text" class="wb_hide" name="save" value="true">
					<table class="wp-list-table widefat fixed striped posts">
						<thead>
							<tr>
								<td style="width: 180px;">
									<i class="fa fa-sliders" aria-hidden="true"></i>
									<?php echo __('Settings', 'wubook_or'); ?>
								</td>
								<td><i class="fa fa-list-ul" aria-hidden="true"></i>
									<?php echo __('Value', 'wubook_or'); ?>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<?php echo __('CODE STRUCTURE', 'wubook_or'); ?> *
								</td>
								<td>
									<input type="text" id="code_s" name="code_s" value="<?php echo get_option('wubook_or_widget_code'); ?>" required>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<?php echo __('Preferences RWidget', 'wubook_or'); ?>
								</td>
								<td>

									<?php
									preg_match("/leisure: (.*?),/", $ww, $rwleisure);
									$rwleisure = isset($rwleisure[1]) ? $rwleisure[1] : '';
									?>

									<div class="wb_box">
										<select name="rwleisure" class="wp_select">
											<option value="0" <?php if ($rwleisure == '0') {
																	echo ' selected="selected"';
																} ?>>Disabilitata</option>
											<option value="1" <?php if ($rwleisure == '1') {
																	echo ' selected="selected"';
																} ?>>Abilitata</option>
											<option value="2" <?php if ($rwleisure == '2') {
																	echo ' selected="selected"';
																} ?>>Obbligatoria</option>
										</select>
										<span>
											<?php echo __('Selection of occupancy', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/lang: '(.*?)',/", $ww, $rwlang);
									$rwlang = $rwlang[1];
									?>

									<div class="wb_box">
										<select name="rwlang" class="wp_select">
											<option value="" <?php if ($rwlang == '') {
																	echo ' selected="selected"';
																} ?>>
												<?php echo __('Automatic detection', 'wubook_or'); ?>
											</option>
											<option value="az" <?php if ($rwlang == 'az') {
																	echo ' selected="selected"';
																} ?>>az</option>
											<option value="bg" <?php if ($rwlang == 'bg') {
																	echo ' selected="selected"';
																} ?>>bg</option>
											<option value="br" <?php if ($rwlang == 'br') {
																	echo ' selected="selected"';
																} ?>>br</option>
											<option value="ca" <?php if ($rwlang == 'ca') {
																	echo ' selected="selected"';
																} ?>>ca</option>
											<option value="cs" <?php if ($rwlang == 'cs') {
																	echo ' selected="selected"';
																} ?>>cs</option>
											<option value="de" <?php if ($rwlang == 'de') {
																	echo ' selected="selected"';
																} ?>>de</option>
											<option value="ee" <?php if ($rwlang == 'ee') {
																	echo ' selected="selected"';
																} ?>>ee</option>
											<option value="en" <?php if ($rwlang == 'en') {
																	echo ' selected="selected"';
																} ?>>en</option>
											<option value="es" <?php if ($rwlang == 'es') {
																	echo ' selected="selected"';
																} ?>>es</option>
											<option value="fi" <?php if ($rwlang == 'fi') {
																	echo ' selected="selected"';
																} ?>>fi</option>
											<option value="fr" <?php if ($rwlang == 'fr') {
																	echo ' selected="selected"';
																} ?>>fr</option>
											<option value="gr" <?php if ($rwlang == 'gr') {
																	echo ' selected="selected"';
																} ?>>gr</option>
											<option value="he" <?php if ($rwlang == 'he') {
																	echo ' selected="selected"';
																} ?>>he</option>
											<option value="hr" <?php if ($rwlang == 'hr') {
																	echo ' selected="selected"';
																} ?>>hr</option>
											<option value="it" <?php if ($rwlang == 'it') {
																	echo ' selected="selected"';
																} ?>>it</option>
											<option value="ko" <?php if ($rwlang == 'ko') {
																	echo ' selected="selected"';
																} ?>>ko</option>
											<option value="lt" <?php if ($rwlang == 'lt') {
																	echo ' selected="selected"';
																} ?>>lt</option>
											<option value="lv" <?php if ($rwlang == 'lv') {
																	echo ' selected="selected"';
																} ?>>lv</option>
											<option value="me" <?php if ($rwlang == 'me') {
																	echo ' selected="selected"';
																} ?>>me</option>
											<option value="nl" <?php if ($rwlang == 'nl') {
																	echo ' selected="selected"';
																} ?>>nl</option>
											<option value="pl" <?php if ($rwlang == 'pl') {
																	echo ' selected="selected"';
																} ?>>pl</option>
											<option value="pt" <?php if ($rwlang == 'pt') {
																	echo ' selected="selected"';
																} ?>>pt</option>
											<option value="ro" <?php if ($rwlang == 'ro') {
																	echo ' selected="selected"';
																} ?>>ro</option>
											<option value="ru" <?php if ($rwlang == 'ru') {
																	echo ' selected="selected"';
																} ?>>ru</option>
											<option value="sv" <?php if ($rwlang == 'sv') {
																	echo ' selected="selected"';
																} ?>>sv</option>
											<option value="uk" <?php if ($rwlang == 'uk') {
																	echo ' selected="selected"';
																} ?>>uk</option>
											<option value="zh" <?php if ($rwlang == 'zh') {
																	echo ' selected="selected"';
																} ?>>zh</option>
										</select>
										<span>
											<?php echo __('Language', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/failback_lang: '(.*?)',/", $ww, $rwflang);
									$rwflang = $rwflang[1];
									?>

									<div class="wb_box">
										<select name="rwflang" class="wp_select">
											<option value="az" <?php if ($rwflang == 'az') {
																	echo ' selected="selected"';
																} ?>>az</option>
											<option value="bg" <?php if ($rwflang == 'bg') {
																	echo ' selected="selected"';
																} ?>>bg</option>
											<option value="br" <?php if ($rwflang == 'br') {
																	echo ' selected="selected"';
																} ?>>br</option>
											<option value="ca" <?php if ($rwflang == 'ca') {
																	echo ' selected="selected"';
																} ?>>ca</option>
											<option value="cs" <?php if ($rwflang == 'cs') {
																	echo ' selected="selected"';
																} ?>>cs</option>
											<option value="de" <?php if ($rwflang == 'de') {
																	echo ' selected="selected"';
																} ?>>de</option>
											<option value="ee" <?php if ($rwflang == 'ee') {
																	echo ' selected="selected"';
																} ?>>ee</option>
											<option value="en" <?php if ($rwflang == 'en') {
																	echo ' selected="selected"';
																} ?>>en</option>
											<option value="es" <?php if ($rwflang == 'es') {
																	echo ' selected="selected"';
																} ?>>es</option>
											<option value="fi" <?php if ($rwflang == 'fi') {
																	echo ' selected="selected"';
																} ?>>fi</option>
											<option value="fr" <?php if ($rwflang == 'fr') {
																	echo ' selected="selected"';
																} ?>>fr</option>
											<option value="gr" <?php if ($rwflang == 'gr') {
																	echo ' selected="selected"';
																} ?>>gr</option>
											<option value="he" <?php if ($rwflang == 'he') {
																	echo ' selected="selected"';
																} ?>>he</option>
											<option value="hr" <?php if ($rwflang == 'hr') {
																	echo ' selected="selected"';
																} ?>>hr</option>
											<option value="it" <?php if ($rwflang == 'it') {
																	echo ' selected="selected"';
																} ?>>it</option>
											<option value="ko" <?php if ($rwflang == 'ko') {
																	echo ' selected="selected"';
																} ?>>ko</option>
											<option value="lt" <?php if ($rwflang == 'lt') {
																	echo ' selected="selected"';
																} ?>>lt</option>
											<option value="lv" <?php if ($rwflang == 'lv') {
																	echo ' selected="selected"';
																} ?>>lv</option>
											<option value="me" <?php if ($rwflang == 'me') {
																	echo ' selected="selected"';
																} ?>>me</option>
											<option value="nl" <?php if ($rwflang == 'nl') {
																	echo ' selected="selected"';
																} ?>>nl</option>
											<option value="pl" <?php if ($rwflang == 'pl') {
																	echo ' selected="selected"';
																} ?>>pl</option>
											<option value="pt" <?php if ($rwflang == 'pt') {
																	echo ' selected="selected"';
																} ?>>pt</option>
											<option value="ro" <?php if ($rwflang == 'ro') {
																	echo ' selected="selected"';
																} ?>>ro</option>
											<option value="ru" <?php if ($rwflang == 'ru') {
																	echo ' selected="selected"';
																} ?>>ru</option>
											<option value="sv" <?php if ($rwflang == 'sv') {
																	echo ' selected="selected"';
																} ?>>sv</option>
											<option value="uk" <?php if ($rwflang == 'uk') {
																	echo ' selected="selected"';
																} ?>>uk</option>
											<option value="zh" <?php if ($rwflang == 'zh') {
																	echo ' selected="selected"';
																} ?>>zh</option>
										</select>
										<span>
											<?php echo __('Return language', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/default_nights: (.*?),/", $ww, $rwdfn);
									$rwdfn = $rwdfn[1];
									?>

									<div class="wb_box">
										<select name="rwdfn" class="wp_select">
											<option value="1" <?php if ($rwdfn == '1') {
																	echo ' selected="selected"';
																} ?>>1</option>
											<option value="2" <?php if ($rwdfn == '2') {
																	echo ' selected="selected"';
																} ?>>2</option>
											<option value="3" <?php if ($rwdfn == '3') {
																	echo ' selected="selected"';
																} ?>>3</option>
											<option value="4" <?php if ($rwdfn == '4') {
																	echo ' selected="selected"';
																} ?>>4</option>
											<option value="5" <?php if ($rwdfn == '5') {
																	echo ' selected="selected"';
																} ?>>5</option>
											<option value="6" <?php if ($rwdfn == '6') {
																	echo ' selected="selected"';
																} ?>>6</option>
											<option value="7" <?php if ($rwdfn == '7') {
																	echo ' selected="selected"';
																} ?>>7</option>
											<option value="8" <?php if ($rwdfn == '8') {
																	echo ' selected="selected"';
																} ?>>8</option>
											<option value="9" <?php if ($rwdfn == '9') {
																	echo ' selected="selected"';
																} ?>>9</option>
											<option value="10" <?php if ($rwdfn == '10') {
																	echo ' selected="selected"';
																} ?>>10</option>
											<option value="11" <?php if ($rwdfn == '11') {
																	echo ' selected="selected"';
																} ?>>11</option>
											<option value="12" <?php if ($rwdfn == '12') {
																	echo ' selected="selected"';
																} ?>>12</option>
											<option value="13" <?php if ($rwdfn == '13') {
																	echo ' selected="selected"';
																} ?>>13</option>
											<option value="14" <?php if ($rwdfn == '14') {
																	echo ' selected="selected"';
																} ?>>14</option>
											<option value="15" <?php if ($rwdfn == '15') {
																	echo ' selected="selected"';
																} ?>>15</option>
											<option value="16" <?php if ($rwdfn == '16') {
																	echo ' selected="selected"';
																} ?>>16</option>
											<option value="17" <?php if ($rwdfn == '17') {
																	echo ' selected="selected"';
																} ?>>17</option>
											<option value="18" <?php if ($rwdfn == '18') {
																	echo ' selected="selected"';
																} ?>>18</option>
											<option value="19" <?php if ($rwdfn == '19') {
																	echo ' selected="selected"';
																} ?>>19</option>
											<option value="20" <?php if ($rwdfn == '20') {
																	echo ' selected="selected"';
																} ?>>20</option>
											<option value="21" <?php if ($rwdfn == '21') {
																	echo ' selected="selected"';
																} ?>>21</option>
											<option value="22" <?php if ($rwdfn == '22') {
																	echo ' selected="selected"';
																} ?>>22</option>
											<option value="23" <?php if ($rwdfn == '23') {
																	echo ' selected="selected"';
																} ?>>23</option>
											<option value="24" <?php if ($rwdfn == '24') {
																	echo ' selected="selected"';
																} ?>>24</option>
											<option value="25" <?php if ($rwdfn == '25') {
																	echo ' selected="selected"';
																} ?>>25</option>
											<option value="26" <?php if ($rwdfn == '26') {
																	echo ' selected="selected"';
																} ?>>26</option>
											<option value="27" <?php if ($rwdfn == '27') {
																	echo ' selected="selected"';
																} ?>>27</option>
											<option value="28" <?php if ($rwdfn == '28') {
																	echo ' selected="selected"';
																} ?>>28</option>
											<option value="29" <?php if ($rwdfn == '29') {
																	echo ' selected="selected"';
																} ?>>29</option>
											<option value="30" <?php if ($rwdfn == '30') {
																	echo ' selected="selected"';
																} ?>>30</option>
											<option value="31" <?php if ($rwdfn == '31') {
																	echo ' selected="selected"';
																} ?>>31</option>
										</select>
										<span>
											<?php echo __('Number of default nights', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/bgcolor: '(.*?)',/", $ww, $rwbg);
									?>

									<div class="wb_box">
										<input type='color' name='rwbg' value='<?php echo $rwbg[1]; ?>' class="wb_color" />
										<span>
											<?php echo __('Background color', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/textcolor: '(.*?)',/", $ww, $rwtxt);
									?>

									<div class="wb_box">
										<input type='color' name='rwtxt' value='<?php echo $rwtxt[1]; ?>' class="wb_color" />
										<span>
											<?php echo __('Text color', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/buttoncolor: '(.*?)',/", $ww, $rwbu);
									?>

									<div class="wb_box">
										<input type='color' name='rwbu' value='<?php echo $rwbu[1]; ?>' class="wb_color" />
										<span>
											<?php echo __('Button color', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/iconcolor: '(.*?)',/", $ww, $rwic);
									?>

									<div class="wb_box">
										<input type='color' name='rwic' value='<?php echo $rwic[1]; ?>' class="wb_color" />
										<span>
											<?php echo __('Color icons', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/bordercolor: '(.*?)',/", $ww, $rwbd);
									?>

									<div class="wb_box">
										<input type='color' name='rwbd' value='<?php echo $rwbd[1]; ?>' class="wb_color" />
										<span>
											<?php echo __('Color border', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/dcode: (.*?),/", $ww, $rwdcode);
									$rwdcode = isset($rwdcode[1]) ? $rwdcode[1] : 0; // Se non esiste, imposta 0

									if ($rwdcode == 1) {
										$rwdcode = ' checked="checked"';
									} else {
										$rwdcode = '';
									}

									?>

									<div class="wb_box">
										<input<?php echo $rwdcode; ?> type="checkbox" name="rwdcode" value="yes">
											<span>
												<?php echo __('Discount codes field', 'wubook_or'); ?>
											</span>
									</div>

									<?php
									preg_match("/dcodeval: '(.*?)',/", $ww, $rwdcodeval);
									?>

									<div class="wb_box">
										<input type='text' name='rwdcodeval' value='<?php echo $rwdcodeval[1]; ?>' />
										<span>
											<?php echo __('Prepare the Discount Code Field with', 'wubook_or'); ?>
										</span>
									</div>

									<?php
									preg_match("/wbgoogle: (.*?),/", $ww, $rwgoogle);
									if ($rwgoogle[1] == 1) {
										$rwgoogle = ' checked="checked"';
									} else {
										$rwgoogle = '';
									}
									?>

									<div class="wb_box">
										<input<?php echo $rwgoogle; ?> type="checkbox" name="rwgoogle" value="yes">
											<span>
												<?php echo __('Google Analytics', 'wubook_or'); ?>
											</span>
									</div>

									<?php
									preg_match("/openParams: '(.*?)',/", $ww, $rwcustom_url);
									?>

									<div class="wb_box">
										<input type='text' name='rwcustom_url' value='<?php echo isset($rwcustom_url[1]) ? $rwcustom_url[1] : ''; ?>' />
										<span>
											<?php echo __('Open a custom url', 'wubook_or'); ?>
										</span>
									</div>

								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>

							<tr>
								<td colspan="2">
									<button type="submit" class="wb_bu">
										<i class="fa fa-check" aria-hidden="true"></i> <?php echo __('Save', 'wubook_or'); ?>
									</button>




								</td>
							</tr>

						</tbody>
					</table>
				</form>


			<?php

			} else {

			?>

				<table class="wp-list-table widefat fixed striped posts">
					<thead>
						<tr>
							<td>
								<i class="fa fa-sliders" aria-hidden="true"></i>
								<?php echo __('Shortcode', 'wubook_or'); ?>
							</td>
							<td><i class="fa fa-list-ul" aria-hidden="true"></i>
								<?php echo __('Action', 'wubook_or'); ?>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>

							<td>
								<a href="#" class="wb_shortcode" onclick="wb_copy(this.id);" id="wb_shortcode">[wubook_or]</a>
							</td>
							<td>
								<button onclick="window.location.href='<?php echo admin_url(); ?>admin.php?page=wb_or_settings&edit=<?php echo md5(time()); ?>';" class="wb_link">
									<?php echo __('Edit', 'wubook_or'); ?>
								</button>
							</td>

						</tr>
					</tbody>
				</table>

				<div class="wb_info">

					<wb_title>
						<i class="fa fa-level-up" aria-hidden="true"></i>
						<?php echo __('Info', 'wubook_or'); ?>
					</wb_title>

					<div class="wb_text">
						<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
						<?php echo __('Click to copy the shortcode and', 'wubook_or'); ?>
						<i class="fa fa-level-down" aria-hidden="true"></i>
						<?php echo __('paste to the desired page, template or widget block!', 'wubook_or'); ?>
					</div>

				</div>

			<?php

			}

			?>

		</div>

		<div class="wb_block" style="width: 30%;">
			<div class="wb_title">
				<div class="wb_version"><i class="fa fa-database" aria-hidden="true"></i>
					<?php echo __('Version', 'wubook_or'); ?>:
					<?php echo $wb_or->version; ?>
				</div>

				<a href="http://wubook.net/" target="_blank" class="wb_logo">

					<img src="<?php echo plugins_url('i/logo.jpg', __FILE__); ?>">

				</a>





			</div>

			<table class="wp-list-table widefat fixed striped posts">
				<tbody>
					<tr>
						<td><i class="fa fa-globe" aria-hidden="true"></i>
							<?php echo __('Our website', 'wubook_or'); ?>
						</td>
						<td><a href="http://wubook.net/" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> WuBook.net</a>
						</td>
					</tr>
					<tr>
						<td><i class="fa fa-archive" aria-hidden="true"></i>
							<?php echo __('Plugin page', 'wubook_or'); ?>
						</td>
						<td><a href="https://github.com/wubook/wp_responsive_widget" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo __('Open', 'wubook_or'); ?></a>
						</td>
					</tr>
					<tr>
						<td><i class="fa fa-life-ring" aria-hidden="true"></i>
							<?php echo __('Support', 'wubook_or'); ?>
						</td>
						<td><a href="mailto:wordpress@wubook.net" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo __('Send message', 'wubook_or'); ?></a>
						</td>
					</tr>
				</tbody>
			</table>

			<wb_lang>
				<form method="post" id="wb_lang">
					<select name="wb_lang" onchange='document.getElementById("wb_lang").submit();'>
						<option value="en_US" <?php if ((isset($_COOKIE['wb_lang']) && $_COOKIE['wb_lang'] == 'en_US') || (isset($_POST['wb_lang']) && $_POST['wb_lang'] == 'en_US')) {
													echo ' selected="selected"';
												} ?>>English</option>

						<option value="it_IT" <?php if ((isset($_COOKIE['wb_lang']) && $_COOKIE['wb_lang'] == 'it_IT') || (isset($_POST['wb_lang']) && $_POST['wb_lang'] == 'it_IT')) {
													echo ' selected="selected"';
												} ?>>Italian</option>

						<option value="ru_RU" <?php if ((isset($_COOKIE['wb_lang']) && $_COOKIE['wb_lang'] == 'ru_RU') || (isset($_POST['wb_lang']) && $_POST['wb_lang'] == 'ru_RU')) {
													echo ' selected="selected"';
												} ?>>Russian</option>
					</select>

				</form>
			</wb_lang>

		</div>



	</div>


<?php

}

?>