<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_recranet
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$org = (int) $params->get('organization');
$lang = (string) $params->get('locale');
$html5Mode = (boolean) $params->get('html5Mode');

$accommodations = file_get_contents('https://app.recranet.com/api/accommodations/?active=true&category=0&locale=' . $lang . '&organization=' . $org . '&public=true&tzoffset=120&featured=true');

require JModuleHelper::getLayoutPath('mod_recranet_hightlights', 'default');
