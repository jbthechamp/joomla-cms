<?php
/**
<<<<<<< HEAD
 * @package     Joomla.Administrator
 * @subpackage  com_login
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
=======
 * @package		Joomla.Administrator
 * @subpackage	com_login
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License, see LICENSE.php
>>>>>>> FETCH_HEAD
 */

defined('_JEXEC') or die;

$input = JFactory::getApplication()->input;
$task = $input->get('task');

if ($task != 'login' && $task != 'logout')
{
	$input->set('task', '');
	$task = '';
}

$controller = JControllerLegacy::getInstance('Login');
$controller->execute($task);
$controller->redirect();
