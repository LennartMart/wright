<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
if (!function_exists("wright_joomla_search_search")) :

	
	
	
	function wright_joomla_search_search($buffer) {
		$buffer = preg_replace('/<span class="small">/Ui', '<span class="label label-info small">', $buffer);
		return $buffer;
	}

endif;

ob_start("wright_joomla_search_search");
require('components/com_search/views/search/tmpl/default.php');
ob_end_flush();

