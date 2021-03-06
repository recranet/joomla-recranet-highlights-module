<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_recranet_highlights
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$org = (int) $params->get('organization');
$lang = (string) $params->get('locale');
$html5Mode = (boolean) $params->get('html5Mode');
$amount = (int) $params->get('amount');

try {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://app.recranet.com/api/accommodations/?active=true&category=0&locale=' . $lang . '&organization=' . $org . '&public=true&tzoffset=120&featured=true');
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $accommodations = curl_exec($ch);

    curl_close($ch);
} catch (\Exception $e) {
    $accommodations = null;
}

require JModuleHelper::getLayoutPath('mod_recranet_highlights', 'default');
