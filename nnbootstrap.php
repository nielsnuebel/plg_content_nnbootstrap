<?php
/**
* @package   NNBoostrap 3
* @author    NN-Medienagentur http://www.nn-medienagentur.de
* @copyright Copyright (C) NN-Medienagentur
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

class plgContentNNBootstrap extends JPlugin {
	
	public function onContentPrepare($context, &$article, &$params, $limitstart=0) {
		
		$replace = array(
				"{row}", "{/row}", 
				"{col1}", "{/col1}", 
				"{col2}", "{/col2}", 
				"{col3}", "{/col3}", 
				"{col4}", "{/col4}", 
				"{col5}", "{/col5}", 
				"{col6}", "{/col6}", 
				"{col7}", "{/col7}", 
				"{col8}", "{/col8}", 
				"{col9}", "{/col9}", 
				"{col10}", "{/col10}", 
				"{col11}", "{/col11}", 
				"{col12}", "{/col12}"
			);
		$bootstrap = array(
				'<div class="row">', "</div>", 
				'<div class="col-xs-1">', "</div>", 
				'<div class="col-xs-2">', "</div>", 
				'<div class="col-xs-3">', "</div>", 
				'<div class="col-xs-4">', "</div>", 
				'<div class="col-xs-5">', "</div>", 
				'<div class="col-xs-6">', "</div>", 
				'<div class="col-xs-7">', "</div>", 
				'<div class="col-xs-8">', "</div>", 
				'<div class="col-xs-9">', "</div>", 
				'<div class="col-xs-10">', "</div>", 
				'<div class="col-xs-11">', "</div>", 
				'<div class="col-xs-12">', "</div>"
			);

		$article->text = str_replace($replace, $bootstrap, $article->text);
		return '';
	}
}