<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_bootstrapcollapse
 *
 * @copyright   Copyright (C) 2016 Kommunikationsdesign Jan-Frederik Stieler. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<style>
	.collapsed svg text {
	  transform: rotate(45deg) rotate(-45deg);
	  transform-origin: 50% 50%; /* Chrome, Firefox behaves differently */
	}
</style>
<script>
jQuery(function(){
	jQuery('.collapse').collapse();
});
</script>
<div class="bootstrapcollapse<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
	<?php if ((bool) $module->showtitle) : ?>
		<<?php echo $headerTag . $headerClass . '>' . $moduleTitle; ?></<?php echo $headerTag; ?>>
	<?php endif; ?>
	<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $module_id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $module_id; ?>">
		<svg width="43" height="50" viewBox="0 0 43 50" xmlns="http://www.w3.org/2000/svg">
			<g fill="none" fill-rule="evenodd"><path d="M21.404 2.044L1.82 13.657v22.795l19.617 11.725 20.17-11.554v-22.74L21.404 2.044z" stroke="#353535" stroke-width="2"/>
				<text font-family="Arial" font-size="26" fill="#353535" transform="translate(1 2)"><tspan x="13" y="31">+</tspan></text>
			</g>
		</svg>
		<?php echo $buttontext; ?>
	</button>
	<div class="collapse in" id="collapse<?php echo $module_id; ?>">
		<?php echo $moduleContent;?>
	</div>
</div>