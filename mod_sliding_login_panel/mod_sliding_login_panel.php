<?php
// no direct access
defined('_JEXEC') or die;

$user = JFactory::getUser();
if ($user->guest) {
    $login = 'Log in';
    $user->username = 'Guest';
}
else {
    $login = 'Show Info';
}

// include the template for display
require JModuleHelper::getLayoutPath('mod_sliding_login_panel', $params->get('layout', 'default'));