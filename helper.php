<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

abstract class mod_bootstrapcollapseHelper{

	public function load_jquery(&$params){
		if($params->get('load_jquery')){
			JLoader::import( 'joomla.version' );
			$version = new JVersion();
			if (version_compare( $version->RELEASE, '2.5', '<=')) {
					$doc = &JFactory::getDocument();
					$app = &JFactory::getApplication();
					$file='//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js';
					$file2=JURI::root(true).'/modules/mod_bootstrapcollapse/assets/js/jquery.noConflict.js';
					$doc->addScript($file);
					$doc->addScript($file2);
			} else {
				JHtml::_('jquery.framework');
			}
		}
	}
	
}