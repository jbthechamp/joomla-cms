<?php
/**
<<<<<<< HEAD
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
=======
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
>>>>>>> FETCH_HEAD
 */

defined('_JEXEC') or die;

/**
 * Contact Component Category Tree
 *
 * @since  1.6
 */
class ContactCategories extends JCategories
{
	/**
	 * Class constructor
	 *
	 * @param   array  $options  Array of options
	 *
	 * @since   1.6
	 */
	public function __construct($options = array())
	{
		$options['table'] = '#__contact_details';
		$options['extension'] = 'com_contact';
		$options['statefield'] = 'published';
		parent::__construct($options);
	}
}
