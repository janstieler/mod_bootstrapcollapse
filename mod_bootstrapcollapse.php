<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_bootstrapcollapse.content');
}

// add the helper file becuase we need it...
require_once(dirname(__FILE__).'/helper.php');

// define document
$doc =& JFactory::getDocument();

//get moduleparams
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$tag 				= $params->get('module_tag');
$tags 				= new JHelperTags;
$bootstrapSize  	= (int) $params->get('bootstrap_size', 0);
$moduleClass    	= $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';
$moduleTitle		= $module->title;
$headerTag			= htmlspecialchars($params->get('header_tag', 'h2'));
$moduleContent		= $module->content;
$module_id 			= $module->id;
$buttontext			= $params->get('button_text');

// do we need jquery? Run that method and pass in the params
mod_bootstrapcollapseHelper::load_jquery($params);

// get the template
require JModuleHelper::getLayoutPath('mod_bootstrapcollapse', $params->get('layout', 'default'));