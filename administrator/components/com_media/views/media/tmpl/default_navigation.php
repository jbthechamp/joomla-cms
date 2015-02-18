<?php
/**
<<<<<<< HEAD
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
=======
 * @package		Joomla.Administrator
 * @subpackage	com_media
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
>>>>>>> FETCH_HEAD
 */

defined('_JEXEC') or die;
$app	= JFactory::getApplication();
$style = $app->getUserStateFromRequest('media.list.layout', 'layout', 'thumbs', 'word');
?>
<div class="media btn-group">
	<a href="#" id="thumbs" onclick="MediaManager.setViewType('thumbs')" class="btn <?php echo ($style == "thumbs") ? 'active' : '';?>">
	<i class="icon-grid-view-2"></i> <?php echo JText::_('COM_MEDIA_THUMBNAIL_VIEW'); ?></a>
	<a href="#" id="details" onclick="MediaManager.setViewType('details')" class="btn <?php echo ($style == "details") ? 'active' : '';?>">
	<i class="icon-list-view"></i> <?php echo JText::_('COM_MEDIA_DETAIL_VIEW'); ?></a>
</div>
