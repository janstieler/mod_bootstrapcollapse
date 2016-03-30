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
	.collapsed .fa-plus {
		-webkit-transform: rotate(22.5deg);
		-moz-transform: rotate(22.5deg);
		-ms-transform: rotate(22.5deg);
		-o-transform: rotate(22.5deg);
		transform: rotate(22.5deg);
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
		<i class="fa fa-plus"></i>
		<?php echo $buttontext; ?>
	</button>
	<div class="collapse in" id="collapse<?php echo $module_id; ?>">
		<?php echo $moduleContent;?>
	</div>
</div>
